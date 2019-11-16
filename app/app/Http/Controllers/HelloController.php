<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => '山田太郎', 'mail' => 'taro@yamada'],
            ['name' => '田中幸子', 'mail' => 'sachiko@tanaka'],
            ['name' => '鈴木花子', 'mail' => 'hanako@suzuki'],
        ];
        return view('hello.index', ['data' => $data]);
    }
}
