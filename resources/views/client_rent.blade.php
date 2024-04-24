<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products to rent</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <h1 class="display-0 text-center text-bg-dark mb-5">Rent some products</h1>
    <div class="container">
        <h2>Hi {{ $client->name }}. Here you can rent some products.</h2>

        @if (session('message'))
            <div class="message-created-note alert alert-info" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <table class="table table-bordered table-hover text-center table-striped">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($unrented_products as $unrented_product)
                    <tr>
                        <td>{{ $unrented_product->title }}</td>
                        <td>{{ $unrented_product->price }}</td>
                        <td>
                            <form
                                action="{{ route('client.rented_products', ['unrented_product_id' => $unrented_product->id, 'client_id' => $client->id]) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm btn-primary">Rent</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-start mt-3">
            <form action="{{ route('client.choose_client') }}">
                <button type="submit" class="btn btn-secondary">Back to choose client</button>
            </form>
        </div>
    </div>

</body>

</html>
