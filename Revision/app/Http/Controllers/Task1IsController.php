<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task1IsController extends Controller
{
    public function hello()
    {
        return "Hello Dhruva Maheshwari inside the controller";
    }

    public function about()
    {
        return "This is the about page inside the controller";
    }

    public function contact()
    {
        return "This is the contact page inside the controller";
    }
}
