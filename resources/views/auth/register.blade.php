<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Inscription</title>

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
  
</style>

    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">
        <style>
            .background-radial-gradient {
                background-color: hsl(218, 41%, 15%);
                background-image: radial-gradient(650px circle at 0% 0%,
                        hsl(218, 41%, 35%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%),
                    radial-gradient(1250px circle at 100% 100%,
                        hsl(218, 41%, 45%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%);
            }

            #radius-shape-1 {
                height: 220px;
                width: 220px;
                top: -60px;
                left: -130px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
            }

            #radius-shape-2 {
                border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                bottom: -60px;
                right: -110px;
                width: 300px;
                height: 300px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
            }

            .bg-glass {
                background-color: hsla(0, 0%, 100%, 0.9) !important;
                backdrop-filter: saturate(200%) blur(25px);
            }
        </style>

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 transparent"  >
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Pierre <br />
                        <span style="color: hsl(218, 81%, 75%)">De Coubertin</span>
                    </h1>
                    <h4 class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        "Le sport va chercher la peur pour la dominer, la fatigue pour en triompher, la difficulté pour la vaincre."
                    </h4>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif
                            <form class="login-form-wrapper" id="register-form" action="{{ route('register') }}" method="POST">
                                <h2 class="form-title">INSCRIPTION</h2>
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nom" class="form-label">Nom </label>
                                                    <input type="text" class="form-control" id="nom" name="nom" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="prenom" class="form-label">Prénom </label>
                                                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="email" class="form-label ">Email </label>
                                                    <input type="email" class="form-control" id="email" name="email" required>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="sexe" class="form-label">Sexe </label>
                                                    <select class="form-control" id="sexe" name="sexe" required>
                                                        <option value="homme">Homme</option>
                                                        <option value="femme">Femme</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="age" class="form-label">Age </label>
                                                    <input type="number" class="form-control" id="age" name="age" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="adresse" class="form-label">Adresse </label>
                                                    <input type="text" class="form-control" id="adresse" name="adresse" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="tel" class="form-label">Téléphone </label>
                                                    <input type="text" class="form-control" id="tel" name="tel" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="type_client" class="form-label">Type de client </label>
                                                    <select class="form-control" id="type_client" name="type_client" required>
                                                        <option value="etudiant">Etudiant</option>
                                                        <option value="professionnel">Professionnel</option>
                                                        <option value="autre">Autre</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="password" class="form-label ">Mot de passe </label>
                                                    <input type="password" class="form-control" id="password" name="password" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-0">
                                                    <label for="password" class="form-label ">Confimer le mot de passe</label>
                                                    <input type="password" class="form-control" id="password" name="password_confirmation" required>
                                                </div>
                                            </div> <br>
                                            <div class="col-md-12">
 <div class="form-group mb-0 form-group-info">
 <button class="btn btn-theme btn-black mt-3" type="submit" style="border-radius: 0; color: white;">S'INSCRIRE</button>
 </div>
</div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <a class="text-decoration-underline" href="/login">J'ai déja un compte</a>
                                                </div>
                                            </div>
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <a href="/welcome"> <i class="pe-7s-left-arrow display-4"></i></a>
        </div>
        </div>

    </section>
    <!-- Section: Design Block -->


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