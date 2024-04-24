<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product details</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <h1 class="display-0 text-center text-bg-dark mb-5">Product details</h1>
    @if (isset($videotape))
        <div class="card mb-3">
            <div class="card-header">
                <h3 class="text-center">Videotape</h3>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Title: </strong>{{ $videotape->product->title }}</li>
                    <li class="list-group-item"><strong>Number: </strong>{{ $videotape->product->number }}</li>
                    <li class="list-group-item"><strong>Price: </strong>{{ $videotape->product->price }}</li>
                    @if (empty($videotape->product->name))
                        <li class="list-group-item text-muted"><strong>Client name: </strong>Not assigned</li>
                    @else
                        <li class="list-group-item"><strong>Client name:
                            </strong>{{ $videotape->product->client->name }}</li>
                    @endif
                    <li class="list-group-item"><strong>Duration: </strong>{{ $videotape->duration }}</li>
                </ul>
            </div>
            <div class="card-footer text-start">
                <form action="{{ route('products.show') }}">
                    <button type="submit" class="btn btn-primary">Back to products list</button>
                </form>
            </div>
        </div>
    @endif
    @if (isset($dvd))
        <div class="card mb-3">
            <div class="card-header">
                <h3 class="text-center">Dvd</h3>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Title: </strong>{{ $dvd->product->title }}</li>
                    <li class="list-group-item"><strong>Number: </strong>{{ $dvd->product->number }}</li>
                    <li class="list-group-item"><strong>Price: </strong>{{ $dvd->product->price }}</li>
                    @if (empty($dvd->product->client_id))
                        <li class="list-group-item text-muted"><strong>Client name: </strong>Not assigned</li>
                    @else
                        <li class="list-group-item"><strong>Client name: </strong>{{ $dvd->product->client->name }}</li>
                    @endif
                    <li class="list-group-item"><strong>Language: </strong>{{ $dvd->language }}</li>
                    <li class="list-group-item"><strong>Screen format: </strong>{{ $dvd->screanFormat }}</li>
                </ul>
            </div>
            <div class="card-footer text-start">
                <form action="{{ route('products.show') }}">
                    <button type="submit" class="btn btn-primary">Back to products list</button>
                </form>
            </div>
        </div>

    @endif
    @if (isset($game))
        <div class="card mb-3">
            <div class="card-header">
                <h3 class="text-center">Game</h3>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Title: </strong>{{ $game->product->title }}</li>
                    <li class="list-group-item"><strong>Number: </strong>{{ $game->product->number }}</li>
                    <li class="list-group-item"><strong>Price: </strong>{{ $game->product->price }}</li>
                    @if (empty($game->product->name))
                        <li class="list-group-item text-muted"><strong>Client name: </strong> Not assigned</li>
                    @else
                        <li class="list-group-item"><strong>Client name: </strong>{{ $game->product->client->name }}
                        </li>
                    @endif
                    <li class="list-group-item"><strong>Console: </strong>{{ $game->console }}</li>
                    <li class="list-group-item"><strong>Minimum players: </strong>{{ $game->minPlayers }}</li>
                    <li class="list-group-item"><strong>Maximum players: </strong>{{ $game->maxPlayers }}</li>
                </ul>
            </div>
            <div class="card-footer text-start">
                <form action="{{ route('products.show') }}">
                    <button type="submit" class="btn btn-primary">Back to products list</button>
                </form>
            </div>
        </div>

    @endif
</body>

</html>
