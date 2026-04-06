<?php

use Illuminate\Support\Facades\Route;


// Task 1
Route::get('/show/{name}' ,function($name) {
    return view('info' , compact('name'));
});