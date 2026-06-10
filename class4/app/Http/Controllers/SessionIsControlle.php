<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionIsControlle extends Controller
{
    public function login(Request $request)
    {
        // adding session
        $request->session()->flash('name', $request->input('user'));
        return redirect('/home');
    }

    public function logout(Request $request)
    {
        // delete the session {flush or forgot}
        $request->session()->flush();
        return redirect('/login');
    }
}
