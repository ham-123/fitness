@extends('layouts.base')

@section('content')
<section class="page-title-area bg-img" data-bg-img="{{ url('img/team/entr.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content">
                    <h2 class="title">Historique des <span>Abonnements</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<br>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Historique des abonnements</h1>
            <div class="abonnements-container">
                @php
                $abonnementsEnCours = $abonnements->where('date_fin', '>=', date('Y-m-d'))->sortBy('date_fin');
                $abonnementsExpire = $abonnements->where('date_fin', '<', date('Y-m-d'))->sortByDesc('date_fin');
                    @endphp

                    @foreach ($abonnementsEnCours->concat($abonnementsExpire) as $abonnement)
                    <div class="abonnement-card {{ strtotime($abonnement->date_fin) < strtotime('today') ? 'expired' : 'en-cours' }}">
                        <h2>
                            Cours:
                            @if ($abonnement->typeAbonnement->type === 'GROUPE')
                            Tous les cours
                            @else
                            {{ $abonnement->typeAbonnement->cours->nom_cours }}
                            @endif
                        </h2>
                        <p>{{ isset($abonnement->typeAbonnement) ? $abonnement->typeAbonnement->type : 'Non défini' }}</p>
                        <p>Date de début: {{ $abonnement->date_debut }}</p>
                        <p>Date de fin: {{ $abonnement->date_fin }}</p>
                        <p>Statut:
                            <span class="status">
                                @if (strtotime($abonnement->date_fin) > strtotime('today'))
                                <span class="status en-cours">En cours</span>
                                @else
                                <span class="status expire">Expiré</span>
                                @endif
                            </span>
                        </p>

                        <div id="qrcode-{{ $abonnement->id }}"></div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>

<style>
    .status.en-cours {
        color: green;
        font-weight: bold;
    }

    .status.expire {
        font-weight: bold;
        color: #ff6b6b;
    }

    .abonnements-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .abonnement-card {
        width: 300px;
        padding: 20px;
        margin: 10px;
        background-color: #f9f9f9;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .abonnement-card h2 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .abonnement-card p {
        margin-bottom: 5px;
    }

    .status.en-cours {
        color: #4CAF50;

    }

    .abonnement-card.expired {
        background-color: #f2f2f2;
    }
</style>

<script src="{{ url('js/qrcode.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const abonnementCards = document.querySelectorAll('.abonnement-card');
        abonnementCards.forEach(function(card) {
            const dateFin = new Date(card.querySelector('p:nth-child(4)').textContent.split(':')[1].trim());
            const today = new Date();
            if (dateFin < today) {
                card.classList.add('expired');
            }
        });
        const abonnementsEnCours = document.querySelectorAll('.abonnement-card.en-cours');
        abonnementsEnCours.forEach(function(card) {
            const abonnementId = card.getAttribute('id').split('-')[1];
            const qrcodeContainer = card.querySelector(`#qrcode-${abonnementId}`);

            const qrcode = new QRCode(qrcodeContainer, {
                text: `Abonnement ID: ${abonnementId}`,
                width: 128,
                height: 128
            });
        });
    });
</script>

@endsection