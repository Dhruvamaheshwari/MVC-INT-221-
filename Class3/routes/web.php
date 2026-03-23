<?php

use App\Http\Controllers\CalciisController;
use App\Http\Controllers\FirstIsController;
use App\Http\Controllers\InvokableIsController;
use App\Http\Controllers\ResourcesIsController;
use Illuminate\Routing\RouteUrlGenerator;
use Illuminate\Support\Facades\Route;



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