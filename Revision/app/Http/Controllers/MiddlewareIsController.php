<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareIsController extends Controller
{
    public function show()
    {
        return "Hello my Rich people this the protected route";
    }
}
