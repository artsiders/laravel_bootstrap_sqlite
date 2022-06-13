<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- le contenu par defaut en second argument --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>@yield("title", config("app.name"))</title>
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
</head>
<body>
    <header>
        @include('layouts.partials._navigation')
    </header>
    <main class="container mt-5" role="main">
        @yield("content")
    </main>

    @include('layouts/partials/_footer')
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>