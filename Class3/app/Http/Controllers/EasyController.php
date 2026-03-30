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
}
