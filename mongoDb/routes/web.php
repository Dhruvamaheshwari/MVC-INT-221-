<?php

use App\Http\Controllers\IsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('abc', IsController::class);
