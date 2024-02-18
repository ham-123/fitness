@extends('layouts.admin')
@section('title')
Admin|Gallleries
@endsection
@section('content')

<a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary">Retour</a>
    <div class="container">
        <h1>{{$galerie->title}}</h1>
        <p>{{$galerie->description}}</p>
        <img src="{{ asset('storage/' . $galerie->image) }}" alt="{{$galerie->title}}" class="img-fluid" width="500">
        <form action="{{ route('galleries.destroy', $galerie->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-2">Supprimer</button>
        </form>
    </div>
@endsection
