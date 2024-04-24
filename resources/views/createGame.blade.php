<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Game</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <h1 class="display-0 text-center text-bg-dark mb-5">Game creation</h1>
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="container mt-3">
        <h2>Create a Game</h2>

        <form action="{{ route('videostore.creategame') }}" method="POST" class="mb-3">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Enter the game title">
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
                <label for="console">Console:</label>
                <input type="text" name="console" class="form-control @error('console') is-invalid @enderror"
                    placeholder="Enter the console">
                @error('console')
                    <div class="alert alert-danger">Console is missing</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="minPlayers">Min players:</label>
                <input type="text" name="minPlayers" class="form-control @error('minPlayers') is-invalid @enderror"
                    placeholder="Enter the minimum number of players">
                @error('minPlayers')
                    <div class="alert alert-danger">Minimum players is missing</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="maxPlayers">Max players:</label>
                <input type="text" name="maxPlayers" class="form-control @error('maxPlayers') is-invalid @enderror"
                    placeholder="Enter the maximum number of players">
                @error('maxPlayers')
                    <div class="alert alert-danger">Maximum players is missing</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

    <div class="container">
        <form action="{{ route('videostore.index') }}"  class="mt-3">
            <button type="submit" class="btn btn-secondary">Back to main page</button>
        </form>
    </div>
</body>

</html>
