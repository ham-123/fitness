@extends('layouts.admin')
@section('title')
Admin|Equipements
@endsection
@section('content')
<body>


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Supprimer l\'équipement') }}</div>

                    <div class="card-body">
                        <h2>{{ $equipement->nom }}</h2>
                        <p>{{ $equipement->description }}</p>

                        <p>Êtes-vous sûr de vouloir supprimer cet équipement ?</p>

                        <form action="{{ route('admin.equipements.destroy', ['equipement' => $equipement->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Oui, supprimer</button>
                            <a href="{{ route('admin.equipements.index') }}" class="btn btn-secondary">Annuler</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


@endsection
