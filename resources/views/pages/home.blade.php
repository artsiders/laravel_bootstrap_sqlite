@extends("layouts.app")

@section('content')
<section class="text-center container-fluid cover-section">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Laravel | Bootstrap | Sqlite</h1>
            <p class="lead text-light">je revoi un peut laravel et j'en profite pour me familiarisé avec bootstrap  et sqlite 😁
            </p>
            <p>
                <a href="https://youtube.com/c/artsider99" target="_blanc" class="btn btn-danger mx-3 my-2">art sider
                    youtube</a>
                <a href="https://facebook.com/jmsart" target="_blanc" class="btn btn-primary mx-3 my-2">jms art
                    facebook</a>
            </p>
        </div>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($etudiants as $etudiant)
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body pt-2">
                        <h5>{{ $etudiant->prenom .' '. $etudiant->nom }}</h5>
                        <p class="card-text">inscrit le : <strong>{{ date_format($etudiant->created_at, "d M Y") }}</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-danger">delete</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">{{ $etudiant->classe->libelle }}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-3">
            {{ $etudiants->links() }}
        </div>
    </div>
</div>

@endsection


</body>

</html>