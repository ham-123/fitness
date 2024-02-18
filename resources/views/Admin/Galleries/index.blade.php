@extends('layouts.admin')
@section('title')
Admin|Gallleries
@endsection
@section('content')


   
<div class="container">
    <h1>Galleries</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galerie as $galerie)
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset('storage/'.$galerie->image) }}" alt="{{ $galerie->id }}" width="100" style="transition: transform 0.3s;"></td>
                    <td>
                        <a href="{{ route('galleries.show', $galerie->id) }}" class="btn btn-primary">Afficher</a>
                        
                        <form action="{{ route('galleries.destroy', $galerie->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette image ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('admin.galleries.create') }}" class="btn btn-success">Ajouter une image</a>
</div>
@endsection

      