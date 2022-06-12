@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end">
  <a class="btn btn-outline-primary mt-3" href="{{ route('app_etudiant.create') }}">ajouter un etudiant</a>
</div>
<table class="table table-bordered mt-2">
    <thead class="thead-dark bg-dark text-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">nom</th>
        <th scope="col">prenom</th>
        <th scope="col">classe</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($etudiants as $etudiant)
        <tr>
          <th scope="row">{{ $loop->index + 1 }}</th>
          <td>{{ $etudiant->nom }}</td>
          <td>{{ $etudiant->prenom }}</td>
          <td>{{ $etudiant->classe->libelle }}</td>
          <td>
            <button class="btn btn-outline-success">editer</button>
            <button class="btn btn-outline-danger">supprimer</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {{ $etudiants->links() }}
@endsection