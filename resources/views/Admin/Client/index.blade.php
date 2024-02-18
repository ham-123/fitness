 
@extends('layouts.admin')
@section('title')
Admin|Clients
@endsection
@section('content')
<div class="container">
    <h1>Clients</h1>  <a href="{{ route('admin.contact.messages') }}" class="btn btn-primary">Message</a>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{ optional($client->user)->nom }}</td>
                <td>{{ optional($client->user)->prenom }}</td>
                <td>
                    <a href="{{ route('clients.show', $client) }}" class="btn btn-info">Voir</a>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST">
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
