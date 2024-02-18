@extends('layouts.admin')

@section('content')
    <h1>Ajouter un entraîneur</h1>

    <form action="{{ route('entraineurs.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}">
            @error('nom')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom') }}">
            @error('prenom')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control" id="tel" name="tel" value="{{ old('tel') }}">
            @error('telephone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Image (facultatif)</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
    <label for="cours_id">Cours</label>
    <select name="cours_id" id="cours_id" class="form-control">
        @foreach($cours as $c)
            <option value="{{ $c->id }}">{{ $c->nom_cours }}</option>
        @endforeach
    </select>
</div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection
