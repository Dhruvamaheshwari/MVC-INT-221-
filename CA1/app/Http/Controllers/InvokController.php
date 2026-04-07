<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $student = [
            1 => "Dhruva",
            2 => "Bhumi",
            3 => 'Aastha',
            4 => 'Anshi',
        ];

        $name = $student[$id] ?? null;
        if($name)
            {
                return view('present' , compact('name'));
            }
            else{
                return view('missing' , compact('id'));
            }
                
    }
}
