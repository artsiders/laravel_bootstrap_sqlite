<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- le contenu par defaut en second argument --}}
    <title>@yield("title", config("app.name"))</title>
</head>
<body>
    <main role="main">
        @yield("content")
    </main>

    @include('layouts/partials/_footer')
</body>
</html>