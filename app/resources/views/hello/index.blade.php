<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello/Index</title>
    <style>
    body {font-size: 16pt; color: #999;}
    h1 {font-size: 50pt; text-align: right; color: #f6f6f6;
        margin: -20px 0 -30px 0; letter-spacing: -4pt;}
    </style>
</head>
<body>
    <h1>Blade/index</h1>
    <p>&#064;whileディレクティブの例</p>
    <ol>
    @php
        $counter = 0;
    @endphp
    @while ($counter < count($data))
        <li>{{$data[$counter]}}</li>
    @php
        $counter++;
    @endphp
    @endwhile
    </ol>
</body>
</html>