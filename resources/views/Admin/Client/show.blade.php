
@extends('layouts.admin')
@section('title')
Admin|Clients
@endsection
@section('content')
<div class="container">
    <h1>{{ trans('Details du client ') }}</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ optional($clients->user)->nom }} {{ optional($clients->user)->prenom }}</h5>
            <p class="card-text">Email: {{ optional($clients->user)->email }}</p>
            <p class="card-text">Sexe: {{ $clients->sexe }}</p>
            <p class="card-text">Age: {{ $clients->age }}</p>
            <p class="card-text">Adresse: {{ $clients->adresse }}</p>
            <p class="card-text">Type de client: {{ $clients->type_client }}</p>
            <p class="card-text">Téléphone: {{ optional($clients->user)->tel }}</p>
            <!-- Add a link to go back to the clients index page -->
            <a href="{{ route('admin.client.index') }}" class="btn btn-primary">{{ trans('Retour') }}</a>
        </div>
    </div>
</div>
@endsection
