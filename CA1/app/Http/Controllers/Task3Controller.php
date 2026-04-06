<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task3Controller extends Controller
{
    public function show($name , $age)
    {
        if($age > 1)
            {
                return response()->
                        view('user' , compact('name' , 'age'))
                        ->header('Test' , 'CA1')
                        ->cookie('name' , $name);
            }
        else
            {
                return redirect()->route('invalid');
            }
    }
}
