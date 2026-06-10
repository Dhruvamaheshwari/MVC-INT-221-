<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // query builder

class PlacementController extends Controller
{
    // Query Builder for CRUD operation via Form
    public function show()
    {
        return view('placementdata');
    }

    public function insert(Request $request)
    {
        DB::table('placement')->insert([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect('/read'); // this is route jo read view ko call kre ga
    }

    public function read()
    {
        $data = DB::table('placement')->get();

        return view('read', compact('data'));
    }

    public function edit($id)
    {
        $data1 = DB::table('placement')->where('id', $id)->first(); // first eek fucntion h jo edit me help krta h;
        return view('edit', compact('data1'));
    }

    public function update(Request $request, $id)
    {
        DB::table('placement')->where('id', $id)->update(
            [
                'name' => $request->name,
                'email' => $request->email,
            ]
        );

        return redirect('/read');
    }

    public function delete($id)
    {
        DB::table('placement')->where('id' , $id)->delete();
        return redirect('/read');
    }
}
