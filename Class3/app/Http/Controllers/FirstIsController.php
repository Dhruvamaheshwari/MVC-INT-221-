<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstIsController extends Controller
{
    
    public function show()
    {
        return 'hello my name is Dhruva Maheshwari. i am the rich man';
    }

    public function display($id)
    {
        return 'Hello kyaa hall chaal jeee'.$id;
    }

}
