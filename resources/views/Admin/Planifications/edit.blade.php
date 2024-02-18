@extends('layouts.admin')

@section('title')
    Admin | Modification de planification
@endsection

@section('content')
    <div class="container">
        <h1>Modification de planification</h1>
        <form action="{{ route('planifications.update', $planification->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="cours">Cours</label>
                <select class="form-control" name="cours_id" id="cours">
                    @foreach($cours as $c)
                        <option value="{{ $c->id }}" {{ old('cours_id', $planification->cours_id) == $c->id ? 'selected' : '' }}>{{ $c->nom_cours }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="entraineur">Entraineur</label>
                <select class="form-control" name="entraineur_id" id="entraineur">
                    @foreach($entraineurs as $e)
                        <option value="{{ $e->id }}" {{ old('entraineur_id', $planification->entraineur_id) == $e->id ? 'selected' : '' }}>{{ $e->user->nom }} {{ $e->user->prenom }} ({{  $e->cours->nom_cours}})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jour">Jour</label>
                <select class="form-control" name="jour" id="jour">
                    <option value="lundi" {{ old('jour', $planification->jour) == 'lundi' ? 'selected' : '' }}>Lundi</option>
                    <option value="mardi" {{ old('jour', $planification->jour) == 'mardi' ? 'selected' : '' }}>Mardi</option>
                    <option value="mercredi" {{ old('jour', $planification->jour) == 'mercredi' ? 'selected' : '' }}>Mercredi</option>
                    <option value="jeudi" {{ old('jour', $planification->jour) == 'jeudi' ? 'selected' : '' }}>Jeudi</option>
                    <option value="vendredi" {{ old('jour', $planification->jour) == 'vendredi' ? 'selected' : '' }}>Vendredi</option>
                    <option value="samedi" {{ old('jour', $planification->jour) == 'samedi' ? 'selected' : '' }}>Samedi</option>
                    <option value="dimanche" {{ old('jour', $planification->jour) == 'dimanche' ? 'selected' : '' }}>Dimanche</option>
                </select>
            </div>
            <div class="form-group">
                <label for="heure_debut">Heure de début</label>
                <input type="time" class="form-control" id="heure_debut" name="heure_debut" value="{{ old('heure_debut', $planification->heure_debut) }}">
            </div>
            <div class="form-group">
                <label for="heure_fin">Heure de fin</label>
                <input type="time" class="form-control" id="heure_fin" name="heure_fin" value="{{ old('heure_fin', $planification->heure_fin) }}">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>


@endsection



