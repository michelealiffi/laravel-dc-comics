<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Comic</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1>Create Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <div>
            <label for="thumb">Thumbnail URL:</label>
            <input type="url" id="thumb" name="thumb" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required>
        </div>
        <div>
            <label for="series">Series:</label>
            <input type="text" id="series" name="series" required>
        </div>
        <div>
            <label for="sale_date">Sale Date:</label>
            <input type="date" id="sale_date" name="sale_date" required>
        </div>
        <div>
            <label for="type">Type:</label>
            <input type="text" id="type" name="type" required>
        </div>
        <button type="submit">Save Comic</button>
    </form>
</body>

</html>
