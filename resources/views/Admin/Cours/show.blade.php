
@extends('layouts.admin')
@section('title')
Admin|Cours
@endsection
@section('content')

<body>
 <div class="container">
        <h1>{{ $cours->nom_cours }}</h1>
        <p>{{ $cours->description }}</p>
        <a href="{{ route('cours.index') }}" class="btn btn-primary">Retour</a>
    </div>


 
</body>


@endsection