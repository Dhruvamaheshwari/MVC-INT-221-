<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalciController extends Controller
{
    public function add($a , $b)
    {
        return response('The sum of '. $a .' + '. $b .' is : ' . $a + $b);
    }
}


