@extends('layouts.base')
@section('title')
Planification
@endsection
@section('content')
<main class="main-content">

    <section class="page-title-area bg-img" data-bg-img="{{url ('img/team/no.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content">
                        <h2 class="title">NOS <span>Programmes</span></h2>
                    </div>
                    <div class="desc">
                        <p class="ml-0">
                        <div class="desc">
                            <p class="ml-0">Nous sommes fiers de vous offrir un environnement stimulant et accueillant pour vous aider à atteindre vos objectifs de condition physique. ! </p>
                        </div>! </p>
                    </div>
                </div>
            </div>
        </div>
    </section> <br>


    <div class="container-md">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="title"><span>PLANIFICATION </span>DE LA SEMAINE</h2>
                    <div class="desc">
                        <p>Nous proposons une large sélection de cours de remise en forme pour tous les goûts <br>et tous les niveaux de conditions physiques, dispensés par des instructeurs certifés et expérimentés.</p>
                    </div>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="bg-primary text-white">Jour</th>
                    <th scope="col" class="bg-warning text-white">Heure de cours</th>
                    <th scope="col" class="bg-warning text-white">Cours</th>
                    <th scope="col" class="bg-warning text-white">Entraîneur</th>
                </tr>
            </thead>
            <tbody>
                @foreach($planifications->groupBy('jour') as $jour => $planificationsJour)
                <tr>
                    <td class="bg-light text-center align-middle" rowspan="{{ count($planificationsJour) }}"><strong>{{ ucfirst($jour) }}</strong></td>
                    @foreach($planificationsJour as $key => $planification)
                    @if($key > 0)
                <tr>
                    @endif
                    <td class="text-center align-middle text-dark"><strong><a href="{{ route('abonnements') }}">{{ $planification->heure_debut }} - {{ $planification->heure_fin }}</a></strong></td>
                    <td class="text-center align-middle">{{ $planification->cours->nom_cours }}</td>
                    <td class="text-center align-middle">

                        <div class="me-2">{{ $planification->entraineur->user->nom }} {{ $planification->entraineur->user->prenom }}</div>
                        <div><img src="{{ asset('storage/' . $planification->entraineur->image) }}" alt="{{ $planification->entraineur->user->nom }}" style="width: 50px;"></div>
    </div>

    </td>

    </tr>
    @endforeach
    </tr>
    @endforeach
    </tbody>

    </table>
    </div>

    </div>
    <section class="service-area service-default-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="title"><span>COURS </span>QUE NOUS OFFRONS</h2>
                        <div class="desc">
                            <p>Nous proposons une large sélection de cours de remise en forme pour tous les goûts <br>et tous les niveaux de conditions physiques, dispensés par des instructeurs certifés et expérimentés.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="1100">
                <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <!-- Start Service Item -->
                            <div class="service-item">
                                <div class="inner-content">
                                    <div class="thumb">
                                        <a href="{{ route('abonnements') }}"><span><img src="{{url ('img/service/1.jpg')}}" alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="{{ route('abonnements') }}">{{ $cours[0]->nom_cours }}
                                            </a></h4>
                                        <h4 class="class-time"></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <!-- Start Service Item -->
                            <div class="service-item">
                                <div class="inner-content">
                                    <div class="thumb">
                                        <a href="{{ route('abonnements') }}"><span><img src="{{url ('img/service/6.jpg')}}" alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="{{ route('abonnements') }}">{{ $cours[1]->nom_cours }}</a></h4>
                                        <h4 class="class-time"></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <!-- Start Service Item -->
                            <div class="service-item">
                                <div class="inner-content">
                                    <div class="thumb">
                                        <a href="{{ route('abonnements') }}"><span><img src="{{url ('img/service/4.jpg')}}" alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="{{ route('abonnements') }}">{{ $cours[2]->nom_cours }}</a></h4>
                                        <h4 class="class-time"></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-lg-4">

                            <div class="service-item">
                                <div class="inner-content">
                                    <div class="thumb">
                                        <a href="{{ route('abonnements') }}"><span><img src="{{url ('img/service/2.jpg')}}" alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="{{ route('abonnements') }}">{{ $cours[3]->nom_cours }}</a></h4>
                                        <h4 class="class-time"></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-lg-4">

                            <div class="service-item">
                                <div class="inner-content">
                                    <div class="thumb">
                                        <a href="{{ route('abonnements') }}"><span><img src="{{url ('img/service/b.jpg')}}" alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="{{ route('abonnements') }}">{{ $cours[4]->nom_cours }}</a></h4>
                                        <h4 class="class-time"></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-lg-4">

                            <div class="service-item">
                                <div class="inner-content">
                                    <div class="thumb">
                                        <a href="{{ route('abonnements') }}"><span><img src=" {{url ('img/service/s.jpg')}}" alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="{{ route('abonnements') }}">{{ $cours[5]->nom_cours }}</a></h4>
                                        <h4 class="class-time"></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            text-align: center;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        th {
            background-color: #003366;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;

        }

        td,
        th {
            padding: 12px;
            text-align: center;
            font-size: 18px;
        }
    </style>
    <script>
        let trs = document.querySelectorAll('tbody tr');
        for (let i = 0; i < trs.length; i++) {
            trs[i].addEventListener('mouseover', function() {
                this.classList.add('hover');
            });
            trs[i].addEventListener('mouseout', function() {
                this.classList.remove('hover');
            });
        }
    </script>

</main>



@endsection