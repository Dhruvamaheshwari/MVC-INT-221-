<?php

use Illuminate\Support\Facades\Route;



/**
 concept covered
 1. Basic form creation
 2. Form returned via controller
 3. Request data retrieval one method inside controller
    3.a. when you are entring nothing , it shows no value entered via a reutrn statement
 4. usage of csrf for avoding 416 paga expired error
 5. Validate fucntion usage for validating data
 6. Usage of blade directive for error @error
 7. How form repoputate that is old input, insert value in form
 */

use App\Http\Controllers\FormIsController;

/**
Route::get('/form' , [FormIsController::class , 'show']);
Route::post('/submit' , [FormIsController::class , "submitForm"]);
 */

/**

Route::get('/form', [FormIsController::class, 'show']);
Route::post('/submit', [FormIsController::class, "submitForm"]);


use App\Http\Controllers\UploadIsController;

Route::get('/display', [UploadIsController::class, "display"]);
Route::post('/upload', [UploadIsController::class, "upload"]);


Route::get('/', function () {
   return view('homeIs');
});


use APP\Http\Controllers\Task1Controller;


Route::get('/task1', [Task1Controller::class, "show"]);



Route::get('/lang/{locale}', function ($locale) {
   session(['locale' => $locale]); // associative array to pass the value
   return redirect()->back();
});
 */
/**   


// Mail
use App\Http\Controllers\MainController;
use Symfony\Component\CssSelector\Node\FunctionNode;
use Illuminate\Support\Facades\Request;

Route::get('/mail', [MainController::class, "send"]);


// Task 2
Route::get('/set_cookie', function () {
   return response('cookie')->cookie('city', 'delhi');
});
Route::get('/get_cookis', function (Request $request) {
   if ($request->hasCookie('city'))
      return $request->cookie('city');
   else
      return 'cookie is not prest';
});
 */


// Topic => session 

use App\Http\Controllers\SessionIsControlle;

Route::view('/login', 'formIs');
Route::post('/submit', [SessionIsControlle::class, 'login']);

Route::get('/home', function () {
   return view('sessionIs');
});

Route::get('/logout', [SessionIsControlle::class, 'logout']);
