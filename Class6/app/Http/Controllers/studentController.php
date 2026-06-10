<?php

namespace App\Http\Controllers;

use Carbon\Carbon; // this is for time stamp 
use Illuminate\Http\Request;


// import this 
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    // query builder for performing crud  

    // 1. insert
    public function insert()
    {

        DB::table('students')->insert(
            [
                'name' => 'Dhruva Maheshwari',
                'email' => "dhruva4@gmail.com",
                'created_at' => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        );


        return "data inserted , please check php myAdmin";
    }


    // 2. update the database
    public function updade()
    {
        DB::table('students')->where('id' , 2)->update(
            [
                'email' => "dhruva44@gmail.com",
            ]
        );
        return "data is updated, please check php myAdmin";
    }

    // 3. delete the databae
    public function delete()
    {
        DB::table('students')->where('id' , 1)->delete();
        return "data is deleted, please check php myAdmin";
    }

    // 4. Read the data from the database
    public function read()
    {
         $data =  DB::table('students')->get();
         return $data;
    }
}
