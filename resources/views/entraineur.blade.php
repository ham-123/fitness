@extends('layouts.base')

@section('content') 
<main class="main-content">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img" data-bg-img="{{url ('img/team/entr.jpg')}}">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content">
              <h2 class="title">NOS <span>ENTRAINEURS</span></h2>
            </div>
          </div>
        </div>
      </div>
    </section> <br>

<div class="row">
    @foreach($entraineurs as $entraineur)
    <div class="col-md-3 mb-4 ml-3 mr-3">
        <div class="team-item">
            <div class="team-member">
                <div class="thumb">
                    <a href="{{ route('showentraineurs', $entraineur->id) }}">
                    <img class="team-member" src="{{ url('storage/' . $entraineur->image) }}" alt="Image">

                    </a>
                </div>
                <div class="content">
                    <div class="member-info">
                        <h4 class="name">{{ $entraineur->user->nom }} {{ $entraineur->user->prenom }}</h4>
                        <h6 class="designation">{{ $entraineur->cours->nom_cours }}</h6>
                        <div class="social-icons">
                            <a href="#/"><i class="fa fa-facebook icon"></i></a>
                            <a href="#/"><i class="fa fa-phone icon"></i></a>
                            <a href="#/"><i class="fa fa-instagram icon"></i></a>
                            <a href="#/"><i class="fa fa-twitter icon"></i></a>
                        </div>
                        <div class="team-footer">
                            <a class="btn" href="{{ route('showentraineurs', $entraineur->id) }}">VOIR LE PROFIL</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    @endforeach
</div>
</main>
<style>
    .team-member img {
    width: 100%;
    height: 500px; /* ou la hauteur de votre choix */
    object-fit: cover;
    
}
  .team-item {
    margin-bottom: 30px;
    margin-left: 30px;
    margin-right: 30px;
  }
  .team-member {
    padding: 0px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
  }

</style>

@endsection
