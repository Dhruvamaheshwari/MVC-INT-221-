<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConstructController extends Controller
{

    public function __construct()
    {
        $this -> middleware('ageChecking');
    }

    public function show()
    {
        return "Dhruva Maheshwari getting palced on Google at 1cr package";
    }
}
