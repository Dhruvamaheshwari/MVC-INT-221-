
<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TechCOntroller;

Route::apiResource('data' , TechCOntroller::class);

