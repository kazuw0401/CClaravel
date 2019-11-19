{{-- レイアウトの継承 --}}
@extends('layouts.helloapp')

@section('title', 'Index')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
    <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>
@endsection
@section('footer')
    &copy; 2019 kazuw0401
@endsection