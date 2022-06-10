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