<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics List</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header class="header text-center">
        <img src="../img/images.jpg" alt="DC Logo">
    </header>

    <div class="container comics-section">
        <h1 class="text-center my-4">Current Series</h1>
        <div class="text-center my-4">
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Create New Comic</a>
        </div>

        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-md-3 mb-4">
                    <div class="card comic-card">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ Str::limit($comic->description, 100) }}</p>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">View Details</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST"
                                class="d-inline delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center my-4">
            <a href="#" class="btn btn-primary px-5 rounded-0 text-uppercase fw-semibold">Load More</a>
        </div>
    </div>

    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>DC Comics</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>DC</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Ad choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Sites</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Shop</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Collectibles</a></li>
                    </ul>
                </div>
            </div>
            <div class="my-3">
                <a href="#" class="btn btn-primary">Sign-Up Now!</a>
            </div>
            <div>
                <a href="#" class="mx-2"><i class="fab fa-facebook"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-youtube"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-pinterest"></i></a>
                <a href="#" class="mx-2"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>
