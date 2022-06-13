<footer class="py-2 px-5 mt-5 bg-dark text-light container-fluid d-flex justify-content-between">
    {{-- faire appel a une variable d'environement de .env --}}
    {{ env('APP_NAME') }}    
    &copy; coryright {{ date('d M Y H:i:s') }} &#127817;
    {{-- @if (!Route::is("app_city"))
        <a href="{{ route('app_city') }}">
            <button class="btn btn-outline-warning">liste villes</button>
        </a>
    @endif --}}
    <a class="text-light" href="{{ route('app_welcome') }}">start page laravel</a>
</footer>