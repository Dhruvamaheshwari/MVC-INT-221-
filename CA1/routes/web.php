<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


// Task 1
Route::get('/show/{name}' ,function($name) {
    return view('info' , compact('name'));
});

Route::view('/adf/sdf' , 'info')->name('dhruva');
Route::view('/' , 'welcome');


// Task 2
Route::get('/id/{id}' , function($id){
    if($id == 1){
        return response()->JSON([
        "name" => "Dhruva",
        "Role" => "Student",
        ]);
    }
    else{
        return redirect('/error');
    }
});
Route::get('/error' , function(){
    return 'Invalid user';
});

// Task 3;
use App\Http\Controllers\Task3Controller;
Route::get('/show/{name}/{age}' , [Task3Controller::class , 'show']);

Route::get('/invalid' , function(){
    return 'this is invalid age';
});