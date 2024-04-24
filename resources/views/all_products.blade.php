<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All products</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <h1 class="display-0 text-center text-bg-dark mb-5">Products' List</h1>
    @if (session('message'))
        <div class="message-created-note alert alert-info" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <div class="container">
        <div class="mb-3">
            <form action="{{ route('client.rented_product_question', $client->id) }}">
                <label for="client_product" class="form-label">Which product do you have?</label>
                <input type="text" name="client_product" class="form-control" id="client_product">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
    <div class="container">
        <h2>VideoTapes</h2>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Number</th>
                    <th scope="col">Price</th>
                    <th scope="col">Duration</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videoTapes as $videoTape)
                    <tr>
                        <td>{{ $videoTape->product->title }}</td>
                        <td>{{ $videoTape->product->number }}</td>
                        <td>{{ $videoTape->product->price }}</td>
                        <td>{{ $videoTape->duration }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Dvds</h2>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Number</th>
                    <th scope="col">Price</th>
                    <th scope="col">Language</th>
                    <th scope="col">Screen Format</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dvds as $dvd)
                    <tr>
                        <td>{{ $dvd->product->title }}</td>
                        <td>{{ $dvd->product->number }}</td>
                        <td>{{ $dvd->product->price }}</td>
                        <td>{{ $dvd->language }}</td>
                        <td>{{ $dvd->screanFormat }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Games</h2>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Number</th>
                    <th scope="col">Price</th>
                    <th scope="col">Console</th>
                    <th scope="col">Min Players</th>
                    <th scope="col">Max Players</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($games as $game)
                    <tr>
                        <td>{{ $game->product->title }}</td>
                        <td>{{ $game->product->number }}</td>
                        <td>{{ $game->product->price }}</td>
                        <td>{{ $game->console }}</td>
                        <td>{{ $game->minPlayers }}</td>
                        <td>{{ $game->maxPlayers }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-end mt-3">
            <form action="{{ route('videostore.index') }}">
                <button type="submit" class="btn btn-secondary">Back to main page</button>
            </form>
        </div>
    </div>

</body>

</html>
