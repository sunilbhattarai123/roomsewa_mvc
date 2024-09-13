<?php 


namespace App\Controllers;
use App\Helpers\requestsender;
use Phphelper\Core\Request;
use Phphelper\Core\Response;
use Phphelper\Core\Router;

class PropertyController{




    #[Router(path:'/add_property',method:'POST',middleware:'owner')]
    public function addProperty(Request $request,Response $response){

        $data = $request->getData();

        $path = null;
        if($request->hasFile('p_photo')){
            if(!$request->isImageSupported('p_photo')) die("Image format is not supported");

            $path = $request->uploadImage('p_photo');
        }
        else{
            die("Image is required");
        }

        // $data['p_photo'] - $path;
        $data['user_id'] = $request->getUser()->id;

        $db = $request->getDatabase();
        $isInserted =  $db->insert('properties', $data);
        if(!$isInserted){
            die("Something went wrong uploading image");
        }
       

       $isImageUplaoded = $db->insert('property_photo',['p_photo'=>$path,'property_id'=>$isInserted]);
       if(!$isImageUplaoded) die("Image cannot be inserted");

        return $response->redirect();
        
        
    }//add Property

 
    #[Router(path:'/unbook_property/{id}',method:'Get',middleware:'owner')]
    public function unbookProperty(Request $request,Response $response,$params){
         $id= $params->id;
         $user_id= $request->getUser()->id;
         

         $db= $request->getDatabase();

         $is_property = $db->update('properties',['booked'=>"No"],['id'=>$id,'user_id'=>$user_id]);
         if(!$is_property) die("this property does not exits");

         $db->delete('booking',['property_id'=>$id]);

         return $response->redirect('/');



    }


    
    #[Router(path:'/delete_property',method:'POST',middleware:'owner')]
    public function deleteProperty(Request $request,Response $response){

        $id = $request->id;
        $user_id = $request->getUser()->id;
        $data = $request->getData();

      print_r($user_id);
      print_r($id);

        // $data['p_photo'] - $path;
      

        $db = $request->getDatabase();
        $isDeleted =  $db->delete('properties', ['id'=>$id,'user_id'=>$user_id]);
        if(!$isDeleted){
            die("Something went wrong deleting... ");
        }
       


        return $response->redirect('/');
        
        
    }//add Property


    #[Router(path:'/update_property',method:'POST',middleware:'owner')]
    public function updateProperty(Request $request,Response $response){

        $data = $request->getData();
        $id = $request->id;


        // $data['p_photo'] - $path;
        $user_id = $request->getUser()->id;
        $data['user_id'] = $user_id;


        $db = $request->getDatabase();
        $isUpdated =  $db->update('properties', $data,['id'=>$id,'user_id'=>$user_id]);
        if(!$isUpdated){
            die("Something went wrong updating.");
        }
       
        return $response->redirect('/');
        
        
    }//update Property



    #[Router(path:'/sold_property/{id}',method:'GET',middleware:'owner')]
    public function soldProperty(Request $request,Response $response,$params){

        $id = $params->id;
        $user_id = $request->getUser()->id;
        $db = $request->getDatabase();
        $bookedProperty = $db->fetchOne("properties",['id'=>$id,'user_id'=>$user_id]);

        if(!$bookedProperty){
            die("Property not found");
        }
        if($bookedProperty['is_available']){
        $isUpdated =  $db->update('properties', ['is_available'=>false],['id'=>$id,'user_id'=>$user_id]);

        }
        else
        $isUpdated =  $db->update('properties', ['is_available'=>true],['id'=>$id,'user_id'=>$user_id]);
        
        if(!$isUpdated){
            die("Something went wrong updating.");
        }
       
        return $response->redirect('/');
        
        
    }//sold Property


    #[Router(path:'/booked_property', method:'GET')]
    public function bookedProperty(Request $request,Response $response){

        $id = $request->getUser()->id;
        $db = $request->getDatabase();
         
        $properties = $db->fetchAllSql('SELECT * from ( SELECT p.* from booking b join properties p on p.id = b.property_id where b.user_id = ?)  pb join  property_photo pp on pb.id = pp.property_id',[$id]);

        // print_r($properties);
        return $response->render('property/booked_property',['properties'=>$properties]);
    }//view Property




    #[Router(path:'/review', method:'POST')]
    public function reviewProperty(Request $request,Response $response){

        $property_id = $request->property_id;
        $comment = $request->comment;
        $rating = $request->rating;

        if(!$comment || !$rating){
            die("Please input some comment and rating");
        }
        $user_id = $request->getUser()->id;

        $db = $request->getDatabase();

        $isInserted = $db->insert('reviews',['property_id'=>$property_id,'comment'=>$comment,'rating'=>$rating,'user_id'=>$user_id]);
        return $response->redirect(null,['msg'=>"Thank you for giving review"]);
    }//view Property





