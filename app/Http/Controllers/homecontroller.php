<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    User::factory()->count(10)->sequence(
            ['name'=>'Mercy'],
            ['name'=>'John'],
         )->create();
    
    public function index(){
        return view('car.index');
    }
}
