<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalciisController extends Controller
{
    public function add($a , $b)
    {
        $sum = $a + $b;
        return 'add of a + b is '.$sum;
    }
    public function sub($a , $b)
    {
        $sub = $a - $b;
        return 'add of a - b is '.$sub;
    }
    public function mul($a , $b)
    {
        $mul = $a * $b;
        return 'add of a * b is '.$mul;
    }
    public function div($a , $b)
    {
        if($b == 0)
        {
            return 'can not div. by 0';
        }
        $div = $a / $b;
        return 'add of a - b is '.$div;
    }
}
