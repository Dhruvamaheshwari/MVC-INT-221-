<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokableIsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $user = [
            1 => "Dhruva Maheshwari",
            2 => "Bhumi Maheshwari",
            3 => "Aastha Gosh",
        ];

        // return $user[$id] ?? "user not found"; // return only the text
        return $user[$id] ?? view('missing' , ['id' => $id]); // this is return the view not simple text
    }
}
