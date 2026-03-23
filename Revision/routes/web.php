<?php

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

use App\Http\Controllers\FirstIsController;
use App\Http\Controllers\InvokableIsController;
use App\Http\Controllers\ResourcesIsController;

Route::get('/profile' , [FirstIsController::class , 'profile']);
Route::get('/display/{id}' , [FirstIsController::class , "display"]);


Route::get('/invokableiscontroller/{id}' , InvokableIsController::class);


Route::resource('todo' , ResourcesIsController::class);
