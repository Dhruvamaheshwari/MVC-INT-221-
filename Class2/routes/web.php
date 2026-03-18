<?php


use Illuminate\Support\Facades\Route;



/* 
// 1. This is  Required routing {not return the view}
Route::get('/user/{name}', function ($name) {
    return "Hello I am : " . $name; // {.}  for concat 
});
*/


/* 
// 2. This is  Multivalue routing {you give the as many argument}
Route::get('/user/{name}/{id}', function ($name , $id) {
    return "Hello I am : " . $name . $id; // {.}  for concat 
});
*/


/* 
// 3. This is  Optional routing {optional name do ya nhi do jo hamne defautl diya h usko hi lega}
Route::get('/user/{name?}', function ($name="New_User") {
    return "Hello I am : " . $name; // {.}  for concat 
});
*/


/* 
// 4. This is  Constraint routing {Constraint routing with number}
Route::get('/user/{id}', function ($id) {
    return "Hello My Id is : " . $id; // {.}  for concat 
})-> where('id' , '[0-9]{4}+');

// Constraint routing with name
Route::get('/user/{name}', function ($name) {
    return "Hello My name is : " . $name; // {.}  for concat 
})-> where('name' , '[a-zA-Z]+');
*/

/*
// 4. This is  Constraint routing {Constraint routing with number}
Route::get('/user/{id}', function ($id) {
    return "Hello My Id is : " . $id; // {.}  for concat 
})-> where('id' , '[0-9]+');
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
// 1. first way associtive array
Route::get("/welcome", function () {
    $courses=["php" , "javaScript" , "Cpp"]; // associative array;
    return view('student' , ['courses'=>$courses]);
});
*/

/*
// 2. second way Compact 
Route::get("/welcome", function () {
    $courses = ["php", "javaScript", "Cpp" ,"C" , "C#"]; 
    return view('student',compact('courses'));
});
 */

/* 
// 3. with the use of With
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

