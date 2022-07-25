<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CssController extends Controller
{
    public function css()
    {
        return view('css');
    }
}
