<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- le contenu par defaut en second argument --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>@yield("title", config("app.name"))</title>
</head>
<body>
    <main class="container" role="main">
        @yield("content")
    </main>

    @include('layouts/partials/_footer')
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>