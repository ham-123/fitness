@extends('layouts.admin')

@section('title')
    Admin | Création de planification
@endsection

@section('content')
    <div class="container">
        <h1>Création de planification</h1>
        <form action="{{ route('planifications.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="cours">Cours</label>
                <select class="form-control" name="cours_id" id="cours">
                    @foreach($cours as $c)
                        <option value="{{ $c->id }}">{{ $c->nom_cours }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="entraineur">Entraineur</label>
                <select class="form-control" name="entraineur_id" id="entraineur">
                    @foreach($entraineurs as $e)
                        <option value="{{ $e->id }}">{{ $e->user->nom }} {{ $e->user->prenom }} ({{  $e->cours->nom_cours}})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jour">Jour</label>
                <select class="form-control" name="jour" id="jour">
                    <option value="lundi">Lundi</option>
                    <option value="mardi">Mardi</option>
                    <option value="mercredi">Mercredi</option>
                    <option value="jeudi">Jeudi</option>
                    <option value="vendredi">Vendredi</option>
                    <option value="samedi">Samedi</option>
                    <option value="dimanche">Dimanche</option>
                </select>
            </div>
            <div class="form-group">
                <label for="heure_debut">Heure de début</label>
                <input type="time" class="form-control" id="heure_debut" name="heure_debut">
            </div>
            <div class="form-group">
                <label for="heure_fin">Heure de fin</label>
                <input type="time" class="form-control" id="heure_fin" name="heure_fin">
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>


@endsection
