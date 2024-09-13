<?php

namespace App\Controllers;
use Phphelper\Core\Request;
use Phphelper\Core\Response;
use Phphelper\Core\Router;

class HomeController{


    #[Router(path:'/', method:'GET',middleware:'got')]
   public function home(Request $request,Response $response) {

        $db = $request->getDatabase();

        $properties = $db->fetchAllSql('SELECT ap.* , pp.p_photo from properties as ap inner join property_photo as pp on ap.id = pp.property_id where ap.state = ? and is_available=? order by rand() limit 18',['active',true]);
        // print_r($properties);
        
        return $response->render('home/home',['properties'=>$properties]);
    }


    #[Router(path:'/about', method:'GET',middleware:'got')]
   public function about(Request $request,Response $response) {

        $db = $request->getDatabase();
       
        // print_r($properties);
        $response->disableLayouts(true);
        $response->withHeader('layouts/header');
        return $response->render('home/about');
    }





}//HomeController