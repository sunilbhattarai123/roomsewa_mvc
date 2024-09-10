<?php
namespace App\Controllers;
use Phphelper\Core\Request;
use Phphelper\Core\Response;
use Phphelper\Core\Router;




class RatingController{
    #[Router(path:"/rating",method:'POST',middleware:'auth')]

    public function rating(Request $request , Response $response){

        $other_id = $request->id;
        $user_id = $request->getUser()->id;
        $rating = (int)$request->rating;

        if($other_id == $user_id)
        return die("Same user cannot rate yourself");

        if($rating<=0 && $rating >5){
            die("rating must be between 1 to 5");
        }//rating check


        $db = $request->getDatabase();
        $ratingTable= $db->fetchOne('ratings',['user_id'=>$user_id,'other_id'=>$other_id]);
        if($ratingTable)
        {
            $db->update('ratings',['rating'=>$rating],['user_id'=>$user_id,'other_id'=>$other_id]);
            return $response->redirect();
        } 

       $ratingTable = $db->insert("ratings",["user_id"=>$user_id,'other_id'=>$other_id,'rating'=>$rating]);
        if(!$ratingTable){
            die("something went wrong");
        }
        return $response->redirect();

    }
}
?>