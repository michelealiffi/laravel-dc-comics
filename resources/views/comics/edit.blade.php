<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Comic</title>
</head>

<body>
    <div class="container">
        <h1>Edit Comic</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}"
                    required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required>{{ $comic->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="thumb">Thumbnail URL</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}"
                    required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}"
                    required>
            </div>
            <div class="form-group">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}"
                    required>
            </div>
            <div class="form-group">
                <label for="sale_date">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale
