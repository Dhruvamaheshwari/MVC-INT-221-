<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tech; // mandatory import

class TechCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Read the data
        return Tech::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // store act as insert fun
        $data = Tech::create(
            [
                'name' => $request->name,
                'email' => $request->email,
            ]
        );

        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // display the result
        return Tech::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Tech::find($id)->update(
            [
                'name' => $request->name,
                'email' => $request->email,
            ]
        );
        return response()->json('success' ,  200 );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tech::find($id)->delete();
        return response()->json('data deleted');
    }
}
