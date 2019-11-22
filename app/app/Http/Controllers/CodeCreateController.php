<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodeCreateController extends Controller
{
    public function contact()
    {
        return view('contact');
    }
    
    public function check(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content,
        ];
        return view('check', $data);
    }
}
