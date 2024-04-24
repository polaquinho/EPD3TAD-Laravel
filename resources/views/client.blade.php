<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <h1 class="display-0 text-center text-bg-dark mb-5">Client Information</h1>
    @if (session('message'))
        <div class="message-created-note alert alert-info" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="container">
        <div class="card mb-3">
            <div class="card-header">
                <h3 class="text-center">Hi {{ $client->name }}, welcome back.</h3>
            </div>
            <div class="card-body">
                <p>Your client number is {{ $client->number }}.</p>
                <p>You have {{ $client->amount_of_rent }} out of {{ $client->maxRent }} products on rent.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="text-center">Products rented</h3>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">Title</th>
                    <th scope="col" class="text-center">Price</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="text-center">{{ $product->title }}</td>
                        <td class="text-center">{{ $product->price }}</td>
                        <td class="text-center">
                            <form
                                action="{{ route('client.returned_products', ['product_id' => $product->id, 'client_id' => $client->id]) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm btn-danger">Return product</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container">
        <div class="btn-group mb-3">
            <form action="{{ route('client.rent_products', $client->id) }}">
                @csrf
                <button type="submit" class="btn btn-primary">Rent products</button>
            </form>
            <form action="{{ route('client.rent_product_question', $client->id) }}">
                <button type="submit" class="btn btn-outline-primary">All products</button>
            </form>
            <form action="{{ route('client.choose_client') }}">
                <button type="submit" class="btn btn-outline-primary">Back to choose client</button>
            </form>
            <form action="{{ route('videostore.index') }}">
                <button type="submit" class="btn btn-outline-primary">Back to main page</button>
            </form>
        </div>

    </div>
</body>

</html>
