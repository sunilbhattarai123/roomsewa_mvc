<?php
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\MessageController;
use App\Controllers\ProfileController;
use App\Controllers\PropertyController;
use Phphelper\Core\Request;
use Phphelper\Core\Response;
use Phphelper\Core\Router;





$auth = function (Request $request, Response $response){
    if(!$request->isLogin()) return $response->redirect('/login/');
}; //middleware


$got = function (Request $request, Response $response){
    // if($request->isLogin()) return $response->redirect('/');
    $user = $request->getUser();
    if(!$user) return;

    $role = $user->role;
  
    // die();
    if($role=='owner') return $response->redirect('/owner/');

    
}; //middleware

$guest = function (Request $request, Response $response){
    if($request->isLogin()) return $response->redirect('/');
}; //middleware



$tenant = function (Request $request, Response $response){

    if(!$request->isLogin()) return $response->redirect('/login');

    $user = $request->getUser();

    $role = $user->role;
    if($role=='owner') return $response->redirect('/owner/');

};


$owner = function (Request $request, Response $response){

    if(!$request->isLogin()) return $response->redirect('/login');

    $user = $request->getUser();

    $role = $user->role;
    if($role!='owner') return die("You do not have permission to access this feature");

};

Router::addMiddleWare('auth', $auth);
Router::addMiddleWare('owner', $owner);
Router::addMiddleWare('tenant', $tenant);
Router::addMiddleWare('got', $got);
Router::addMiddleWare('guest', $guest);




//home
// Router::get('/',[HomeController::class,'home'] );
Router::get('/contact','home/contact');
Router::get('/about','home/about' );
//home



//auth
Router::get('/admin/login','admin/auth/login_admin','guest');
Router::get('/login_choice','auth/choice/login_choice','guest' );
Router::get('/register_choice','auth/choice/register_choice','guest' );


// Router::get('/login/{type?}',[AuthController::class,'loginPage']);
// Router::get('/register/{type?}',[AuthController::class,'registerPage']);
// Router::get('/verify_email/{id}',[AuthController::class,'getVerifyEmail']);
// Router::get('/logout',[AuthController::class,'logout']);

// Router::post('/register',[AuthController::class,'register']);
// Router::post('/login',[AuthController::class,'login']);
// Router::post('/verify_email',[AuthController::class,'verifyEmail']);
// Router::post('/resend_otp',[AuthController::class,'resendOtp']);

//auth



//property
// Router::get('/property/{id}',[PropertyController::class,'viewProperty'] );
// Router::post('/search_property',[PropertyController::class,'searchProperty']);


// Router::post('/book_property',[PropertyController::class,'bookProperty']);
// Router::post('/review',[PropertyController::class,'reviewProperty']);
// Router::get('/booked_property',[PropertyController::class,'bookedProperty']);

//property



//profile

// Router::get('/profile/{other_id?}',[ProfileController::class,'getProfile']);


//profile


// //message
// Router::get('/messages',[MessageController::class,'messageProfiles']);
// Router::get('/message/{id}',[MessageController::class,'messages']);

// Router::post('/send_message',[MessageController::class,'sendMessage']);
// //messag

