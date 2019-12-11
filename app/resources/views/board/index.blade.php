@extends('layouts.helloapp')

@section('title', 'Board.index')
@section('menubar')
    @parent
    ボード・ページ
@endsection

@section('content')
    <table>
        <tr>
            <th>Meesage</th>
            <th>Name</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->message}}</td>
                <td>{{$item->person->name}}</td>
            </tr>
        @endforeach
    </table>
@endsection
@section('footer')
    &copy; 2019 kazuw0401
@endsection