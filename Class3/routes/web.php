<?php

use App\Http\Controllers\CalciisController;
use App\Http\Controllers\FirstIsController;
use App\Http\Controllers\InvokableIsController;
use App\Http\Controllers\ResourcesIsController;
use Illuminate\Routing\RouteUrlGenerator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIIsController;



// 1 parameter is url and 2 parameter is name of the controller and name of the method

Route::get('/firstisController' , [FirstIsController::class,'show']);
Route::get('/firstisController1/{id}' , [FirstIsController::class,'display']);

Route::get('/sum/{a}/{b}' ,[CalciisController::class,'add']);
Route::get('/sub/{a}/{b}' ,[CalciisController::class,'sub']);
Route::get('/mul/{a}/{b}' ,[CalciisController::class,'mul']);
Route::get('/div/{a}/{b}' ,[CalciisController::class,'div']);

// this is Invokable Controller
Route::get('/invokingis/{id}' , InvokableIsController::class);


// this is Resource {no need to give the route like '/demo' ye khud se dekh lega kha jana h}
Route::resource('demo' , ResourcesIsController::class);


// this is the API Controller {CRUD} Operation
Route::apiResource('api' , APIIsController::class);


// Middleware
use App\Http\Controllers\MiddelwareIsController;
// this is the normal middleware
Route::get('/normal-middleware' , [MiddelwareIsController::class , "show"])->middleware('checkingage');

// this is the global middleware
Route::get('/globle-middleware' , [MiddelwareIsController::class , 'show']);


// task 2;
Route::get('/task2' , function(){
    echo "dhruva";
    echo "123";
});

