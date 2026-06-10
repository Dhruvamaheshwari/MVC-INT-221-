<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestingIsMail; // mandatory to import
use Illuminate\Support\Facades\Mail; // madatory to import

class MainController extends Controller
{
    public function send()
    {
        $data = [
            'name' => "dhruva Maheshwari",
            'info' => "I am very Rich",

        ];

        Mail::to('maheshwaridhruva47@gmail.com')->send(new TestingIsMail($data));
        return "Email Sent";
    }
}
