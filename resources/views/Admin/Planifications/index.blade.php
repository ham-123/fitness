@extends('layouts.admin')

@section('title', 'Planifications')

@section('content')
    <div class="container">
        <h1>Liste des planifications</h1>
        <a href="{{ route('admin.planifications.create') }}" class="btn btn-primary">Ajouter une planification</a>
        @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

        <table class="table">
            <thead>
                <tr>
                    <th>Jour</th>
                    <th>Heure de début</th>
                    <th>Heure de fin</th>
                    <th>Cours</th>
                    <th>Entraineur</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($planifications as $planification)
                    <tr>
                        <td>{{ $planification->jour }}</td>
                        <td>{{ $planification->heure_debut }}h</td>
                        <td>{{ $planification->heure_fin }}h</td>
                        <td>{{ optional($planification->cours)->nom_cours }}</td>

                        <td>{{ optional($planification->entraineur)->user ? $planification->entraineur->user->nom . ' ' . $planification->entraineur->user->prenom : '' }}</td>


                        <td>
                            <a href="{{ route('admin.planifications.edit', ['planification' => $planification->id]) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('planifications.destroy', ['planification' => $planification->id]) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
