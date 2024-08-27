<?php

namespace App\Controllers;
use App\Helpers\MailSender;
use App\Helpers\Validation;
use Phphelper\Core\Request;
use Phphelper\Core\Response;

class AuthController{
    public function loginPage(Request $request,Response $response,$params){
        $type = $params->type;
        return $response->render('auth/login',['type'=>$type]);       
    }//loginPage

    public function registerPage(Request $request,Response $response,$params){
        $type = $params->type;
        return $response->render('auth/register',['type'=>$type]);       
    }//loginPage

//   global $tenant_id, $full_name, $email, $password, $phone_no, $address, $id_type, $id_photo, $errors, $db, $email_verified_at, $verification_code;

    public function register(Request $request,Response $response){

        $db = $request->getDatabase();
        [$data,$errors] = Validation::validateRegister($request,$db);
        $role = $data['role'];

        if( !empty($errors)  ) return $response->render('auth/register',['errors'=>$errors,'type'=>$role,'data'=>$data ] );


        $path = $request->uploadImage('id_photo');

        if(!$path)  return $response->render('auth/register',['errors'=>$errors,'type'=>$role,'data'=>$data ] );

        $data['id_photo'] = $path;
        $data['password'] = hash('sha256', $data['password']);

        //email sending process
        $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        $subject = 'Email verification';
        $body = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';


        $isMailSent = MailSender::send( $data['email'], $data['full_name'], $subject, $body );

        if(!$isMailSent) die("Something went wrong");

        $data['verification_code'] = $verification_code;

        $isInserted = $db->insert('users',$data);
        if(!$isInserted){
            echo "Something went wrong with the database";
        }//

        return $response->redirect('/');
        
        
    }//loginPage

    

    public function login(Request $request,Response $response){
        $email = $request->email;
        $password = $request->password;

        $hasedPassword = hash('sha256',$password);
        $db = $request->getDatabase();
       
        $user = $db->fetchOne('users',['email'=>$email,'password'=>$hasedPassword]);

        if(!$user) return $response->render('auth/login',['error'=>'Invalid Credentials','type'=>'tenant']);

        if($user['email_verified_at'] == null){
            return $response->render('auth/email_verify',['id'=>$user['id'] ]);
        }

        $request->setUser($user);
        return $response->redirect('/');


    }//if login


    public function getVerifyEmail(Request $request,Response $response,$params){
        $id = $params->id;

        return $response->render('auth/email_verify',['id'=>$id]);

        // echo $id;
    }//if login

    public function verifyEmail(Request $request,Response $response){
        $id = $request->id;
        $verification_code = $request->verification_code;

        $date = date("Y-m-d H:i:s");
        // $sql = "UPDATE tenant SET email_verified_at = NOW() WHERE email = '" . $email . "' AND verification_code = '" . $verification_code . "' AND otp_created_at > NOW() - INTERVAL 2 MINUTE";
        
        $db = $request->getDatabase();
        $isUpdated = $db->update('users',['email_verified_at'=>$date],  ['id'=>$id,'verification_code'=>$verification_code ]);
        if(!$isUpdated){
            return $response->render('auth/email_verify',['id'=>$id,'error'=>"Otp is invalid"]);
        }

        return $response->redirect('/');

        // echo $id;
    }//if login

    public function logout(Request $request,Response $response){
       $request->logout();
       return $response->redirect('/');

    }//if login



}