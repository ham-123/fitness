
@extends('layouts.admin')
@section('title')
Admin|Cours
@endsection
@section('content')

<body>
<div class="container">
    <h1>Modifier le cours {{ $cours->nom_cours }}</h1>
    <form action="/cours/{{ $cours->id }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="nom_cours">Nom du cours</label>
        <input type="text" class="form-control" id="nom_cours" name="nom_cours" value="{{ $cours->nom_cours }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description">{{ $cours->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

</div>

 
</body>


@endsection

