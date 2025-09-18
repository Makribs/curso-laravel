<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS do Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-BT97aZsO5vYp6v0gmnCeuCRlKxH7K4c8O5V0c8mYg5jI3y5E6f5n3y5f5d5f5d5f5" crossorigin="anonymous">

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>...</header>
        <main>
            @yield('content')
        </main>
        <footer>
            <p>HDC Events &copy; 2025</p>
        </footer>
    </body>
</html>
