@extends('layouts.admin')

@section('content')
<h1>Modifier l'entraineur</h1>

<form action="{{ route('entraineurs.update', $entraineur->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control" value="{{ $entraineur->user->nom }}" required>
    </div>
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" class="form-control" value="{{ $entraineur->user->prenom }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $entraineur->user->email }}" required>
    </div>
    <div class="form-group">
        <label for="tel">Téléphone</label>
        <input type="tel" name="tel" id="tel" class="form-control" value="{{ $entraineur->user->tel }}" required>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control-file">
        @if($entraineur->image)
        <img src="{{ asset('storage/' . $entraineur->image) }}" class="img-thumbnail" width="200">
        @endif
    </div>
    <div class="form-group">
        <label for="cours_id">Cours</label>
        <select name="cours_id" id="cours_id" class="form-control">
            @foreach($cours as $coursItem)
            <option value="{{ $coursItem->id }}" @if($coursItem->id === $entraineur->cours_id) selected @endif>{{ $coursItem->nom_cours }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

@endsection
