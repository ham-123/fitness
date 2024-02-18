@extends('layouts.base')
@section('title')
Acceuil
@endsection
@section('content')

<div class="preloader-wrap">
           
        </div>

<main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area slider-default">
        <div class="home-slider-content">
            <div class="swiper-container home-slider-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- Start Slide Item -->
                        <div class="home-slider-item">
                            <div class="bg-thumb bg-img" data-bg-img="{{url ('img/slider/1.jpg')}}"></div>
                            <div class="slider-content-area">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-sm-8 offset-sm-2 col-lg-5 offset-lg-0">
                                            <div class="content">
                                                <div class="inner-content">
                                                    <div class="icon">
                                                        <img src="{{url ('img/icons/g1.png')}}" alt="Image">
                                                    </div>
                                                    <h2>FORCE TEMPS FORME</h2>
                                                    <p>La gym est très importante pour maintenir la santé.Des équipements de la technologie et une ambiance cosy à des prix abordables et attractifs.N'attendez pas et sauter le pas.<br>
                                                        Notre équipes se réjouis déjà de vous retrouver et de vous aider et atteindre vos objectifs.</p>
                                                    <a href="{{ route('contact') }}" class="btn-theme">Contactez-Nous</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-lg-7">
                                            <div class="slider-thumb">
                                                <img src="{{url ('img/slider/h-1.png')}}" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Slide Item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Features Area Wrapper ==-->

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <section class="features-area features-default-area">
        <div class="container-fluid p-0">
            <div class="row row-gutter-0">
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Featured Item -->
                    <div class="featured-item">
                        <div class="featured-thumb">
                            <img src="{{url ('img/class/f1.jpg')}}" alt="Image">
                        </div>
                        <div class="featured-info">
                            <h4>Lifting du dos Dumble</h4>
                            <h5>3 SETS, <span>5 MINUTES</span></h5>
                        </div>
                    </div>
                    <!-- End Featured Item -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Featured Item -->
                    <div class="featured-item">
                        <div class="featured-thumb">
                            <img src="{{url ('img/class/f2.jpg')}}" alt="Image">
                        </div>
                        <div class="featured-info">
                            <h4>Musculation</h4>
                            <h5>4 SETS, <span>3 MINUTES</span></h5>
                        </div>
                    </div>
                    <!-- End Featured Item -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Featured Item -->
                    <div class="featured-item">
                        <div class="featured-thumb">
                            <img src="{{url ('img/class/f3.jpg')}}" alt="Image">
                        </div>
                        <div class="featured-info">
                            <h4>Abdos<br>Aptitude</h4>
                            <h5>2 SETS, <span>3 MINUTES</span></h5>
                        </div>
                    </div>
                    <!-- End Featured Item -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Featured Item -->
                    <div class="featured-item">
                        <div class="featured-thumb">
                            <img src="{{url ('img/class/f4.jpg')}}" alt="Image">
                        </div>
                        <div class="featured-info">
                            <h4>Levage de cordes</h4>
                            <h5>5 SETS, <span>3 MINUTES</span></h5>
                        </div>
                    </div>
                    <!-- End Featured Item -->
                </div>
            </div>
        </div>
    </section>
    <!--== End Features Area Wrapper ==-->

    <!--== Start About Area ==-->
    <section class="about-area about-default-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-7 order-1 order-lg-0">
                    <div class="thumb" data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{url ('img/about/1.png')}}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-5 col-xl-5 order-0 order-lg-1">
                    <div class="about-content">
                        <div class="section-title stitle-style2">
                            <div class="subtitle">SCIENCE 2023</div>
                            <h2 class="title">MEILLEURS <span>EQUIPEMENTS <br>& ENTRAÎNEURS</span> DE MISE EN FORME</h2>
                            <div class="desc">
                                <p>En optant pour notre salle de gym Zymzoo vous n'êtes jamais livré à vous-même et vous bénéficiez d'un réel accompagnement.Nos coatchs sportifs sont tous diplômés d'état et mettant en oeuvre pour vous proposez un acccompagnement sur mesures.<br><br>
                                    Tous nos coatchs on la même ambition: vous aider à atteindre vos objectifs. Ce sont de véritables experts qui seront heureux de partager avec vous leurs savoir-faire et leurs conseils</p>
                            </div>
                        </div>
                        <div class="inner-content">
                            <div class="about-list">
                                <ul>
                                    <li>Développer la puissance aérobie</li>
                                    <li>Structure corporelle solide</li>
                                    <li>Démarrer votre mémoire</li>
                                    <li>Procurer un sommeil réparateur</li>
                                </ul>
                            </div>
                            <div class="inline-style">
                                <a class="btn btn-theme" href="classes.html">LET’S START</a>
                                <div class="btn-play-box">
                                    <a class="btn-play play-video-popup" href="https://www.youtube.com/watch?v=MLpWrANjFbI"><img src="{{url ('img/icons/play-btn1.png')}}" alt="Image">INTRO VIDEO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-group">
            <div class="shape-img1">
                <img src="{{url ('img/photos/shape1.png')}}" alt="Image">
            </div>
        </div>
    </section>
    <!--== End About Area ==-->

    <!--== Start Features Area Wrapper ==-->
    <section class="features-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-columns-wrap">
                        <div class="featured-items-style2 bg-img" data-bg-img="{{url ('img/photos/bg-f2.jpg')}}">
                            <div class="row row-gutter-0">
                                <div class="col-md-6">
                                    <!-- Start Featured Item -->
                                    <div class="featured-item">
                                        <div class="featured-icon">
                                            <img src="{{url ('img/icons/f1.png')}}" alt="Image">
                                        </div>
                                        <div class="featured-info">
                                            <h4>Meilleurs Formations</h4>
                                            <p>NOtre site propose des programmes d'entraînement efficaces afin de vous permettre d'atteindre vos objectifs de remise en forme et de bien-être.</p>
                                        </div>
                                    </div>
                                    <!-- End Featured Item -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Start Featured Item -->
                                    <div class="featured-item">
                                        <div class="featured-icon">
                                            <img src="{{url ('img/icons/f2.png')}}" alt="Image">
                                        </div>
                                        <div class="featured-info">
                                            <h4>Instructeurs qualifiés</h4>
                                            <p>Nos instructeus de qualités passionnés par l'aide auxclients pour atteindre leurs objectifs de remise en forme et de bien-être.</p>
                                        </div>
                                    </div>
                                    <!-- End Featured Item -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Start Featured Item -->
                                    <div class="featured-item">
                                        <div class="featured-icon">
                                            <img src="{{url ('img/icons/f3.png')}}" alt="Image">
                                        </div>
                                        <div class="featured-info">
                                            <h4>Equipments de Qualités</h4>
                                            <p class="m-0">Nous offrons une grande variété d'équipements de qualités pour une bonne atteinte de vos objectifs de forme et de bien-être. </p>
                                        </div>
                                    </div>
                                    <!-- End Featured Item -->
                                </div>

                            </div>
                        </div>
                        <div class="featured-discount-item">
                            <div class="thumb" data-bg-img="{{url ('img/photos/f1.jpg')}}"></div>
                            <div class="content">
                                <h2>35%</h2>
                                <h3>Rabais</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Features Area Wrapper ==-->

    <!--== Start Service Area ==-->
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
                                        <a href="class-details.html"><span><img src="{{url ('img/service/1.jpg')}}" alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="class-details.html">{{ $cours[0]->nom_cours }}
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
                                        <a href="class-details.html"><span><img src="{{url ('img/service/6.jpg')}}" alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="class-details.html">{{ $cours[1]->nom_cours }}</a></h4>
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
                                        <a href="class-details.html"><span><img src="{{url ('img/service/4.jpg')}}" alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="class-details.html">{{ $cours[2]->nom_cours }}</a></h4>
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
                                        <a href="class-details.html"><span><img src="{{url ('img/service/2.jpg')}}" alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="class-details.html">{{ $cours[3]->nom_cours }}</a></h4>
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
                                        <a href="class-details.html"><span><img src="{{url ('img/service/b.jpg')}}" alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="class-details.html">{{ $cours[4]->nom_cours }}</a></h4>
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
                                        <a href="class-details.html"><span><img src=" {{url ('img/service/s.jpg')}}" alt="Image"></span></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="class-details.html">{{ $cours[5]->nom_cours }}</a></h4>
                                        <h4 class="class-time"></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Service Area ==-->

    <!--== Start Service Area ==-->
    <section class="classical-workout-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="classical-workout-wrap bg-img" data-bg-img="{{url ('img/photos/workout.bg2.jpg')}}">
                        <div class="column-left bg-img" data-bg-img="{{url ('photos/workout.bg1.png')}}" data-aos="fade-right" data-aos-duration="1000">
                            <div class="content">
                                <h2 class="title">ENTRAINEMENT CLASSIQUE</h2>
                                <p>Nous proposons une grande variété d'entrainements classiques pour vous aider toujours à atteindre vos objectifs.Notre équipements de musculation et de cardio est la plus haute qualifiés ainsi que nos instructeurs pour vous guidez à travers chaque étape à suivre pour un résultat parfait et agréable.</p>
                                <a class="btn-link" href="{{ route('planifications') }}">VOIR L'HORAIRE</a>
                            </div>
                        </div>
                        <div class="shape-style" data-aos="fade-right" data-aos-duration="1000"></div>
                        <div class="column-right">
                            <div class="workout-items">
                                <div class="workout-item">
                                    <div class="thumb">
                                        <img src="{{url ('img/photos/workout1.png')}}" alt="Image">
                                    </div>
                                    <div class="content">
                                        <h3>01.</h3>
                                    </div>
                                </div>
                                <div class="workout-item">
                                    <div class="thumb">
                                        <img src=" {{url ('img/photos/workout2.png')}}" alt="Image">
                                    </div>
                                    <div class="content">
                                        <h3>02.</h3>
                                    </div>
                                </div>
                                <div class="workout-item mb-0 mb-xxs-40">
                                    <div class="thumb">
                                        <img src=" {{url ('img/photos/workout3.png')}}" alt="Image">
                                    </div>
                                    <div class="content">
                                        <h3>03.</h3>
                                    </div>
                                </div>
                                <div class="workout-item mb-0">
                                    <div class="thumb">
                                        <img src="{{url ('img/photos/workout4.png')}}" alt="Image">
                                    </div>
                                    <div class="content">
                                        <h3>04.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Service Area ==-->

    <!--== Start Gallery Slider Area Wrapper ==-->
    <section class="gallery-area gallery-default-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4 pr-0">
                    <div class="section-title stitle-style2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="subtitle">GALERIE DE MISE EN FORME</div>
                        <h2 class="title">CROYEZ EN VOUS SOYEZ EN FORME <br>ET EN MEILLEURE SANTÉ</h2>
                    </div>
                </div>
                <div class="col-md-6 col-xl-8 d-none d-md-block text-center text-md-end">
                    <a href="{{ route('galleries') }}" class="btn-theme">VOIR PLUS</a>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery-slider-content">
                        <div class="swiper-container gallery-slider-container">
                            <div class="swiper-wrapper gallery-slider">
                                <div class="swiper-slide">
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <a class="lightbox-image" data-fancybox="gallery" href="()"><img src="{{url ('img/gallery/g1.png')}}" alt="Image"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <a class="lightbox-image" data-fancybox="gallery" href="()"><img src="{{url ('img/gallery/g2.png')}}" alt="Image"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <a class="lightbox-image" data-fancybox="gallery" href="()"><img src="{{url ('img/gallery/g3.png')}}" alt="Image"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-item">
                                        <div class="thumb">
                                            <a class="lightbox-image" data-fancybox="gallery" href="()"><img src="{{url ('img/gallery/g4.png')}}" alt="Image"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Gallery Slider Area Wrapper ==-->

    <!--== Start Team Area ==-->
    <section class="team-area team-default-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="title">INSTRUCTEURS <span>PROFESSIONNELS</span></h2>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="1100">
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Team Item -->
                    <div class="team-item mb-md-30">
                        <div class="team-member">
                            <div class="thumb">
                                <a href="team-details.html"><img src="{{url ('img/team/1.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="content">
                                <div class="member-info">
                                    <h4 class="name"><a href="team-details.html">JOHN Smith</a></h4>
                                    <h6 class="designation">Musculation</h6>
                                    <div class="social-icons">
                                        <a href="#/"><i class="fa fa-facebook icon"></i></a>
                                        <a href="#/"><i class="fa fa-phone icon"></i></a>
                                        <a href="#/"><i class="fa fa-instagram icon"></i></a>
                                        <a href="#/"><i class="fa fa-twitter icon"></i></a>
                                    </div>
                                    <div class="team-footer">
                                        <a class="btn" href="{{ route('entraineurs') }}">VOIR LE PROFIL</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Item -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Team Item -->
                    <div class="team-item mb-md-30">
                        <div class="team-member">
                            <div class="thumb">
                                <a href="team-details.html"><img src="{{url ('img/team/2.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="content">
                                <div class="member-info">
                                    <h4 class="name"><a href="team-details.html">DANIEL Cathy-</a></h4>
                                    <h6 class="designation">Pilate</h6>
                                    <div class="social-icons">
                                        <a href="#/"><i class="fa fa-facebook icon"></i></a>
                                        <a href="#/"><i class="fa fa-phone icon"></i></a>
                                        <a href="#/"><i class="fa fa-instagram icon"></i></a>
                                        <a href="#/"><i class="fa fa-twitter icon"></i></a>
                                    </div>
                                    <div class="team-footer">
                                        <a class="btn" href="{{ route('entraineurs') }}">VOIR PROFILE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Item -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Team Item -->
                    <div class="team-item mb-xs-30">
                        <div class="team-member">
                            <div class="thumb">
                                <a href="team-details.html"><img src="{{url ('img/team/3.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="content">
                                <div class="member-info">
                                    <h4 class="name"><a href="team-details.html">WILSON Brian</a></h4>
                                    <h6 class="designation">Cardio</h6>
                                    <div class="social-icons">
                                        <a href="#/"><i class="fa fa-facebook icon"></i></a>
                                        <a href="#/"><i class="fa fa-phone icon"></i></a>
                                        <a href="#/"><i class="fa fa-instagram icon"></i></a>
                                        <a href="#/"><i class="fa fa-twitter icon"></i></a>
                                    </div>
                                    <div class="team-footer">
                                        <a class="btn" href="{{ route('entraineurs') }}">VOIR PROFIL</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Item -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Start Team Item -->
                    <div class="team-item">
                        <div class="team-member">
                            <div class="thumb">
                                <a href="team-details.html"><img src="{{url ('img/team/4.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="content">
                                <div class="member-info">
                                    <h4 class="name"><a href="team-details.html">CHEN Lisa</a></h4>
                                    <h6 class="designation">Yoga</h6>
                                    <div class="social-icons">
                                        <a href="#/"><i class="fa fa-facebook icon"></i></a>
                                        <a href="#/"><i class="fa fa-phone icon"></i></a>
                                        <a href="#/"><i class="fa fa-instagram icon"></i></a>
                                        <a href="#/"><i class="fa fa-twitter icon"></i></a>
                                    </div>
                                    <div class="team-footer">
                                        <a class="btn" href="{{ route('entraineurs') }}">VOIR PROFIL</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Team Item -->
                </div>
            </div>
        </div>
    </section>
    <!--== End Team Area ==-->

    <!--== Start Testimonial Area ==-->
    <section class="testimonial-area testimonial-default-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title stitle-style2">
                        <div class="subtitle">TEMOIGNAGES</div>
                        <h2 class="title"><span><br></span></h2>
                    </div>
                    <div class="testimonial-content" data-aos="fade-up" data-aos-duration="1000">
                        <div class="testimonial-slider-content">
                            <div class="swiper-container testimonial-slider-container">
                                <div class="swiper-wrapper testimonial-slider">
                                    <div class="swiper-slide testimonial-single">
                                        <div class="client-content">
                                            <p>“Depuis que j'ai commencé à frequenter cette salle de gym,j'ai constaté une amélioration significative de ma condition physique.Les instructeurs sont compétents et passionnés,l'équipement est de qualité et l'ambiance est conviviable” </p>
                                            <img class="quote-icon" src="{{url ('img/icons/quote-icon.jpg')}}" alt="Icon">
                                        </div>
                                        <div class="client-info">
                                            <h4 class="name">Paul Boni</h4>
                                            <h6 class="designation"></h6>
                                        </div>
                                    </div>
                                    <div class="swiper-slide testimonial-single">
                                        <div class="client-content">
                                            <p>“J'ai essayé plusieurs salles de gym avant de trouver celle-ci, et je dois dire que c'est de loin la meilleure. Les cours sont variés et stimulants, l'équipement est bien entretenu et les entraîneurs sont motivants et encourageants.”</p>
                                            <img class="quote-icon" src="{{url ('img/icons/quote-icon.jpg')}}" alt="Icon">
                                        </div>
                                        <div class="client-info">
                                            <h4 class="name">Marc AGOSSOU</h4>
                                        </div>
                                    </div>
                                    <div class="swiper-slide testimonial-single">
                                        <div class="client-content">
                                            <p>“J'ai été impresionnée par la qualité de cette salle de gym dès ma première visite.Les équipements sont modernes et bien entendus, les instructeurs sont sympathiques et compétents, et les cours sont stimulants et variés.”</p>
                                            <img class="quote-icon" src="{{url ('img/icons/quote-icon.jpg')}}" alt="Icon">
                                        </div>
                                        <div class="client-info">
                                            <h4 class="name">Adjidath Aboudou </h4>

                                        </div>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-btn-wrap">
                                    <div class="swiper-btn-prev"><i class="fa fa-angle-left"></i></div>
                                    <div class="swiper-btn-next"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bmi-calc-form bg-img" data-bg-img="{{url ('img/testimonial/1.jpg')}}">
                        <div class="section-title text-center mt-0">
                            <h2 class="title"><span>CALCULATEUR IMC</span></h2>
                            <div class="desc">
                                <p>L'IMC est un guide fiable pour estimer la plage de poids santé en fonction de la taille, du poids et de l'âge</p>
                            </div>
                        </div>
                        <form action="#/">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Taille / cm">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Poids / kg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Age">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control form-select" aria-label="gender select example">
                                            <option selected>Genre</option>
                                            <option value="1">Homme</option>
                                            <option value="2">Femme</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control form-select" aria-label="activity select example">
                                            <option selected>Sélectionnez un facteur d'activité</option>
                                            <option value="1">Un</option>
                                            <option value="2">Deux</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="bmi-calc-form-footer">
                                        <div class="form-group mb-0">
                                            <button class="btn btn-theme" type="button">CALCULER</button>
                                        </div>
                                        <div class="bmi-calc-result">
                                            <input class="form-control" type="text" placeholder="0.0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-group">
            <div class="shape-img2">
                <img src="{{url ('img/photos/shape1.png')}}" alt="Image">
            </div>
        </div>
    </section>

    <section class="blog-area blog-default-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title">DERNIER ARTICLRE <span>DE BLOG</span></h2>
                        <div class="desc">
                            <p>"Le sport va chasser la peur pour la dominer, la fatigue pour en triompher, la dificultée pour la vaincre.<br> -Pierre de Coubertin</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-md-6 col-lg-4">
                    <div class="post-item mb-md-30">
                        <div class="thumb">
                            <a href="blog-details.html"><img src="{{url ('img/blog/1.jpg')}}" alt="Image"></a>
                        </div>
                        <div class="content">
                            <div class="meta">
                                <a class="category" href="blog.html"><i class="fa fa-tags icon"></i><span> APTITUDE</span></a>
                                <a class="post-date" href="blog.html"><i class="fa fa-calendar icon"></i><span> 05 MAY, 2023</span></a>
                            </div>
                            <h4 class="title">
                                <a href="blog-details.html">Un entraînement parfait est le moyen de façonner votre corps et votre esprit</a>
                            </h4>
                            <p>La salle de sport est très importante pour maintenir notre santé en pleine forme</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="post-item mb-md-30">
                        <div class="thumb">
                            <a href="blog-details.html"><img src="{{url ('img/blog/2.jpg')}}" alt="Image"></a>
                        </div>
                        <div class="content">
                            <div class="meta">
                                <a class="category" href="blog.html"><i class="fa fa-tags icon"></i><span> YOGA</span></a>
                                <a class="post-date" href="blog.html"><i class="fa fa-calendar icon"></i><span> 04 mAI, 2023</span></a>
                            </div>
                            <h4 class="title">
                                <a href="blog-details.html">Le YOGA est important pour le rafraîchissement du corps et de l'esprit</a>
                            </h4>
                            <p>La salle de sport est très importante pour maintenir notre santé en pleine forme</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-4">

                    <div class="post-item">
                        <div class="thumb">
                            <a href="blog-details.html"><img src="{{url ('img/blog/3.jpg')}}" alt="Image"></a>
                        </div>
                        <div class="content">
                            <div class="meta">
                                <a class="category" href="blog.html"><i class="fa fa-tags icon"></i><span> MUSCULATION</span></a>
                                <a class="post-date" href="blog.html"><i class="fa fa-calendar icon"></i><span> 02 MAY, 2023</span></a>
                            </div>
                            <h4 class="title">
                                <a href="blog-details.html">Donner plus de temps à l'entraînement pour une bonne forme que vous voulez </a>
                            </h4>
                            <p>La salle de sport est très importante pour maintenir notre santé en pleine forme</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>


@endsection