@extends('layouts.base')

@section('content')
<main class="main-content">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img" data-bg-img="{{ asset('storage/' . $entraineur->image) }}" style="background-position: top;" >
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content">
              <h2 class="title"> <span>{{ $entraineur->user->nom }}</span> {{ $entraineur->user->prenom }}</h2>
            </div>
          </div>
        </div>
      </div>
    </section> <br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                

                <div class="panel-body">
    <div class="member-info d-flex align-items-center">
        <div class="info text-left">
            <h2 class="name mb-0">{{ $entraineur->user->nom }} {{ $entraineur->user->prenom }}</h2> <br>
            <h4 class="designation font-weight-bold mt-2 mb-0"><strong>Spécialité : </strong>{{ $entraineur->cours->nom_cours }}</h4><br>
            <p class="phone mt-2 mb-0"><strong>Numéro de téléphone : </strong>{{ $entraineur->user->tel }}</p><br>
            <p class="email mt-2 mb-0"><strong>Email : </strong>{{ $entraineur->user->email }}</p><br>
            <div class="social-icons mt-3">
                <a href="#"><i class="fa fa-facebook icon"></i></a>
                <a href="#"><i class="fa fa-phone icon"></i></a>
                <a href="#"><i class="fa fa-instagram icon"></i></a>
                <a href="#"><i class="fa fa-twitter icon"></i></a>
            </div>
            <div class="team-footer mt-3">
                <a class="btn btn-outline-warning" href="{{ route('entraineurs') }}">RETOUR À LA LISTE</a>
            </div>
        </div>
        <img src="{{ asset('storage/' . $entraineur->image) }}" alt="{{ $entraineur->user->nom }}" class="rounded-circle ml-5 mr-5" style="width: 500px;">
    </div>
</div>

            </div>
        </div>
    </div>
</div>

<style>

</style>
@endsection
