<?php

namespace App\Http\Controllers;

use App\Models\Is; // this is mandatory import
use Illuminate\Http\Request;

class IsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()   // reading the data
    {
        // CRUD using Eloquent ORM with mongoDb

        $data = Is::all();
        return view('read', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // opening or showing the Form
    {
        return view('studentform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // insert krne me help krta h
    {
        Is::create(
            [
                'name' => $request->name,
                'email' => $request->email,
            ]
        );

        return redirect('/abc');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)  // for display single record
    {
        $data = IS::find($id);
        return view('show', compact('data')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)    // update the data
    {
        $data1 = Is::find($id);
        return view('edit', compact('data1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)    // display the updated data
    {
        $data1 = Is::find($id);
        $data1->update(
            [
                'name' => $request->name,
                'email' => $request->email,
            ]
        );
        return redirect('/abc');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Is::find($id)->delete();
        return redirect('/abc');
    }
}
