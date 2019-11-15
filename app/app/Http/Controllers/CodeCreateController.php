<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodeCreateController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function check()
    {
        return view('check');
    }
}
