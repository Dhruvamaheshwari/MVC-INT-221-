<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIIsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // this is the 1 way
        /*
            $studend = [
                'name' => "dhruva",

            ];
            return response()->json($studend);
        */
            
        // this is the 2 way;
        return response()->json([
            "name" => "Dhruva",
            "ROll No." => 123, 
            ""
        ]);   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
