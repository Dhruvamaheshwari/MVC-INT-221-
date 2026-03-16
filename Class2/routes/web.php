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


// 4. This is  Constraint routing {Constraint routing with number}
Route::get('/user/{id}', function ($id) {
    return "Hello My Id is : " . $id; // {.}  for concat 
})-> where('id' , '[0-9]+');


