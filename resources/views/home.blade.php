<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeeFlix</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container">
        <h1>BeeFlix</h1>
        <div class="row">
            <div class="col text-center">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col text-center mb-3 mt-3">
                <a href="{{ route('create') }}" type="button" class="btn btn-dark">Add New Movie</a>
            </div>
        </div>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset($movie->photo) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">{{ $movie->title }}</h4>
                            <p class="card-text">{{ $movie->genre->name }}</p>
                            <p class="card-text">{{ $movie->description }}</p>
                            <p class="card-text">{{ $movie->publish_date }}</p>
                            <a href="{{ route('delete', $movie->id) }}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $movies->links() }}
        </div>
    </div>
</body>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>