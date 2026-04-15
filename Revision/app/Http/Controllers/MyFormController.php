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

        
        //* this is the 1st way to take input {issko hi jada use kre h}
        // to take the data
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
         

        /**
        //* this is the 2nd way to take input
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
         */

        //* this is the 3rd way to take input
        //$data = $request->all();


        return "The name is : " . ($name ?? "not enter the value") . "<br>" .
            "Email is : " . ($email ?? "not enter the value"). "<br>" .
            "phone number is : " .( $phone ?? "not enter the value"). "<br>";
    }
}
