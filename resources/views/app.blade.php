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
    @yield("content")
    @yield("footer")
    
    <br/>
    @if (Route::is('app_home'))
        <img src="{{ asset('/images/cameroon.png') }}" alt="cameroon finger print" />
    @endif
    @if (Route::is('app_about'))
        <img src="{{ asset('/images/profile.jpg') }}" alt="profile"/>
    @endif

    <footer>
        {{-- faire appel a une variable d'environement de .env --}}
        {{ env('APP_NAME') }}
        
        &copy; coryright {{ date('d M Y H:i:s') }} &#127817;

        @if (!Route::is("app_home"))
            <a href="{{route('app_home')}}"><button>home page</button></a>
        @endif
        @if (!Route::is("app_about"))
            <a href="{{route('app_about')}}"><button>a propos</button></a>
        @endif
        <br>
        <a href="{{route('app_welcome')}}">start page laravel</a>
    </footer>
</body>
</html>