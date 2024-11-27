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
        
        @if (@session('success'))
            <div class="alert alert-success">
                Data Saved!
            </div> 
        @endif
        
        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="genre">Genre</label>
                <select class="form-select" aria-label="Default select example" name="genre">
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
                @error('genre')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" name="photo" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                @error('photo')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="desc" class="form-label">Description</label>
                <textarea type="text" class="form-control" name="desc">{{ old('desc') }}</textarea>
                @error('desc')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date Published</label>
                <input type="date" class="form-control" name="date" value="{{ old('date') }}">
                @error('date')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <input type="submit" class="btn btn-dark mt-2" value="Submit">
        </form>
    </div>
</body>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>