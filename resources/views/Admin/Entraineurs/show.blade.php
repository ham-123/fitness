@extends('layouts.admin')

@section('title')
Admin|Entraineur
@endsection

@section('content')

<div class="container">
    <h1>{{ $entraineur->user->nom }} {{ $entraineur->user->prenom }}</h1>
    <p>Email: {{ $entraineur->user->email }}</p>
    <p>Téléphone: {{ $entraineur->user->tel }}</p>
    <p>Cours: {{ $entraineur->cours->nom_cours }}</p>
    @if($entraineur->image)
    <img src="{{ asset('storage/' . $entraineur->image) }}" class="img-thumbnail" width="200">
    @endif
    <a href="{{ route('admin.entraineurs.index') }}" class="btn btn-primary">Retour</a>
</div>

@endsection
