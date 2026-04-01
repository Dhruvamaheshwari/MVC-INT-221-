<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;



/*
// in this return the view;
Route::get('/', function () {
    return view('welcome');
});


// this is Group routing
Route::prefix('master')->group(function(){

    Route::get('/profile' , function() {
        return "Hello my name is Dhruva Maheshwari. world Richest Persion";
    });

});

 */
// In this paramert pass mandatory;
/*
Route::get('/username/{name}' , function($name){
    return "mera naam h jeee " . $name;
});
 */

/*
// this is the optionla parameter pass or not pass fine;
Route::get('/username/optional/{name?}' , function($name = "DM"){
    return "hello kya haal h ".$name;
});

// this i for if page not found;
Route::fallback(function(){
    //return "sorryyyyy this page is not Found";
    return view('notFound');
});

// this is redirecting
Route::get('/login' , function(){
    return "this is the loign page";
});

Route::get('/singup' , function(){
    return redirect('login');
});

Route::get('/logout' , function(){
    return "this is the logout route";
});

// this is the temoport redirect 
Route::get('/niklo' , function(){
    return redirect()->back();
});

// this is the permanent Redirect
Route::get('/back' , function(){
    return redirect()->back(301);
});
 */

//?---------------------------------Unit 3----------------------------------------

/*
    use App\Http\Controllers\FirstIsController;
    use App\Http\Controllers\InvokableIsController;
    use App\Http\Controllers\ResourcesIsController;

    Route::get('/profile' , [FirstIsController::class , 'profile']);

    Route::get('/display/{id}' , [FirstIsController::class , "display"]);


    Route::get('/invokableiscontroller/{id}' , InvokableIsController::class);


    Route::resource('todo' , ResourcesIsController::class);
 */

//?--------------------------------------Task---------------------------------------
/*
//todo ------------------------------1-------------------------
//  first way to do this {Using closure}
Route::get('/hello' , function(){
    return "Hello Dhruva Maheshwari";
});

Route::get('/about' , function(){
    return "This is Abour page";
});

Route::get('/contact' , function(){
    return "This is the contact page";
});


use App\Http\Controllers\Task1IsController;
// Second way to do this {Using controller}
Route::get('/hello-controller' , [Task1IsController::class , 'hello']);
Route::get('/about-controller' , [Task1IsController::class , "about"]);
Route::get('/contact-controller' , [Task1IsController::class , "contact"]);
 */

/*
//todo--------------------------------------2-------------------------
Route::get('/user/{name?}' , function($name = "guest"){
    return 'Welcome '.$name;
});
 */

//? to create the api controller
/*
use App\Http\Controllers\APIIsController;
Route::apiResource('api' , APIIsController::class);
 */


//? to create the middeleware
/*
use App\Http\Controllers\MiddlewareIsController;

Route::get('/rich', [MiddlewareIsController::class, "show"])->middleware('checkRoleandAge');
 */

//? import the construct Controllers
use App\Http\Controllers\ConstructController;
Route::get('/construct' , [ConstructController::class , 'show']);


//? task 4
use App\Http\Controllers\Task4Controller;
Route::get('/open' , [Task4Controller::class , "show"]);


//? this is the Template inheritance
Route::view('/signin' , 'signin');
Route::view('/signout' , 'signout');

//? task5
Route::view('/about' , 'about');
Route::view('/contact' , 'contact');
Route::view('/blog' , 'blog');


//? Routing with condition using the group
// this is the Router level routing;
use App\Http\Controllers\ConditionController;
/*
Route::controller(ConditionController::class)->group(function(){
    Route::get('/username/{name}' , 'username')->where('name' , '[a-zA-Z]+');
    Route::get('/userage/{age}' , 'userage')->where('age' , '[0-9]+');
    Route::get('/userid/{userid}' , 'userid')->where('userid' , '[0-9a-zA-Z]+');
});
 */

// this is the Globle level routing;
Route::controller(ConditionController::class)->group(function(){
    Route::get('/username/{name}' , 'username');
    Route::get('/userage/{age}' , 'userage');
    Route::get('/userid/{userid}' , 'userid');
});