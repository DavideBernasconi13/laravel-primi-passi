<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Primi passi con Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-dark text-light">
        <div class="container">
            <h1 class="text-danger">Hello wordl!</h1>
            <p>Bentornato, {{$name}} {{$surname}}</p>
            <a href="welcome">Vai alla welcome page</a>
        </div>
    </main>

</body>

</html>