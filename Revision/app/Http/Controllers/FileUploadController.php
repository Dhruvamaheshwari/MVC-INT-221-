<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\HttpCache\Store;

class FileUploadController extends Controller
{
    public function show()
    {
        return view('FileUpload');
    }

    public function fileUpload(Request $request)
    {
        $file = $request->file('file');

        echo "file uploaded Successfully";

         // to get original name
         echo "<br> The file name is : ".$file->getClientOriginalName();
         echo "<br> The file name is : ".$file->getClientOriginalPath();
         echo "<br> The file name is : ".$file->getClientOriginalExtension();

        // to store the file
        $file->store('dhruva');

    }
}
