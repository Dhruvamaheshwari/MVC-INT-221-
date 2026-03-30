<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConstructController extends Controller
{

    public function __construct() // this is the contructor
    {
        $this->middleware('ageFactor');
    }

    public function privacy()
    {
        return "hi i am Dhruva Maheshwari.";
    }
}
