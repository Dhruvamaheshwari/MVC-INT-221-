<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show()
    {
        return 'Student page';
    }

    public function details()
    {
        $name = "Dhruva";
        $course = "B.tech";
        return view('student' , compact('name' , 'course'));
    }
}
