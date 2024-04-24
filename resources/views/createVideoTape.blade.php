<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create VideoTape</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <h1 class="display-0 text-center text-bg-dark mb-5">Videotape creation</h1>
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="container mt-3">
        <h2>Create a VideoTape</h2>
        <form action="{{ route('videostore.createvideotape') }}" method="POST" class="mb-3">
            @csrf
            <div class="form-group"> <label for="title">Title:</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Enter the videotape title">
                @error('title')
                    <div class="alert alert-danger">Title is missing</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                    placeholder="Enter the price">
                @error('price')
                    <div class="alert alert-danger">Price is missing</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="duration">Duration:</label>
                <input type="text" name="duration" class="form-control @error('duration') is-invalid @enderror"
                    placeholder="Enter the duration">
                @error('duration')
                    <div class="alert alert-danger">Duration is missing</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Create</button>
        </form>
    </div>


    <div class="container">
        <form action="{{ route('videostore.index') }}"  class="mb-3">
            <button type="submit" class="btn btn-secondary">Back to main page</button>
        </form>
    </div>
</body>

</html>
