@extends('layouts.base')

@section('content')
<style>
    .container {
        margin-top: 20px;
    }

    h1 {
        font-size: 30px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    p {
        font-size: 20px;
        margin-bottom: 5px;
    }

    .payment-widget {
        margin-top: 20px;
    }
</style>

<section class="page-title-area bg-img" data-bg-img="{{ url('img/team/entr.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content">
                    <h2 class="title">NOS <span>Abonnements</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<br>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Détails de l'abonnement</h1>
            <p>Date de début : {{ $dateDebut }}</p>
            <p>Type d'abonnement : {{ $typeAbonnement }}</p>
            <p>Période d'abonnement : {{ $periodeAbonnement }}</p>
            <p>Prix de l'abonnement : {{ $prixAbonnement }}</p>
            @if($typeAbonnement == 'GROUPE')
            <p>Cours : "Tous les cours confondu"</p>
            @else
            <p>Cours : {{ $nomCours }}</p>
            @endif

            <div class="payment-widget">
                <kkiapay-widget sandbox="true" 
                name="{{auth()->user()->prenom}} {{auth()->user()->nom}}"
                email="{{auth()->user()->email}}"
                amount="{{ $prixAbonnement }}" key="5cb2e630f4f011edb3c42fb58228ca60" callback="{{ route('process.payment', ['typeAbonnement' => $typeAbonnement, 'dateDebut' => $dateDebut]) }}" />
            </div>
        </div>
    </div>
</div>
<a href="{{ route('abonnements') }}" class="btn btn-primary">Retour</a>
@endsection

