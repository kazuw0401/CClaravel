{{-- レイアウトの継承 --}}
@extends('layouts.helloapp')

@section('title', 'Person.index')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr>
            <th>Person</th>
            <th>Board</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
                <td>@if ($item->board != null)
                    {{$item->board->getData()}}
                @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection
@section('footer')
    &copy; 2019 kazuw0401
@endsection