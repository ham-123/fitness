@extends('layouts.admin')
@section('title')
Admin|Equipements
@endsection
@section('content')
<body>



<a href="{{ route('admin.equipement.index') }}" class="btn btn-secondary">Retour</a>
<table class="table">
    <tbody>
        <tr>
            <th scope="row">Nom</th>
            <td>{{ $equipement->nom }}</td>
        </tr>
        <tr>
            <th scope="row">Description</th>
            <td>{{ $equipement->description }}</td>
        </tr>
        <tr>
            <th scope="row">Image</th>
            <td>  <img src="{{ asset('storage/' . $equipement->image) }}" alt="{{ $equipement->nom }}"width="100"> </td>
        </tr>
    </tbody>
</table>


</body>


@endsection
