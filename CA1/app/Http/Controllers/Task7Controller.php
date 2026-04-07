<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task7Controller extends Controller
{

    // create the constructor
    public function __construct()
    {
        $this -> middleware('code');
    }
    
    public function show()
    {
        return "Welcome to the Most richest person house";
    }
}
