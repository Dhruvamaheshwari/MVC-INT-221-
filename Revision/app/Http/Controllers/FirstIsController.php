<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstIsController extends Controller
{
    public function profile()
    {
        return "This is my profile. My name is Dhruva Maheshwari";
    }

    public function display($id)
    {
        return "My id is ". $id;
    }
}
