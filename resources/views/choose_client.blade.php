<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choose client</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <h1 class="display-0 text-center text-bg-dark mb-5">Choose the client</h1>
    @error('choose_client')
        <div class="alert alert-danger"> Do not forget to write the number</div>
    @enderror
    <div class="card mb-3">
        <div class="card-header">
            <h3 class="text-center">Login</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('client.choosen_client') }}">
                <div class="mb-3">
                    <label for="choose_client" class="form-label">Write your client number:</label>
                    <input type="number" class="form-control" name="choose_client" id="choose_client">
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
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
