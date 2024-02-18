
@extends('layouts.admin')
@section('title')
Admin|Cours
@endsection
@section('content')


<body>




<div class="container">
    <h1>Liste des cours</h1>
    <a href="{{ route('cours.create') }}" class="btn btn-primary">Ajouter un cours</a>
    <hr>  @if (session('success'))
                    <div class="alert alert-danger">
                        {{ session('success') }}
                    </div>
                    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom du cours</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cours as $cours)
            <tr>
                <td>{{ $cours->nom_cours }}</td>
                <td>{{ $cours->description }}</td>
                <td>
                    <a href="{{ route('cours.edit', $cours->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('cours.destroy', $cours->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Retour</a>
</div>

 
</body>


@endsection
