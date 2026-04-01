<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EasyController extends Controller
{
    public function show()
    {
        return "this is the eassy controller";
    }

    public function display($id)
    {
        return 'the id is '.$id;
    }

    
    public function displayname($name)
    {
        return 'the name is '.$name;
    }
    public function user($name)
    {
        return 'the username is '.$name;
    }
}
