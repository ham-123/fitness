
@extends('layouts.admin')
@section('title')
Admin|Cours
@endsection
@section('content')

<body>


<div class="container">
        <h1>Supprimer le cours "{{ $cours->nom_cours }}"</h1>
        <p>Êtes-vous sûr de vouloir supprimer ce cours ?</p>

        <form action="{{ route('cours.destroy', $cours->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
            <a href="{{ route('cours.index') }}" class="btn btn-primary">Annuler</a>
        </form>
    </div>




</body>


@endsection
