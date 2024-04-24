<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Dvd</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <h1 class="display-0 text-center text-bg-dark mb-5">Product creation</h1>
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="container mt-3">
        <h2>Dvd creation</h2>
        <form action="{{ route('videostore.createdvd') }}" method="POST" class="mb-3">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" value="{{ old('title') }}"
                    class="form-control @error('title') is-invalid @enderror" placeholder="Enter the DVD title">
                @error('title')
                    <div class="alert alert-danger">Title is missing</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" value="{{ old('price') }}"
                    class="form-control @error('price') is-invalid @enderror" placeholder="Enter the price">
                @error('price')
                    <div class="alert alert-danger">Price is missing</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="language">Language:</label>
                <input type="text" name="language" value="{{ old('language') }}"
                    class="form-control @error('language') is-invalid @enderror" placeholder="Enter the language">
                @error('language')
                    <div class="alert alert-danger">Language is missing</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="screanFormat">Screen format:</label>
                <input type="text" name="screanFormat" value="{{ old('screanFormat') }}"
                    class="form-control @error('screanFormat') is-invalid @enderror"
                    placeholder="Enter the screen format">
                @error('screanFormat')
                    <div class="alert alert-danger">Screen format is missing</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

    <div class="container">
        <form action="{{ route('videostore.index') }}" class="mb-3">
            <button type="submit" class="btn btn-secondary">Back to main page</button>
        </form>
    </div>
</body>

</html>
