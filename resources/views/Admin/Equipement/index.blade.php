@extends('layouts.admin')
@section('title')
Admin|Equipements
@endsection
@section('content')

<body>
    <?php

    use Illuminate\Support\Str; ?>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Liste des équipements') }}</div>
                    @if (session('success'))
                    <div class="alert alert-danger">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($equipements as $equipement)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $equipement->nom }}</td>
                                    <td>{{ str_limit($equipement->description, 50) }}</td>
                                    <td>
                                        @if($equipement->image)
                                        <img src="{{ asset('storage/' . $equipement->image) }}" alt="{{ $equipement->nom }}"width="100">                                        @else
                                        <p>Aucune image disponible</p>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/equipement/{{ $equipement->id }}" class="btn btn-primary">Voir</a>
                                        <form action="{{ route('admin.equipement.destroy', ['equipement' => $equipement->id]) }}" method="POST" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger mt-1">Supprimer</button> 
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> 
                <div>
                    <a href="{{  route('admin.equipement.create')  }}" class="btn btn-primary mt-1">Ajouter un equipement</a>
                </div>
            </div> 
        </div>
    </div><br><br>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Retour</a>




</body>


@endsection
