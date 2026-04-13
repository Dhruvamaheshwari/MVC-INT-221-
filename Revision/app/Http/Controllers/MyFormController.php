<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFormController extends Controller
{

    // to Return the view
    public function show()
    {
        return view('FormIs');
    }


    // to take the value that the user entered in the form
    public function takeData(Request $request)
    {

        // validate the data input
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        // to take the data
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;

        return "The name is : " . ($name ?? "not enter the value") . "<br>" .
            "Email is : " . ($email ?? "not enter the value"). "<br>" .
            "phone number is : " .( $phone ?? "not enter the value"). "<br>";
    }
}
