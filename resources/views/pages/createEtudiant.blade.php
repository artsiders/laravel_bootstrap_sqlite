@extends('layouts.app')

@section('content')
    <h2 class="text-center mt-2">ajouter un etudiant</h2>
    <form 
        class='mt-2 bg-dark text-light border border-primary p-4 rounded' 
        method="POST" 
        action="{{ route('app_etudiant.ajouter') }}"
    >
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (isset($success))
        <div class="alert alert-success">
            <ul>
                <li>{{ $success }}</li>
            </ul>
        </div>
        @endif
        {{-- securiser la provenance des données du formulaire --}}
        @csrf
        <div class="form-group mt-1">
            <label for="">nom</label>
            <input type="text" name="nom" class="form-control" placeholder="entrer le nom">
        </div>
        <div class="form-group mt-4">
            <label for="">prenom</label>
            <input type="text" name="prenom" class="form-control" placeholder="entrer le prenom">
        </div>
        <div class="form-group mt-4 mb-3">
            <label for="">classe</label>
            <select class="form-control" name="classe_id">
                @foreach ($classes as $classe)
                    <option value="{{ $classe->id }}">{{ $classe->libelle }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary">enregistrer</button> 
            <a href="{{ route('app_etudiant') }}" class="btn btn-danger">annuler</a> 
        </div>
  </form>
@endsection