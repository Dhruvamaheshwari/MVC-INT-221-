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

// Task 4
// prefix with the Group routing
Route::prefix('master')->group(function(){
    Route::get('/name' , function(){
        return 'this is the prefix route';
    });
    Route::get('/contact' , function(){
        return "this is the prefix with group route";
    });
});

// With-out prefisx route
Route::group([] , function(){
    Route::get('/username' , function(){
        return 'this is group route';
    });
    Route::get('/usecotact' , function(){
        return 'this is without prefix group route';
    });
});
Route::fallback(function(){
    return "invalid URL";
});


//?-----------------------------------UNIT 3

// Task 1
use App\Http\Controllers\StudentController;
Route::get('/show' , [StudentController::class , 'show']);
Route::get('/student/details' , [StudentController::class , 'details']);

// Task 2
Route::view('/login' , 'signin');
Route::view('/logout' , 'signout');

// Task 2
Route::get('/dashboard' , function(){
    return 'This is the dashboard';
})->name('dashboard.page');

Route::get('/home' , function(){
    return redirect()->route('dashboard.page');
});

// Task 3
use App\Http\Controllers\Uint3Task3Controller;
Route::prefix('admin')->controller(Uint3Task3Controller::class)->group(function(){
    Route::get('/dashboard' , 'dashboard');
    Route::get('/profile' , 'profile');
});

// Task 4
Route::get('/id/{id}' , function($id){
    return "id is ".$id;
})->where('id' , '[0-9]{1,3}');


// Task 5 
use App\Http\Controllers\Task5Controller;
Route::get('/admin' , [Task5Controller::class , "show"])->middleware('ageChecking');

// Task 6
use App\Http\Controllers\Task6Controller;
Route::get('/dark' , [Task6Controller::class , "show"]);

// Task 7
use App\Http\Controllers\Task7Controller;
Route::get('/rich' , [Task7Controller::class , 'show']);

// Task 8
use App\Http\Controllers\Task8Controller;
// Route leavle routing
Route::controller(Task8Controller::class)->group(function(){
    // this is the Route level Rouing
    Route::get('/normal/{age}' , 'show')->where('age' , '[0-9]+');

    // this is the globle Routing
    Route::get('/name/{name}' , 'display');
});
