<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <title>Hello {{ $nama }}</title>
</head>
<body>
    Ini adalah halaman {{ $nama }}, Profile dasar pemahaman : 
    <ul>
    @foreach($materi as $m)
        <li>{{ $m }}</li>
    @endforeach
    </ul>
</body>
</html>