<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DhruvaController extends Controller
{
    // reverse the name
    public function reverseName($name)
    {
        return strrev($name);
    }

    public function reverseNumber($num)
    {
        $revnumber = 0;
        while($num > 1)
            {
                $temp = $num % 10;
                $revnumber = ($revnumber * 10) + $temp;
                $num = $num / 10;
            }
        return $revnumber;
    }
}
