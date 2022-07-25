<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Commodity extends Controller
{
    public function index()
    {
        return view('Commodity.index');
    }

    public function create()
    {
        return view('Commodity.create');
    }
}
