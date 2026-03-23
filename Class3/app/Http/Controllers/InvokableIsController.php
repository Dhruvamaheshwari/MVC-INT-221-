<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Routing\Route;

class InvokableIsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
        $user = [
            1 => "Dhruva Maheshwari",
            2 => "Sayoun",
            3 => "Ram",
        ];
        //return $user[$id]??"users not found"; // this code run on brower
        // now return view
        return $user[$id] ?? view('missing' , ["id" => $id]);
    }
}
