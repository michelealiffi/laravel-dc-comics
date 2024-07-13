<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $comic->title }}</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1>{{ $comic->title }}</h1>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <p>{{ $comic->description }}</p>
    <p>Price: {{ $comic->price }}</p>
    <p>Series: {{ $comic->series }}</p>
    <p>Sale Date: {{ $comic->sale_date }}</p>
    <p>Type: {{ $comic->type }}</p>
</body>

</html>
