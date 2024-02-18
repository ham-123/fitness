@extends('layouts.admin')
@section('title')
Admin|Equipements
@endsection
@section('content')
<body>


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Création d\'équipement') }}</div>

                    <div class="card-body">
                        <form action="{{ route('admin.equipement.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nom">{{ __('Nom') }}</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('Description') }}</label>
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">{{ __('Image') }}</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('Créer') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>


@endsection
