<?php

namespace App\Controllers;
use App\Helpers\MailSender;
use App\Helpers\Validation;
use Phphelper\Core\Request;
use Phphelper\Core\Response;
use Phphelper\Core\Router;

class AdminController
{



    #[Router(path: '/admin/users', method: 'GET',middleware:'admin')]
    public function users(Request $request, Response $response)
    {
        $db= $request->getDatabase();
        $users = $db->fetchAllSql("SELECT * from users order by id desc ");
        return $response->render("admin/admin_users", ['users'=>$users]);
    }//loginPage
   




    #[Router(path: '/admin/properties', method: 'GET',middleware:'admin')]
    public function adminProperties(Request $request, Response $response)
    {
        $db= $request->getDatabase();
        $properties = $db->fetchAllSql("SELECT pr.*,pp.p_photo from properties pr  left join property_photo pp on pr.id=pp.property_id  order by id desc ");
        return $response->render("admin/admin_properties", ['properties'=>$properties]);
    }//properties






    #[Router(path: '/admin/reviews', method: 'GET',middleware:'admin')]
    public function adminReviews(Request $request, Response $response)
    {
        $db= $request->getDatabase();
        $properties = $db->fetchAllSql("SELECT pr.*,pp.p_photo from properties pr  left join property_photo pp on pr.id=pp.property_id where pr.state=? order by id desc ",['pending']);
        return $response->render("admin/admin_review", ['properties'=>$properties]);
    }//reviews



    


    #[Router(path: '/admin/booked', method: 'GET',middleware:'admin')]
    public function adminBooked(Request $request, Response $response)
    {
        $db= $request->getDatabase();
        $sql = "SELECT * from users u join (SELECT p.*,b.user_id as booked_user,b.id as booking_id from properties  p join booking b on p.id = b.property_id  ) pb on u.id = pb.booked_user";

        $bookedProperties = $db->fetchAllSql($sql);

        return $response->render("admin/admin_booking", ['properties'=>$bookedProperties]);
    }//booked

    
    
    #[Router(path: '/admin/user/delete', method: 'POST',middleware:'admin')]
    public function deleteUser(Request $request, Response $response)
    {
        $user_id = $request->id;
        if(!$user_id) return die ("Please Provide User Id");
        $db= $request->getDatabase();

        $deleted_user= $db->delete('users',['id'=>$user_id]);
        // $users = $db->fetchAllSql("SELECT * from users order by id desc ");
        return $response->redirect();
    }//delete users




    #[Router(path: '/admin/property/review', method: 'POST',middleware:'admin')]
    public function reviewProperty(Request $request, Response $response)
    {
        $property_id = $request->id;
        $state = $request->state;
        if(!$property_id) return die ("Please Provide property Id");
        $db= $request->getDatabase();

        $update_property= $db->update('properties',['state'=>$state],['id'=>$property_id]);
        // $users = $db->fetchAllSql("SELECT * from users order by id desc ");
        return $response->redirect();
    }//delete 





    

    #[Router(path: '/admin/property/delete', method: 'POST',middleware:'admin')]
    public function deleteProperty(Request $request, Response $response)
    {
        $property_id = $request->id;
        if(!$property_id) return die ("Please Provide property Id");
        $db= $request->getDatabase();

        $deleted_property= $db->delete('properties',['id'=>$property_id]);
        // $users = $db->fetchAllSql("SELECT * from users order by id desc ");
        return $response->redirect();
    }//delete properties
    


    #[Router(path: '/admin/login', method: 'GET',middleware:'guest')]
    public function login(Request $request, Response $response)
    {

        $response->disableLayouts(true);
        $response->withHeader('layouts/header');
        $response->render('admin/auth/login_admin');
    }//loginPage




    #[Router(path: '/admin/', method: 'GET',middleware:'admin')]
    public function home(Request $request, Response $response)
    {

    $db= $request->getDatabase();
    
    $total_user = $db->fetchOneSql("SELECT COUNT(*) AS count From users")['count'];
    $Properties_count = $db->fetchOneSql("SELECT COUNT(*) AS count From properties")['count'];
    $Booked = $db->fetchOneSql("SELECT COUNT(*) AS count From booking")['count'];
    
    $properties = $db->fetchAllSql("SELECT * from properties ORDER BY created_at Desc Limit 18");
    // print_r($properties);
    
    //  print_r($total_user); 
    //  print_r($Properties_count); 
    //  print_r($Booked);


    $data =[
        'user_count'=> $total_user,
        'property_count'=>$Properties_count,
        'booking_count'=> $Booked,
        'properties'=> $properties

    ];



    $response->disableLayouts(true);
        // $response->withHeader('layouts/header');
        $response->render('admin/admin_home',$data);
    }//loginPage


    #[Router(path: '/admin/logout', method: 'GET',middleware:'admin')]
    public function logout(Request $request, Response $response)
    {

        $request->removeSession('admin');
        return $response->redirect('/');
    }//loginPage







    

    #[Router(path: '/login_admin', method: 'POST')]
    public function AdminLogin(Request $request, Response $response)
    {
        $email = $request->email;
        $password = $request->password;
        $hasedPassword = hash('sha256', $password);
        $db = $request->getDatabase();

        $admin = $db->fetchOne('admins', ['email' => $email, 'password' => $hasedPassword]);

        if (!$admin)
            return $response->redirect(null, ['email' => $email, 'password' => $password, 'error' => 'Invalid Credentials']);

        // $request->logout();
        $request->removeSession('user');
        $request->setSession('admin',$admin);


        return $response->redirect('/admin/');


    }//if login




}