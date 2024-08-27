<?php 


namespace App\Controllers;
use Phphelper\Core\Request;
use Phphelper\Core\Response;

class PropertyController{
    public function viewProperty(Request $request,Response $response,$params){

        $id = $params->id;
        $db = $request->getDatabase();
        $property = $db->fetchOneSql('SELECT ap.* , pp.p_photo from add_property as ap inner join property_photo as pp on ap.property_id = pp.property_id where ap.property_id = ?',[$id]);
        if(!$property){
            die("Property not found");
        }
        // SELECT * from review where property_id='$property_id
        $reviews = $db->fetchAll('review',['property_id'=>$id]);
        
        return $response->render('property/view_property',['property'=>$property,'reviews'=>$reviews]);

    }//view Property


}//proper cass