@extends('layouts.app')

@section('content')
    <form method="POST">
        <div class="form-group">
            <label for="">nom</label>
            <input type="text" class="form-control" placeholder="entrer le nom">
        </div>
        <div class="form-group">
            <label for="">prenom</label>
            <input type="text" class="form-control" placeholder="entrer le prenom">
        </div>
        <div class="form-group mb-3">
            <label for="">classe</label>
            <select class="form-control" name="classe">
                @foreach ($classes as $classe)
                    <option value="{{ $classe->id }}">{{ $classe->libelle }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">enregistrer</button> 
            <a href="{{ route('app_etudiant') }}" class="btn btn-danger">annuler</a> 
        </div>
  </form>
@endsection