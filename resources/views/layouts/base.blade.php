<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ url ('img/favicon.ico')}}" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:400" rel="stylesheet">
    <link href="{{ url('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ url('css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{ url('css/pe-icon-7-stroke.min.css')}}" rel="stylesheet" />
    <link href="{{ url('css/animate.css')}}" rel="stylesheet" />
    <link href="{{ url('css/aos.css')}}" rel="stylesheet" />
    <link href="{{ url('css/jquery.fancybox.min.css')}}" rel="stylesheet" />
    <link href="{{ url('css/slicknav.css')}}" rel="stylesheet" />
    <link href="{{ url('css/swiper.min.css')}}" rel="stylesheet" />
    <link href="{{ url('css/slick.css')}}" rel="stylesheet" />
    <link href="{{ url('css/style.css')}}" rel="stylesheet" />
    @livewireStyles
</head>

<body>
    <div class="wrapper page-blog-wrapper">

        <!--== Start Preloader Content ==-->


        <!--== End Preloader Content ==-->

       <header class="header-area header-default header-transparent header-style sticky-header">
    <div class="container-fluid">
      <div class="row row-gutter-0 align-items-center">
        <div class="col-4 col-xs-3 col-sm-3 col-md-3 col-xl-3">
          <div class="header-logo-area">
          <a href="{{ route('home') }}">
                                <img class="logo-main" src="{{url ('img/logo-light.png')}}" alt="Logo" />
                                <img class="logo-light" src="{{url ('img/logo-light.png')}}" alt="Logo" />
                            </a>
          </div>
        </div>
        <div class="col-8 col-sm-9 col-xl-9">
          <div class="header-align">
            <div class="header-navigation-area d-none d-xl-block">
              <ul class="main-menu nav position-relative">
              <li><a href="{{ route('home') }}">Acceuil</a></li>
              <li><a href="{{ route('planifications') }}">Plannification</a></li>
              <li><a href="{{ route('equipements') }}">Equipements</a></li>
              <li><a href="{{ route('abonnements') }}">Abonnements</a></li>
              <li><a href="{{ route('entraineurs') }}">Entraineurs</a></li>
              <li><a href="{{ route('galleries') }}">Gallery</a></li>
              <li><a href="{{ route('contact') }}">Contacts</a></li>
               
              </ul>
            </div>
            <div class="header-action-area">
              <div class="header-action-cart d-none d-xl-block">
              <button class="btn-cart cart-icon">
                                        <a href="{{ route('profile.edit') }}" class="text-truncate" style="font-size: 20px;">
                                            <i class="pe-7s-user" style="color: white; font-size: 30px;"></i>{{ Auth::user()->prenom }}
                                        </a>
                                        <br> <br>
                                    </button>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button name="logout" type="submit" class="Btn">
                                            <div class="sign">
                                                <svg viewBox="0 0 512 512">
                                                    <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                                                </svg>
                                            </div>
                                            <div class="text">Deconnexion</div>
                                        </button>
                                    </form>
              </div>
              <button class="btn-menu d-xl-none">
                <i class="fa fa-bars"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>





        @yield('content')

        <footer class="footer-area default-style bg-img" data-bg-img="{{ url ('img/photos/bg-f1.png')}}">
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="widget-item mb-sm-30">
                                <div class="about-widget">
                                    <a class="footer-logo" href="index.html">
                                        <img src="{{ url ('img/logo-light.png')}}" alt="Logo">
                                    </a>
                                    <p>Un esprit sain dans un corps sain</p>
                                    <div class="opening-time">
                                        <h4 class="title">Heures d'ouverture</h4>
                                        <ul>
                                            <li>Lundi - Vendredi: 09h to 20h</li>
                                            <li>Samedi - Dimanche: 07h à 20h</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="widget-item mb-xs-50">
                                <h4>CONTACT INFO</h4>
                                <div class="widget-contact-info">
                                    <div class="contact-info-item">
                                        <div class="icon-box">
                                            <img src="{{ url ('img/icons/1.png')}}" alt="Logo">
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Address</h4>
                                            <p>252B, Central Street Main road Belix Tower, New York, USA</p>
                                        </div>
                                    </div>
                                    <div class="contact-info-item">
                                        <div class="icon-box">
                                            <img src="{{ url ('img/icons/2.png')}}" alt="Logo">
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Phone</h4>
                                            <ul>
                                                <li><a href="tel:// +229 90 78 88 77">+229 90 78 88 77</a></li>
                                                <li><a href="tel://+229 66 58 20 34">+229 66 58 20 34</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="contact-info-item">
                                        <div class="icon-box">
                                            <img src="{{ url ('img/icons/3.png')}}" alt="Logo">
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Web</h4>
                                            <ul>
                                                <li><a href="mailto://info@example.com">info@gym.com</a></li>
                                                <li><a href="index.html">www.example.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="widget-item">
                                <h4>NEWSLETTER</h4>
                                <div class="widget-newsletter">
                                    <p>Abonnez-vous à notre newsletter et recevez les dernières mises à jour des offres, produits et promotions de chaque semaine que nous proposons</p>
                                    <form class="newsletter-form input-btn-group">
                                        <input class="form-control" type="text" placeholder="Email here">
                                        <button class="btn btn-theme" type="button"><i class="fa fa-paper-plane-o"></i></button>
                                    </form>
                                </div>
                                <div class="widget-social-icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-content">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="widget-copyright text-center">
                                    <p><i class="fa fa-copyright"></i> 2023 Tout droits reservés <i class="fa fa-heart"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!--== Scroll Top Button ==-->
        <div class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>

        <!--== Start Side Menu ==-->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-inner">
                <div class="off-canvas-overlay d-none"></div>
                <!-- Start Off Canvas Content Wrapper -->
                <div class="off-canvas-content">
                    <!-- Off Canvas Header -->
                    <div class="off-canvas-header">
                        <div class="close-action">
                            <button class="btn-close"><i class="pe-7s-close"></i></button>
                        </div>
                    </div>

                    <div class="off-canvas-item">
                        <!-- Start Mobile Menu Wrapper -->
                        <div class="res-mobile-menu">
                            <!-- Note Content Auto Generate By Jquery From Main Menu -->
                        </div>
                        <!-- End Mobile Menu Wrapper -->
                    </div>
                    <!-- Off Canvas Footer -->
                    <div class="off-canvas-footer"></div>
                </div>
                <!-- End Off Canvas Content Wrapper -->
            </div>
        </aside>
        <!--== End Side Menu ==-->
    </div>

    <style>
        .Btn {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 45px;
            height: 45px;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition-duration: .3s;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
            background-color: rgb(255, 65, 65);
        }

        /* plus sign */
        .sign {
            width: 100%;
            transition-duration: .3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sign svg {
            width: 17px;
        }

        .sign svg path {
            fill: white;
        }

        /* text */
        .text {
            position: absolute;
            right: 0%;
            width: 0%;
            opacity: 0;
            color: white;
            font-size: 0.6em;
            font-weight: 600;
            transition-duration: .3s;

        }

        /* hover effect on button width */
        .Btn:hover {
            width: 125px;
            border-radius: 40px;
            transition-duration: .3s;
        }

        .Btn:hover .sign {
            width: 30%;
            transition-duration: .3s;
            padding-left: 20px;
        }

        /* hover effect button's text */
        .Btn:hover .text {
            opacity: 1;
            width: 70%;
            transition-duration: .3s;
            padding-right: 10px;
        }

        /* button click effect*/
        .Btn:active {
            transform: translate(2px, 2px);
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
    <script src="{{ url('js/modernizr.js')}}"></script>
    <script src="{{ url('js/jquery-main.js')}}"></script>
    <script src="{{ url('js/jquery-migrate.js')}}"></script>
    <script src="{{ url('js/popper.min.js')}}"></script>
    <script src="{{ url('js/bootstrap.min.js')}}"></script>
    <script src="{{ url('js/jquery.appear.js')}}"></script>
    <script src="{{ url('js/swiper.min.js')}}"></script>
    <script src="{{ url('js/fancybox.min.js')}}"></script>
    <script src="{{ url('js/aos.min.js')}}"></script>
    <script src="{{ url('js/jquery.slicknav.js')}}"></script>
    <script src="{{ url('js/jquery.countdown.min.js')}}"></script>
    <script src="{{ url('js/tippy.all.min.js')}}"></script>
    <script src="{{ url('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ url('js/vivus.js')}}"></script>
    <script src="{{ url('js/parallax.min.js')}}"></script>
    <script src="{{ url('js/slick.min.js')}}"></script>
    <script src="{{url('js/wow.min.js')}}"></script>
    <script src="{{ url('js/jquery-zoom.min.js')}}"></script>
    <script src="{{ url('js/custom.js')}}"></script>
    <script src="https://cdn.kkiapay.me/k.js"></script>
    <script src="{{ url('js/qrcode.js') }}"></script>

    @livewireScripts
</body>


</html>