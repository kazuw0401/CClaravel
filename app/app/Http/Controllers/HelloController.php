<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = ['カレー', '肉じゃが', 'とんかつ定食', 'カルボナーラ', '麻婆豆腐', 'ステーキ定食'];
        return view('hello.index', ['data'=>$data]);
    }
}
