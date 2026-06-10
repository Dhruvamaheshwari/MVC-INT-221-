<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**

use App\Http\Controllers\StudentController;

Route::get('/insert', [StudentController::class, 'insert']);
Route::get('/update', [StudentController::class, 'updade']);
Route::get('/delete', [StudentController::class, 'delete']);
Route::get('/read', [StudentController::class, 'read']);
 */


use App\Http\Controllers\task1Controller;

Route::get('/insert', [task1Controller::class, 'insert']);
Route::get('/update', [task1Controller::class, 'update']);
Route::get('/get', [task1Controller::class, 'get']);

// CRUD

use App\Http\Controllers\PlacementController;

Route::get('/form', [PlacementController::class, 'show']);

Route::post('/insert', [PlacementController::class, 'insert']);

Route::get('/read', [PlacementController::class, 'read']);

Route::get('/delete/{id}', [PlacementController::class, 'delete']);

Route::get('/edit/{id}', [PlacementController::class, 'edit']);

Route::post('/update/{id}', [PlacementController::class, 'update']);
