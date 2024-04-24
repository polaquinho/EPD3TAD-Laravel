<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choose Product</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <h1 class="display-0 text-center text-bg-dark mb-5">Choose the product to create</h1>
    <div class="container">
        <form action="{{ route('videostore.chosenproduct') }}" class="mb-3">
            <select name="choose_product" class="form-select form-select-lg mb-3">
                <option value="videotape">VideoTape</option>
                <option value="dvd">Dvd</option>
                <option value="game">Game</option>
            </select>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>


</html>
