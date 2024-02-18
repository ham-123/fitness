@extends('layouts.admin')
@section('title')
Admin|Galleries
@endsection
@section('content')

    <div class="container">
        <h1>Ajouter une image à la galerie</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('galleries.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="image">Image :</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
