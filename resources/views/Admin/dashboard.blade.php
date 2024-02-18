@extends('layouts.admin')
@section('title')
Admin
@endsection
@section('content')
    <br> <br><br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Entraîneurs</div>
                <div class="card-body">
                    <p>Gérez les entraîneurs de votre salle de gym.</p>
                    <a href="{{ route('admin.entraineurs.index') }}" class="btn btn-primary">Gestion entraîneurs</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Cours</div>
                <div class="card-body">
                    <p>Gérez les cours proposés par votre salle de gym.</p>
                    <a href="{{  route('admin.cours.index')  }}" class="btn btn-primary">Gestion cours</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Équipements</div>
                <div class="card-body">
                    <p>Gérez les équipements disponibles dans votre salle de gym.</p>
                    <a href="{{  route('admin.equipement.index')  }}" class="btn btn-primary">Gestion équipements</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Planifications</div>
                <div class="card-body">
                    <p>Gérez les planifications des cours et des entraîneurs.</p>
                    <a href="{{ route('admin.planifications.index') }}" class="btn btn-primary">Gestion planifications</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Abonnements</div>
                <div class="card-body">
                    <p>Gérez les abonnements des clients à votre salle de gym.</p>
                    <a href="{{  route('admin.abonnements.index')  }}" class="btn btn-primary">Voir les abonnements</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Cients</div>
                <div class="card-body">
                    <p>Gérez les clients inscrits à votre salle de gym.</p>
                    <a href="{{ route('admin.client.index') }}" class="btn btn-primary">Gestion Clients</a>
                </div>
            </div>
        </div>
    </div>
<div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Gallleries</div>
                <div class="card-body">
                    <p>Gérez les images de la salle de gym.</p>
                    <a href="{{ route('admin.galleries.index') }}" class="btn btn-primary">Voir la galerie</a>
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection