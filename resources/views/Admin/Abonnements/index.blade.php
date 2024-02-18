@extends('layouts.admin')
@section('title')
Admin|Abonnement
@endsection
@section('content')
<div class="table-responsive">
<h1>Liste des entraineurs</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Type d'abonnement</th>
                <th>Nom du client</th>
                <th>Cours</th>
                <!-- Autres colonnes que vous souhaitez afficher -->
            </tr>
        </thead>
        <tbody>
            @foreach ($abonnements as $abonnement)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $abonnement->date_debut }}</td>
                    <td>{{ $abonnement->date_fin }}</td>
                    <td>{{ isset($abonnement->typeAbonnement) ? $abonnement->typeAbonnement->type : 'Non défini' }}</td>
                    <td>{{ isset($abonnement->client) ? $abonnement->client->user->nom .' '. $abonnement->client->user->prenom : 'Non défini' }}</td>
                    <td>
                        @if($abonnement->typeAbonnement->type == 'GROUPE')
                            Tous les cours confondus
                        @else
                            {{ isset($abonnement->typeAbonnement) ? $abonnement->typeAbonnement->cours->nom_cours : 'Non défini' }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
