<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class FormIsController extends Controller
{
    public function show()
    {
        return view('MyformIs');
    }

    // yaha Reques $request likha pda ga
    public function submitForm(Request $request)
    {

        // inbuild function for validation
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        // add first request data retrieval method
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;

        return "The name is ".($name ?? "not entered value") . "<br>".
                "Emial is ".($email ?? "not entered value") . "<br>".
                "The phone is ".($phone ?? "not enterd value");
    }
}
