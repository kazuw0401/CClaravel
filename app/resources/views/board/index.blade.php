@extends('layouts.helloapp')

@section('title', 'Board.index')
@section('menubar')
    @parent
    ボード・ページ
@endsection

@section('content')
    <table>
        <tr>
            <th>Data</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
        @endforeach
    </table>
@endsection
@section('footer')
    &copy; 2019 kazuw0401
@endsection