<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadIsController extends Controller
{
    public function display()
    {
        return view('uploadIs');
    }

    public function upload(Request $request)
    {
        // request data retrieval

        $file = $request->file('file');

        echo "The file name is: ".$file->getClientOriginalName(); //getClientOriginalName ye inbult fun. jo file ka sahi naam batata h;

        echo " <br> This file store in : ".$file -> store('dhruva'); // ye store inbuild fun. jo ki ye [ storage->app->private->ke ander bana dega or file ko vaha save kr dega ]

        echo " <br> successfully uploaded";
    }
}
