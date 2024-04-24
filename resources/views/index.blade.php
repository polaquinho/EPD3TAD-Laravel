<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <h1 class="display-0 text-center text-bg-dark mb-5">Welcome to {{ $videostore->name }}</h1>

    <div class="container">
        <h2>Client List from Database (Total clients number: {{ $videostore->clientsNumber }})</h2>

        <table class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Number</th>
                    <th scope="col">Amount of rent</th>
                    <th scope="col">Max rent</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->number }}</td>
                        <td>{{ $client->amount_of_rent }}</td>
                        <td>{{ $client->maxRent }}</td>
                        <td>
                            <form action="{{ route('videostore.deleteclient', $client->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete client</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if (session('delete_client_message'))
            <div class="alert alert-success" role="alert">
                {{ session('delete_client_message') }}
            </div>
        @endif
        <div class="btn-group mr-2" role="group" aria-label="Client actions">
            <form action="{{ route('videostore.newclient') }}">
                <button type="submit" class="btn btn-primary">New client</button>
            </form>
            <form action="{{ route('client.choose_client') }}">
                <button type="submit" class="btn btn-outline-primary">Choose client</button>
            </form>
        </div>
    </div>

    <div class="container mt-5">
        <h2>Product List from Database (Total products number: {{ $videostore->productsNumber }})</h2>

        <table class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Products Number</th>
                    <th scope="col">Price</th>
                    <th scope="col">Clients Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->number }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            @if (empty($product->client->name))
                                Not assigned
                            @else
                                {{ $product->client->name }}
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('videostore.deleteproduct', $product->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete product</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if (session('delete_product_message'))
            <div class="alert alert-success" role="alert">
                <br>
                {{ session('delete_product_message') }}
                <br>
            </div>
        @endif
        {{-- {{ $products->links() }} --}}
        <div class="btn-group mr-2" role="group" aria-label="Product actions">
            <form action="{{ route('products.show') }}">
                <button type="submit" class="btn btn-primary">Ver detalles de productos</button>
            </form>
            <form action="{{ route('videostore.choose_product') }}">
                <button type="submit" class="btn btn-outline-primary">New product</button>
            </form>
        </div>
    </div>

    <br>




</body>

</html>
