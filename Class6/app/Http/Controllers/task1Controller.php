<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class task1Controller extends Controller
{

    // inser the data
    public function insert()
    {
        DB::table('task_1')->insert(

            [
                "name" => "Rohit",
                "occu" => "teacher",
                "phone" => "432",
                'created_at' => now(),
                "updated_at" => now(),
            ]
        );

        return "data is insert";
    }

    // update the data
    public function update()
    {
        DB::table('task_1')->where('id', 2)->update(
            [
                "name" => "NULL",
                "occu" => "NULL",
                "phone" => 0,
            ]
        );
        return "data is update";
    }

    public function get()
    {
        $data = DB::table('task_1')->get();
        return $data;
    }
}
