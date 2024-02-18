@extends('layouts.base')

@section('content')
<style>
  .grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-gap: 20px;
    justify-items: center;
  }

  .member-info {
    width: 300px;
    height: 400px;
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
    border-radius: 10px;
    overflow: hidden;
  }

  .name {
    font-size: 30px;
    font-weight: bold;
    color: #333;
    margin: 20px;
  }

  .designation {
    font-size: 18px;
    color: #777;
    margin: 10px;
  }

  .social-icons {
    display: flex;
    justify-content: center;
  }

  .icon {
    font-size: 20px;
    color: #333;
    margin: 10px;
  }

  .team-footer {
    display: flex;
    justify-content: center;
  }

  .btn {
    width: 200px;
    height: 40px;
    background-color: #333;
    color: #fff;
    border-radius: 20px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .btn:hover {
    background-color: #555;
  }
</style>
<main class="main-content">
  <!--== Start Page Title Area ==-->
  <section class="page-title-area bg-img" data-bg-img="{{url ('img/team/entr.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-title-content">
            <h2 class="title">NOS <span>Abonnements</span></h2>
          </div>
        </div>
      </div>
    </div>
  </section> <br>
  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif

  <a href="{{ route('historique.abonnements') }}" class="btn btn-primary">Historique</a>

  <div class="container">
    <h2>Abonnements cours Collectifs</h2>
    <div class="grid-container">
      @foreach($typeabonnement as $type)
      @if($type->type == 'GROUPE')
      <div class="member-info">
        <?php
        $groupImages = [
          'img/abon/c1.jpg',
          'img/abon/c2.jpg',
          'img/abon/c3.png',
        ];
        ?>
        @if(count($groupImages) > 0)
        <?php
        $randomIndex = array_rand($groupImages);
        $image = $groupImages[$randomIndex];
        unset($groupImages[$randomIndex]);
        ?>
        <img src="{{ asset($image) }}" alt="Abonnement en groupe" style="width: 100%; height: 200px; object-fit: cover;">
        @endif
        <h4 class="name">{{ $type->type }} - {{ $type->periode }}</h4>
        <h6 class="designation">Tous les cours {{ $type->prix }} FCFA</h6>
        <div class="social-icons">
        </div>
        <div class="team-footer">
          <form action="{{ route('store', ['typeAbonnement' => $type->id, 'dateDebut' => $dateDebut]) }}" method="POST">
            @csrf
            <input type="date" name="date_debut" value="{{ $dateDebut }}" required> <br>
            <button class="btn mt-2" type="submit">S'abonner</button>
          </form>
        </div>
      </div>
      @endif
      @endforeach
    </div>
    <br>
    <h2>Abonnements cours personnels</h2>
    <div class="grid-container">
      @foreach($typeabonnement as $type)
      @if($type->type == 'PERSONNEL')
      <div class="member-info">
        <?php
        $personnelImages = [
          'img/abon/p1.jpg',
          'img/abon/p2.jpg',
          'img/abon/p3.jpg',
          'img/abon/p4.jpg',
          'img/abon/p5.jpg',

        ];
        ?>
        @if(count($personnelImages) > 0)
        <?php
        $randomIndex = array_rand($personnelImages);
        $image = $personnelImages[$randomIndex];
        unset($personnelImages[$randomIndex]);
        ?>
        <img src="{{ asset($image) }}" alt="Abonnement personnel" style="width: 100%; height: 200px; object-fit: cover;">
        @endif
        <h4 class="name">{{ $type->type }} - {{ $type->periode }}</h4>
        <h6 class="designation">{{ $type->cours->nom_cours }} - {{ $type->prix }} FCFA</h6>
        <div class="social-icons">

        </div>
        <form action="{{ route('store', ['typeAbonnement' => $type->id, 'dateDebut' => $dateDebut]) }}" method="POST">
          @csrf
          <input type="date" name="date_debut" value="{{ $dateDebut }}" required> <br>
          <button class="btn mt-2" type="submit">S'abonner</button>
        </form>

      </div>
      @endif
      @endforeach
    </div>
  </div> <br>
</main>
<style>
   h4 {
        font-size: 25px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    h2 {
        font-size: 35px;
        font-weight: bold;
        margin-bottom: 10px;
    }
</style>
@endsection