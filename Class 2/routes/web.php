<?php

use Faker\Guesser\Name;
use Illuminate\Routing\RouteUrlGenerator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

/* 
    /// 1. This is  Required routing {not return the view}
    Route::get('/user/{name}', function ($name) {
        return "Hello I am : " . $name; // {.}  for concat 
    });
*/


/* 
    /// 2. This is  Multivalue routing {you give the as many argument}
    Route::get('/user/{name}/{id}', function ($name , $id) {
        return "Hello I am : " . $name . $id; // {.}  for concat 
    });
*/


/* 
    /// 3. This is  Optional routing {optional name do ya nhi do jo hamne defautl diya h usko hi lega}
    Route::get('/user/{name?}', function ($name="New_User") {
        return "Hello I am : " . $name; // {.}  for concat 
    });
*/


/* 
    /// 4. This is  Constraint routing {Constraint routing with number}
    Route::get('/user/{id}', function ($id) {
        return "Hello My Id is : " . $id; // {.}  for concat 
    })-> where('id' , '[0-9]{4}+');

    /// Constraint routing with name
    Route::get('/user/{name}', function ($name) {
        return "Hello My name is : " . $name; // {.}  for concat 
    })-> where('name' , '[a-zA-Z]+');
*/

/*
    /// 4. This is  Constraint routing {Constraint routing with number}
    Route::get('/user/{id}', function ($id) {
        return "Hello My Id is : " . $id; // {.}  for concat 
    })-> where('id' , '[0-9]+');

    /// 4. This is  Constraint routing {Constraint routing with number and spe. number is 3 only}
    Route::get('/user/{id}', function ($id) {
        return "Hello My Id is : " . $id; // {.}  for concat 
    })-> where('id' , '[0-9]{3}');

    /// 4. This is  Constraint routing {Constraint routing with number and spe. number is 3 to 7 range}
    Route::get('/user/{id}', function ($id) {
        return "Hello My Id is : " . $id; // {.}  for concat 
    })-> where('id' , '[0-9]{3 , 7}');
 */


/* 
    /// 5. fallBack Routing {if page not present in the project so this route work}
    Route::get('/home' , function() {
        return "hi my name is Dhruva Maheshwari";
    });

    Route::get('/about' , function(){
        return "this is the about page";
    });

    Route::fallback(function(){
        return "sorryyyyy";
    });
*/
/* 
/// 6. Group Routing with prefix (for the safty)
    Route::prefix('master')->group(function() {
        Route::get('/home', function () {
            return "hi my name is Dhruva Maheshwari";
        });

        Route::get('/about', function () {
            return "this is the about page";
        });
    });
*/


/*
    /// 7. Group Routing with-out prefix (for the safty)
    Route::group([], function () {
        Route::get('/home', function () {
            return "hi my name is Dhruva Maheshwari";
        });

        Route::get('/about', function () {
            return "this is the about page";
        });
    });
 */

/*
/// 8. Named Routing ()
Route::view('/welcome' , 'welcome');
Route::view('/hi/hello/learn/laravel' , 'teacher') -> name('data');
*/


//* Method 1 to create the view
/*
    Route::get("/welcome", function () {
        return view('welcome');
    });
 */

//* Method 2 to create the view
//todo =>  sharing data globally with all views
// step 1 => create the view as per your choice
// step 2 => open app service provider, share view in boot function (with key and value) and import also
// step 3 => use {{}} blade template in all views for displaying values
// step 4 => run your code via url that you have give in route
Route::view("/welcome", 'welcome'); // creation of view
Route::view("/student", 'student'); // creation of view
Route::view("/teacher", 'teacher'); // creation of view



/* 
    /// 1. first way associtive array
    Route::get("/welcome", function () {
        $courses=["php" , "javaScript" , "Cpp"]; // associative array;
        return view('student' , ['courses'=>$courses]);
    });
*/

/*
    /// 2. second way Compact 
    Route::get("/welcome", function () {
        $courses = ["php", "javaScript", "Cpp" ,"C" , "C#"]; 
        return view('student',compact('courses'));
    });
 */

/* 
    /// 3. with the use of With
    Route::get("/welcome", function () {
        $courses = ["php", "javaScript", "Cpp", "C", "C#", "Git"];
        return view('student')->with('courses', $courses);
    });
*/


/*
    // Task 1 => 
    Route::get("/home/detail/mine", function () {
        $courses = ["php", "javaScript", "Cpp", "C", "English"];
        $mark = [89, 45, 56, 45, 34];
        return view('student', ['courses'=> $courses , 'mark'=> $mark]);
    });
 */



/*
// task 2
Route::get("/home/detail/info", function () {
    return "Hello my name is Dhruva Maheshwari";
});

Route::get("/home/detail/data", function () {
    $name = "Hello my name is Dhruva Maheshwari";
    $rev_name = strrev($name);
    return $rev_name;
});

Route::view("/home/detail/tringle", "tringle");

Route::fallback(function () {
    return "Sorry this page in not present!!!!";
});
 */




// Attaching Header
/* 
Route::get('/headers' , function(){
    return response("Header attached")
        ->header('app-name' , 'basic-Info')
        ->header('file-type' , 'RTF')
        ->header('content-type' , 'Downloadable');
});
*/

// Attaching cookies
/* 
    Route::get('/add_cookies', function () {
        return response("cookies attached")->cookie('username', 'Dhruva Maheshwari', 4);
    });
*/
/*
    /// gettign the cookies value
    Route::get('/get_cookies', function () {
        //return request()->cookie('username');
        return Request::cookie('username');
    });
 */


// this is the json response
/*
    Route::get('/welcome' , function(){
        return response()->json([
        "name"=>"ABC",
        "ROll NO"=>10,
        "subject"=>"int221",
        ]);
    });
 */

//1. Redirect to the URL
Route::get('/myhome', function () {
    return 'Hi I am inside the Home url';
});
Route::get('/about' , function(){
    return redirect('/myhome');
});

//2. Redirect via a back {back only redirect only the last url}
Route::get('/profilepage' , function(){
    return "this is profile page";
});
Route::get('/loginpage' , function(){
    return redirect()->back(302); // status code is optional if you give the status so this is permanent redirect
});
