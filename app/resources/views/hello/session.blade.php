{{-- レイアウトの継承 --}}
@extends('layouts.helloapp')

@section('title', 'Session')
@section('menubar')
    @parent
    セッションページ
@endsection

@section('content')
    <p>{{$session_data}}</p>
    <form action="/hello/session" method="post">
    @csrf
        <input type="text" name="input">
        <input type="submit" value="send">
    </form>
@endsection
@section('footer')
    &copy; 2019 kazuw0401
@endsection