<?php

namespace App\Controllers;
use Phphelper\Core\Request;
use Phphelper\Core\Response;
use Phphelper\Core\Router;

class ProfileController{

    #[Router(path:'/profile/{other_id?}', method:'GET')]
    public function getProfile(Request $request,Response $response,$params){
        $response->disableLayouts(true);
        $response->withHeader('layouts/header');
        $id = $params->other_id; 
        
        if(!$id)
            $id = $request->getUser()->id;
        $viewer_id = $request->getUser()->id;
        $db = $request->getDatabase();


        $isRatingAllow = true;
        if($viewer_id == $id)
        $isRatingAllow = false;

        // $ratingByViewer = $db->fetchOne('ratings',['other_id'=>$id,'user_id'=>$viewer_id]);
        // if($ratingByViewer) $isRatingAllow = false;

   
        $user = $db->fetchOne('users',['id'=>$id]);
        if(!$user){
            echo "User not found";
            return;
        }//
        $rating = $db->fetchOneSql("SELECT AVG(rating) as ratingcount from ratings where other_id=?  ",[$id])['ratingcount'];
        if(!$rating) $rating = 0;
        $rating = round($rating,1);
        return $response->render('profile/profile',['profile'=>$user,'rating'=>$rating,'isRatingAllow'=>$isRatingAllow]);

    }//
    
    #[Router(path:'/update_profile', method:'POST',middleware:'')]
    public function updateProfile(Request $request,Response $response){
        $full_name= $request->full_name;
        $phone_no= $request->phone_no;
        $address= $request->address;
        if(!$full_name || !$phone_no || !$address){
            die('All fields should be given with proper data');

        }
        if( strlen($full_name)<6 ){
           die( "Name must be greater than 6 charcters");
        }//name error

     
        if(strlen($phone_no)!= 10){
          die("Phone number must be 10 digits");
        }//phone error

        if( strlen($address)<6){
            die( "Address must be 6 chars long");
        }//address error


        $id=$request->getUser()->id;
       $isUpated = $request->getDatabase()->update('users',['full_name'=>$full_name,'phone_no'=>$phone_no,'address'=>$address],['id'=>$id]);
        return $response->redirect();
    }//update profile

    
    
    #[Router(path:'/update_profile_images', method:'POST')]
    public function updateProfileImages(Request $request,Response $response){


        $id = $request->getUser()->id;
        $db = $request->getDatabase();

        if($request->hasFile('profile_pic')){
            if(!$request->isImageSupported('profile_pic')) die('Profile picture uploaded is not uploaded');


           


            $user = $db->fetchOne('users',['id'=>$id]);
            
           $db_profile_pic = "/public/uploads/".  $user['profile_pic'];

           if(file_exists($db_profile_pic)) {
            unlink($db_profile_pic);
            }



            $path = $request->uploadImage('profile_pic');
            if(!$path) die('Something went wrong uploading profile image');

        


            $isUpdatedProfile = $db-> update('users',['profile_pic'=> $path],['id'=>$id]);
            if(!$isUpdatedProfile) die("SOmething went wrong uploading profile pictures");


        }//if profile picture




        if($request->hasFile('cover_pic')){
            if(!$request->isImageSupported('cover_pic')) die('Profile picture is not uploaded');


           


            $user = $db->fetchOne('users',['id'=>$id]);
            
           $db_cover_pic = "/public/uploads/".  $user['cover_pic'];

           if(file_exists($db_cover_pic)) {
            unlink($db_cover_pic);
            }



            $path = $request->uploadImage('cover_pic');
            if(!$path) die('Something went wrong uploading profile image');

        


            $isUpdatedProfile = $db-> update('users',['cover_pic'=> $path],['id'=>$id]);
            if(!$isUpdatedProfile) die("SOmething went wrong uploading profile pictures");


        }//if cover picture





        return $response->redirect();

    }//updateprofileimages



}//class