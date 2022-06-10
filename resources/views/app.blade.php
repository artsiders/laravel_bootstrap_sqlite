<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- le contenu par defaut en second argument --}}
    <title>@yield("title", config("app.name"))</title>
</head>
<body>
    @yield("content")
    @yield("footer")
    <footer>
        {{-- faire appel a une variable d'environement de .env --}}
        {{ env('APP_NAME') }}
        
        &copy; coryright {{ date('d M Y H:i:s') }} &#127817;
    </footer>
</body>
</html>