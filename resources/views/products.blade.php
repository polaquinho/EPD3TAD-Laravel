<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <h1 class="display-0 text-center text-bg-dark mb-5">Products' List</h1>
    @if (session('price_message'))
        <div class="message-created-note alert alert-info" role="alert">
            {{ session('price_message') }}
        </div>
    @endif
    @if (session('price_vat_message'))
        <div class="message-created-note alert alert-info" role="alert">
            {{ session('price_vat_message') }}
        </div>
    @endif
    @if (session('product_number_message'))
    <div class="message-created-note alert alert-primary" role="alert">
        {{ session('product_number_message') }}
      </div>

    @endif
    <div class="container">
        <h2 class="h2 text-dark">VideoTapes</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Number</th>
                    <th scope="col">Price</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Get Price</th>
                    <th scope="col">Price with VAT</th>
                    <th scope="col">Number Product</th>
                    <th scope="col">Show Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videoTapes as $videoTape)
                    <tr>
                        <td>{{ $videoTape->product->title }}</td>
                        <td>{{ $videoTape->product->number }}</td>
                        <td>{{ $videoTape->product->price }}</td>
                        <td>{{ $videoTape->duration }}</td>
                        @if (empty($videoTape->product->client->name))
                            <td>Not assigned</td>
                        @else
                            <td>{{ $videoTape->product->client->name }}</td>
                        @endif
                        <td>
                            <form action="{{ route('products.products_price', $videoTape->product_id) }}">
                                <button type="submit" class="btn btn-primary">Get Price</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('products.products_price_vat', $videoTape->product_id) }}">
                                <button type="submit" class="btn btn-primary">Price with VAT</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('products.products_number', $videoTape->product_id) }}">
                                <button type="submit" class="btn btn-primary">Number Product</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('videotape.show_details', $videoTape->id) }}">
                                <button type="submit" class="btn btn-primary">Show Details</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="container">
        <h2 class="h2 text-dark">Dvds</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Number</th>
                    <th scope="col">Price</th>
                    <th scope="col">Language</th>
                    <th scope="col">Screen Format</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Get Price</th>
                    <th scope="col">Price with VAT</th>
                    <th scope="col">Number Product</th>
                    <th scope="col">Show Details</th>
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
                        @if (empty($dvd->product->client->name))
                            <td>Not assigned</td>
                        @else
                            <td>{{ $dvd->product->client->name }}</td>
                        @endif
                        <td>
                            <form action="{{ route('products.products_price', $dvd->product_id) }}">
                                <button type="submit" class="btn btn-primary">Get Price</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('products.products_price_vat', $dvd->product_id) }}">
                                <button type="submit" class="btn btn-primary">Price with VAT</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('products.products_number', $dvd->product_id) }}">
                                <button type="submit" class="btn btn-primary">Number Product</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('dvd.show_details', $dvd->id) }}">
                                <button type="submit" class="btn btn-primary">Show Details</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container">
        <h2 class="h2 text-dark">Games</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Number</th>
                    <th scope="col">Price</th>
                    <th scope="col">Console</th>
                    <th scope="col">Min Players</th>
                    <th scope="col">Max Players</th>
                    <th scope="col">Client Name</th>
                    <th scope="col">Get Price</th>
                    <th scope="col">Price with VAT</th>
                    <th scope="col">Number Product</th>
                    <th scope="col">Show Details</th>
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
                        @if (empty($game->product->client->name))
                            <td>Not assigned</td>
                        @else
                            <td>{{ $game->product->client->name }}</td>
                        @endif
                        <td>
                            <form action="{{ route('products.products_price', $game->product_id) }}">
                                <button type="submit" class="btn btn-primary">Get Price</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('products.products_price_vat', $game->product_id) }}">
                                <button type="submit" class="btn btn-primary">Price with VAT</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('products.products_number', $game->product_id) }}">
                                <button type="submit" class="btn btn-primary">Number Product</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('game.show_details', $game->id) }}">
                                <button type="submit" class="btn btn-primary">Show Details</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container mb-5">
        <form action="{{ route('videostore.index') }}" class="d-inline">
            <button type="submit" class="btn btn-secondary">Back to main page</button>
        </form>
    </div>
</body>

</html>
