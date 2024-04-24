<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create client</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <h1 class="display-0 text-center text-bg-dark mb-5">Client creation</h1>
    @if (session('message'))
        <div class="message-created-note alert alert-info" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="text-center">Create Client</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('videostore.createclient') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" id="name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
        <div class="card-footer text-start">
            <form action="{{ route('videostore.index') }}">
                <button type="submit" class="btn btn-secondary">Back to main page</button>
            </form>
        </div>
    </div>

</body>

</html>
