<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task4Controller extends Controller
{

    public function __construct()
    {
        $this -> middleware('checkNameCountry');
    }

    public function show()
    {
        return "My name is Dhruva Maheshwari and I lived in USA";
    }
}
