
@extends('layouts.admin')
@section('title')
Admin|Cours
@endsection
@section('content')


<body>


<div class="container">
    <h1>Ajouter un cours</h1>
    <form action="{{ route('cours.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nom_cours">Nom du cours</label>
            <input type="text" class="form-control" id="nom_cours" name="nom_cours">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>




</body>


@endsection
