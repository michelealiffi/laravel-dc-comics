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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="{{ old('title', $comic->title) }}">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description">{{ old('description', $comic->description) }}</textarea>
            </div>
            <div class="form-group">
                <label for="thumb">Thumb URL:</label>
                <input type="url" class="form-control" id="thumb" name="thumb"
                    value="{{ old('thumb', $comic->thumb) }}">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price"
                    value="{{ old('price', $comic->price) }}">
            </div>
            <div class="form-group">
                <label for="series">Series:</label>
                <input type="text" class="form-control" id="series" name="series"
                    value="{{ old('series', $comic->series) }}">
            </div>
            <div class="form-group">
                <label for="sale_date">Sale Date:</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date"
                    value="{{ old('sale_date', $comic->sale_date) }}">
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" class="form-control" id="type" name="type"
                    value="{{ old('type', $comic->type) }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
