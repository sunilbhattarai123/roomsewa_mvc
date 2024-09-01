<?php 


namespace App\Controllers;
use Phphelper\Core\Request;
use Phphelper\Core\Response;
use Phphelper\Core\Router;

class OwnerController{

    #[Router(path:'/owner/', method:'GET')]
    public function getHome(Request $request,Response $response){

        $db = $request->getDatabase();
        $id = $request->getUser()->id;

        $user = $db->fetchOne('users',['id'=>$id]);

        $sql = "SELECT ap.* , pp.p_photo from properties as ap left join property_photo as pp on ap.id = pp.property_id where ap.user_id = ? order by id desc";
        
        $properties = $db->fetchAllSql($sql,[$id]);


        

        $sql = "SELECT * from users u join (SELECT p.*,b.user_id as booked_user from properties  p join booking b on p.id = b.property_id where p.user_id = ? ) pb on u.id = pb.booked_user";

        $bookedProperties = $db->fetchAllSql($sql,[$id]);

    


        $data = ['profile'=>$user,'properties'=>$properties,'bookedProperties'=>$bookedProperties];


        return $response->render("owner/home_owner",$data);
    }//getHOme


}