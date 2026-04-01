<?php

use App\Http\Controllers\CalciisController;
use App\Http\Controllers\FirstIsController;
use App\Http\Controllers\InvokableIsController;
use App\Http\Controllers\ResourcesIsController;
use Illuminate\Routing\RouteUrlGenerator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIIsController;



// 1 parameter is url and 2 parameter is name of the controller and name of the method

Route::get('/firstisController', [FirstIsController::class, 'show']);
Route::get('/firstisController1/{id}', [FirstIsController::class, 'display']);

Route::get('/sum/{a}/{b}', [CalciisController::class, 'add']);
Route::get('/sub/{a}/{b}', [CalciisController::class, 'sub']);
Route::get('/mul/{a}/{b}', [CalciisController::class, 'mul']);
Route::get('/div/{a}/{b}', [CalciisController::class, 'div']);

// this is Invokable Controller
Route::get('/invokingis/{id}', InvokableIsController::class);


// this is Resource {no need to give the route like '/demo' ye khud se dekh lega kha jana h}
Route::resource('demo', ResourcesIsController::class);


// this is the API Controller {CRUD} Operation
Route::apiResource('api', APIIsController::class);


// Middleware
use App\Http\Controllers\MiddelwareIsController;
// this is the normal middleware
Route::get('/normal-middleware', [MiddelwareIsController::class, "show"])->middleware('checkingage');

// this is the global middleware
Route::get('/globle-middleware', [MiddelwareIsController::class, 'show']);


// task 2;
Route::get('/task2', function () {
    echo "dhruva";
    echo "123";
});


// this is the Contruct middleware
use App\Http\Controllers\ConstructController;

Route::get('/constructmid', [ConstructController::class, 'privacy']);


// this is tamplate inheritance
Route::view('/signin', 'signin');
Route::view('/signout', 'singnout');


// group routing with prefix
use App\Http\Controllers\EasyController;
/*
Route::prefix('master') -> controller(EasyController::class) -> group(function(){

    Route::get('/student' , 'show');
    Route::get('/teacher/{id}' , 'display');

});
 */

/*
/// group routing without prefix {work aacha dikhat h only ye hi kaam h}
Route::controller(EasyController::class)->group(function(){
    Route::get('/student' , 'show');
    Route::get('/teacher/{id}' , 'display');
});
 */


/*
/// rotueing with constrain
Route::controller(EasyController::class)->group(function(){
    Route::get('/student' , 'show');
    Route::get('/teacher/{id}' , 'display')->where('id' , '[0-9]{3}');

    Route::get('/user/{name}','user');
    Route::get('/displayname/{name}','displayname')->where('name' , '[0-9]+'); // ye globle condition ko overide kre dega 

});
 */

/*
/// php output

Route::get('/def' , function(){
    /// this is the first way to show to output
    //$name = " dhruva Maheshwari";
    //echo "The name is ".$name;

    /// this is  the 2 way to show the output
    //$age = 10;
    //var_dump($name);
    //var_dump($age);

    //$name = ["Dhruva Maheshwari" , "Astha" , "bhanu" , "priyashu"];
    //print_r($name);

    /// return the view using the assosiative array;
    // return view('success' , ['name' => $name]);


    $age=12;
    return view('success' , compact('age'));
});
 */


// Domain Routing
Route::get('/admin', function () {
    return "i am admin";
});

Route::get('/user', function () {
    return "i am user";
});
