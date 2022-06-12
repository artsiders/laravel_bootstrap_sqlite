<footer class="py-2 px-5 fixed-bottom bg-dark text-light container-fluid d-flex justify-content-around">
    {{-- faire appel a une variable d'environement de .env --}}
    {{ env('APP_NAME') }}
    
    &copy; coryright {{ date('d M Y H:i:s') }} &#127817;

    @if (!Route::is("app_home"))
        <a href="{{ route('app_home') }}">
            <button class="btn btn-outline-primary">home page</button>
        </a>
    @endif
    @if (!Route::is("app_about"))
        <a href="{{ route('app_about') }}">
            <button class="btn btn-outline-light">a propos</button>
        </a>
    @endif
    @if (!Route::is("app_city"))
        <a href="{{ route('app_city') }}">
            <button class="btn btn-outline-warning">liste villes</button>
        </a>
    @endif
    @if (!Route::is("app_etudiant"))
        <a href="{{ route('app_etudiant') }}">
            <button class="btn btn-outline-success">liste d'etudiant</button>
        </a>
    @endif
    <br>
    <a href="{{ route('app_welcome') }}">start page laravel</a>
</footer>