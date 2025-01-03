<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contentTestingController extends Controller
{
    public function index()
    {
        return view('content.contentTesting');
    }
}
