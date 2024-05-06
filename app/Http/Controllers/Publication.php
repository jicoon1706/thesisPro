<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Publication extends Controller
{
    public function index()
    {
        return view('publication');
    }
}
