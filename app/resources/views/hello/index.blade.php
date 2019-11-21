{{-- レイアウトの継承 --}}
@extends('layouts.helloapp')

@section('title', 'Index')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>{{$msg}}</p>
    @if (count($errors) > 0)
    <p>入力に問題があります。再入力してください。</p>
    @endif
    <table>
        <form action="/hello" method="post">
        {{ csrf_field() }}
        @if ($errors->has('msg'))
        <tr>
            <th>ERROR</th>
            <td>{{$errors->first('msg')}}</td>
        </tr>
        @endif
        <tr>
            <th>Message: </th>
            <td><input type="text" name="msg" value="{{old('msg')}}"></td>
            <tr>
                <th><input type="submit" value="send"></th>
            </tr>
        </tr>
        </form>
    </table>
@endsection
@section('footer')
    &copy; 2019 kazuw0401
@endsection