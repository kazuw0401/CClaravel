<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ内容を入力</title>
</head>
<body>
    <h1>お問い合わせ内容を入力</h1>
    <form action="{{action('CodeCreateController@check')}}" method="post">
        @csrf
        {{-- {{ csrf_field() }} --}}
        <p>名前</p>
        <input type="text" name="name">
        <p>メールアドレス</p>
        <input type="text" name="email">
        <p>問い合わせ内容</p>
        <textarea name="content" cols="30" rows="10"></textarea><br>
        <input type="submit" value="送信">
    </form>
</body>
</html>