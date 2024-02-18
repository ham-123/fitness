<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Connection</title>

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



</head>

<body>

    <style>
        body {
            background-image: url("img/about/3.jpg");
        }
    </style>

    <section class="text-center text-lg-start">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            "> @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Connectez-vous à votre compte</h2>
                            <form class="login-form-wrapper" id="login-form" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-outline mb-4">
                                    <label for="email" class="form-label mt-15">Email </label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label for="password" class="form-label mt-15">Mot de passe </label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center" style="margin-right: 50px;">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Se rappeller de moi') }}</span>
                                    </label>
                                    <a class=" underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-auto" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0 form-group-info">
                                        <button class="btn btn-theme btn-black mt-3" type="submit" style="border-radius: 0; color: white;">SE CONNECTER</button>
                                    </div>
                                </div>

                                <br>
                                <div>
                                    <div class="form-group">
                                        <p>Vous n’avez pas de compte ?<a href="/register"> S’enregistrer</a></p>
                                        @if (Route::has('password.request'))

                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="img/blog/ado.jpg" class="w-100 rounded-4 shadow-4" alt="" />
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>


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
    </div>
</body>


</html>