    #[Router(path:'/book_property', method:'POST')]
    public function bookProperty(Request $request,Response $response){

        $prop_id = $request->id;
        $user_id = $request->getUser()->id;

        $db = $request->getDatabase();

        $property = $db->fetchOne('properties',['id'=>$prop_id]);
        if(!$property){
            die("This property does not exits");
        }
        if(!$property['booked'] == "Yes"){
            die("This property is already booked");
        }

        $isUpdated = $db->update('properties',['booked'=>'Yes'],['id'=>$prop_id]);
        if(!$isUpdated) die("Something went wrong booking the property");

        $isInserted = $db->insert('booking',['property_id'=>$prop_id,'user_id'=>$user_id]);
        if(!$isInserted) die("Something went wrong booking th property");

        echo "ok";
        return;

    }//view Property





    #[Router(path:'/property/{id}', method:'GET')]
    public function viewProperty(Request $request,Response $response,$params){

        $id = $params->id;
        $db = $request->getDatabase();


        $property = $db->fetchOneSql('SELECT ap.* , pp.p_photo from properties as ap inner join property_photo as pp on ap.id = pp.property_id where ap.id = ? and ap.state = ? ',[$id,'active']);
        if(!$property){
            die("Property not found");
        }
        // SELECT * from review where property_id='$property_id



        //recommendation process
        $recommendatingProperties = [];
        if($request->isLogin()){
            $user_id = $request->getUser()->id;
            $property_view = $db->fetchOne('property_views',['post_id'=>$id, 'user_id'=>$user_id]);
            if(!$property_view){
                $db->insert('property_views',['post_id'=>$id, 'user_id'=>$user_id]);
            }

            $ids = Requestsender::send($user_id);
            if(count($ids)!=0){
                $ids = implode(',', $ids);
        // $properties = $db->fetchAllSql('SELECT ap.* , pp.p_photo from properties as ap inner join property_photo as pp on ap.id = pp.property_id where ap.state = ? and C=? order by rand() limit 18',['active',true]);

               $recommendatingProperties =  $db->fetchAllSql("select properties.*,pp.p_photo from properties left join property_photo as pp on pp.property_id = properties.id where properties.id in ($ids) and properties.id != $id order by FIELD(properties.id,$ids)");
           
                }//count 0
               
            }//if login


        $reviews = $db->fetchAll('reviews',['property_id'=>$id]);
        
        return $response->render('property/view_property',['property'=>$property,'reviews'=>$reviews,'recommends'=>$recommendatingProperties]);

    }//view Property


    #[Router(path:'/edit_property/{id}', method:'GET')]
    public function editProperty(Request $request,Response $response,$params){

        $id = $params->id;
        $db = $request->getDatabase();
        $property = $db->fetchOneSql('SELECT ap.* , pp.p_photo from properties as ap inner join property_photo as pp on ap.id = pp.property_id where ap.id = ? and ap.state = ? ',[$id,'active']);
        if(!$property){
            die("Property not found");
        }
      
        
        return $response->render('property/edit_property',['property'=>$property]);

    }//edit Property
    




    #[Router(path:'/search_property', method:'POST')]
    public function searchProperty(Request $request,Response $response){

        $search_property = $request->search_property;
        $property_type = $request->property_type;
        $price_range = $request->price_range;

        $conditions = array();

        $sql = "SELECT ap.* , pp.p_photo from properties as ap left join property_photo as pp on ap.id = pp.property_id where state=? and is_available=?  and ";

        // Add conditions based on search input
        if (!empty($search_property)) {
            $conditions[] = "CONCAT(zone, district, province, city, tole, property_type, country, description) LIKE '%$search_property%' ";
        }
    
        if (!empty($property_type)) {
            $conditions[] = "property_type = '$property_type'";
        }
     
        if (!empty($price_range)) {
            // Parse the price range into minimum and maximum values
            
            $price_parts = explode('-', $price_range);
            $min_price = (int)trim($price_parts[0]);
            $max_price = (int)trim($price_parts[1]);
            $conditions[] = "estimated_price BETWEEN $min_price AND $max_price";
        }
    
        // Append conditions to the SQL query
        if (!empty($conditions)) {
            $sql .= "  " . implode(' AND ', $conditions);
        } 


        $db = $request->getDatabase();
        // print_r($sql);
        $properties = $db->fetchAllSql($sql,['active',true]);

        return $response->json($properties);

    }//view Property




    
}//proper cass