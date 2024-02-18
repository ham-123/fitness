@extends('layouts.base')

@section('content')
<main class="main-content">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img" data-bg-img="{{url ('img/photos/salle.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content">
                        <h2 class="title">NOS <span>EQUIPEMENTS</span></h2>
                    </div>
                    <div class="desc">
                <p class="ml-0"><div class="desc">
                <p class="ml-0">Nous sommes fiers de vous offrir un environnement stimulant et accueillant pour vous aider à atteindre vos objectifs de condition physique. Notre équipe d'entraîneurs expérimentés est là pour vous aider à concevoir un programme d'entraînement personnalisé et à vous accompagner tout au long de votre parcours. Notre équipement de pointe et nos installations modernes sont conçus pour vous offrir une expérience de fitness exceptionnelle. Que vous soyez débutant ou athlète confirmé, nous avons tout ce qu'il vous faut pour vous aider à atteindre vos objectifs. Rejoignez-nous dès maintenant et commencez votre voyage vers une vie plus saine et plus active ! </p>
              </div>! </p>
              </div>
                </div>
            </div>
        </div>
    </section> <br>

    <div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card-body">
                    <div class="row">
                        @foreach($equipements as $equipement)
                        <div class="col-md-4 mb-4">
                            <div class="team-item">
                                <div class="team-member">
                                    <div class="thumb">
                                        @if($equipement->image)
                                        <img class="team-member" src="{{ asset('storage/' . $equipement->image) }}" alt="{{ $equipement->nom }}">
                                        @else
                                        <p>Aucune image disponible</p>
                                        @endif
                                    </div>
                                    <div class="content">
                                        
                                            <div class="member-info">
                                                <h4 class="name">{{ $equipement->nom }}</h4> <br>
                                                
                                                <p class="description">{{ ($equipement->description) }}</p>
                                                <div class="team-footer">
                                                </div>
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>
    </div><br><br>
</main>

<style>
    .team-member img {
        width: 95%;
        height: 400px;
        object-fit: cover;
    }

    .team-item {
        margin-bottom: 50px;
        margin-left: 30px;
        margin-right: 30px;
        
    }

    .team-member {
        padding: 0px;
        background-color: #ffd700;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .team-member .description {
    display: none;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 10px;
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    text-align: center;
    transition: all 0.3s ease-in-out;
    font-size: 16px; 
    vertical-align: top;
}


    .team-member:hover .description {
        display: block;
    }
    .member-info h4.name {
    font-size: 24px;
}

</style>

@endsection