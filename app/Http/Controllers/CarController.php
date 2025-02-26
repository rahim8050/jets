<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   // app/Http/Controllers/CarController.php
// use App\Models\User;

public function index()
{
    $users = User::all(); // Fetch users from the database
    return view('car.index', ['users' => $users]); // Pass $users to the view
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
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
        return view('car.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('car.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view('car.update');
    }

    // public function search(Request $request)
    // {
    //    User::Search($request->q)->get();

    // }
    public function destroy($id)
{
    User::findOrFail($id)->delete();
    return redirect()->back()->with('success', 'User deleted!');
}
}
