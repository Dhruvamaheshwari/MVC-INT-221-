<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function username($name)
    {
        return "Hello my name is : ".$name;
    }

    public function userage($id)
    {
        return "and my age is :  ".$id;
    }

    public function userid($userid)
    {
        return "and my userId is :  ".$userid;
    }
}
