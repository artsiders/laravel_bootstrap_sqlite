<nav>
    <div class="nav nav-tabs bg-warning fixed-top" role="tablist">
        <a 
            class="nav-item nav-link @if (Route::is("app_home")) active @endif" 
            data-toggle="tab" 
            href="{{ route('app_home') }}" 
            role="tab" 
            aria-controls="nav-profile" 
            aria-selected="false"
        >home</a>
        <a 
            class="nav-item nav-link @if (Route::is("app_etudiant")) active @endif" 
            data-toggle="tab" 
            href="{{ route('app_etudiant') }}" 
            role="tab" 
            aria-controls="nav-contact" 
            aria-selected="false"
        >etudiants</a>
        <a 
            class="nav-item nav-link @if (Route::is("app_about")) active @endif" 
            data-toggle="tab" 
            href="{{ route('app_about') }}" 
            role="tab" 
            aria-controls="nav-home" 
            aria-selected="true"
        >A Propos</a>
    </div>
</nav>