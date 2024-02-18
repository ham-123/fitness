@extends('layouts.base')

@section('content')
<main class="main-content">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img" data-bg-img="{{url ('img/team/no.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content">
                        <h2 class="title">NOS <span>Images</span></h2>
                    </div>
                    <div class="desc">
                        <p class="ml-0">
                        <div class="desc">
                            <p class="ml-0">Nous sommes fiers de vous offrir un environnement stimulant et accueillant pour vous aider à atteindre vos objectifs de condition physique.  ! </p>
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
                        @foreach($galleries as $gallerie)
                        <div class="col-md-4 mb-4">
                            <div class="team-item">
                                <div class="team-member">
                                    <div class="thumb d-flex align-items-center justify-content-center">
                                        @if($gallerie->image)
                                        <img class="team-member" src="{{ asset('storage/' . $gallerie->image) }}">
                                        @else
                                        <p>Aucune image disponible</p>
                                        @endif
                                    </div>
                                    <div class="content">
                                        <!-- contenu de la div content -->
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