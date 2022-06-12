<footer class="py-5 mx-5">
    {{-- faire appel a une variable d'environement de .env --}}
    {{ env('APP_NAME') }}
    
    &copy; coryright {{ date('d M Y H:i:s') }} &#127817;

    @if (!Route::is("app_home"))
        <a href="{{ route('app_home') }}"><button class="btn btn-primary">home page</button></a>
    @endif
    @if (!Route::is("app_about"))
        <a href="{{ route('app_about') }}"><button class="btn btn-dark">a propos</button></a>
    @endif
    @if (!Route::is("app_city"))
        <a href="{{ route('app_city') }}"><button class="btn btn-warning">liste::villes</button></a>
    @endif
    <br>
    <a href="{{ route('app_welcome') }}">start page laravel</a>
    <div class="spinner-grow text-primary" role="status">
        <span class="sr-only"></span>
    </div>
</footer>