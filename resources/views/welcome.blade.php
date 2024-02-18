
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Bienvenue</title>

  <link rel="shortcut icon" href="{{ url('img/favicon.ico')}}" type="image/x-icon" />

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

  <div class="wrapper">

    <div class="preloader-wrap">
      <div class="preloader">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>

    <header class="header-area header-default header-transparent header-style sticky-header mr-3">
  <div class="container-lg">
    <div class="row row-gutter-0 align-items-center d-flex">
      <div class="col-2 col-xs-3 col-sm-3 col-md-3 col-xl-3 ">
        <div class="header-logo-area">
          <a href="index.html">
            <img class="logo-main" src="{{url ('img/logo-light.png')}}" alt="Logo" />
            <img class="logo-light" src="{{url ('img/logo-light.png')}}" alt="Logo" />
          </a>
        </div>
      </div>
      <div class="col-10 col-xs-9 col-sm-9 col-md-9 col-xl-9 d-flex align-items-center justify-content-end">
        <div class="header-button-area d-flex align-items-center">
          <a class="btn btn-outline-warning " href="/login" style="margin-right: 20px;">Se connecter</a>
          
          <a class="btn btn-warning btn-white " href="/register">S'inscrire</a>

          <button id="toggleDarkMode">
  <i class="fas fa-moon"></i>
</button>
        </div>
      </div>
    </div>
  </div>
</header>





    <section class="page-title-area bg-img" data-bg-img="{{ url('img/photos/bg-page2.jpg')}}">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content content-style2">
              <h2 class="title"><span>BIENVENUE!</span></h2>
              <div class="desc">
                <p class="ml-0">Nous sommes fiers de vous offrir un environnement stimulant et accueillant pour vous aider à atteindre vos objectifs de condition physique. Notre équipe d'entraîneurs expérimentés est là pour vous aider à concevoir un programme d'entraînement personnalisé et à vous accompagner tout au long de votre parcours. Notre équipement de pointe et nos installations modernes sont conçus pour vous offrir une expérience de fitness exceptionnelle. Que vous soyez débutant ou athlète confirmé, nous avons tout ce qu'il vous faut pour vous aider à atteindre vos objectifs. Rejoignez-nous dès maintenant et commencez votre voyage vers une vie plus saine et plus active ! </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="team-area team-inner-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-center">
              <h2 class="title"><span> QUELQUES </span> ENTRAINEURS</h2>
              <div class="desc">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="team-item">
              <div class="team-member">
                <div class="thumb">
                  <a href="team-details.html"><img src="{{ url('img/team/1.jpg')}}" alt="Image"></a>
                </div>
                <div class="content">
                  <div class="member-info">
                    <h4 class="name"><a href="team-details.html">Robert Cristopher</a></h4>
                    <h6 class="designation">Bodybuilding Trainer</h6>
                    <div class="social-icons">
                      <a href="#/"><i class="fa fa-facebook icon"></i></a>
                      <a href="#/"><i class="fa fa-phone icon"></i></a>
                      <a href="#/"><i class="fa fa-instagram icon"></i></a>
                      <a href="#/"><i class="fa fa-twitter icon"></i></a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="team-item">
              <div class="team-member">
                <div class="thumb">
                  <a href="team-details.html"><img src="{{ url('img/team/2.jpg')}}" alt="Image"></a>
                </div>
                <div class="content">
                  <div class="member-info">
                    <h4 class="name"><a href="team-details.html">Oliviea Williams</a></h4>
                    <h6 class="designation">Fitness Trainer</h6>
                    <div class="social-icons">
                      <a href="#/"><i class="fa fa-facebook icon"></i></a>
                      <a href="#/"><i class="fa fa-phone icon"></i></a>
                      <a href="#/"><i class="fa fa-instagram icon"></i></a>
                      <a href="#/"><i class="fa fa-twitter icon"></i></a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="team-item">
              <div class="team-member">
                <div class="thumb">
                  <a href="team-details.html"><img src="{{ url('img/team/3.jpg')}}" alt="Image"></a>
                </div>
                <div class="content">
                  <div class="member-info">
                    <h4 class="name"><a href="team-details.html">Nikolus Smith</a></h4>
                    <h6 class="designation">Crossfit Trainer</h6>
                    <div class="social-icons">
                      <a href="#/"><i class="fa fa-facebook icon"></i></a>
                      <a href="#/"><i class="fa fa-phone icon"></i></a>
                      <a href="#/"><i class="fa fa-instagram icon"></i></a>
                      <a href="#/"><i class="fa fa-twitter icon"></i></a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="team-item">
              <div class="team-member">
                <div class="thumb">
                  <a href="team-details.html"><img src="{{ url('img/team/4.jpg')}}" alt="Image"></a>
                </div>
                <div class="content">
                  <div class="member-info">
                    <h4 class="name"><a href="team-details.html">Jenifer Parker</a></h4>
                    <h6 class="designation">Aerobics Instructor</h6>
                    <div class="social-icons">
                      <a href="#/"><i class="fa fa-facebook icon"></i></a>
                      <a href="#/"><i class="fa fa-phone icon"></i></a>
                      <a href="#/"><i class="fa fa-instagram icon"></i></a>
                      <a href="#/"><i class="fa fa-twitter icon"></i></a>
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
  </main>


  <section class="service-area class-service-area position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title text-center">
            <h2 class="title"><span> QUELQUES </span> COURS </h2>
            <div class="desc">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
          <div class="row">
            <div class="col-sm-6 col-lg-4">
              <div class="service-item">
                <div class="inner-content">
                  <div class="thumb">
                    <a href="class-details.html"><span><img src="{{ url ('img/service/1.jpg')}}" alt="Image"></span></a>
                  </div>
                  <div class="content">
                    <h4 class="title"><a href="class-details.html">BODY BUILDING</a></h4>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="service-item">
                <div class="inner-content">
                  <div class="thumb">
                    <a href="class-details.html"><span><img src="{{ url ('img/service/2.jpg')}}" alt="Image"></span></a>
                  </div>
                  <div class="content">
                    <h4 class="title"><a href="class-details.html">FITNESS</a></h4>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="service-item">
                <div class="inner-content">
                  <div class="thumb">
                    <a href="class-details.html"><span><img src="{{ url ('img/service/3.jpg')}}" alt="Image"></span></a>
                  </div>
                  <div class="content">
                    <h4 class="title"><a href="class-details.html">CROSSFIT CLASS</a></h4>

                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="blog-area blog-default-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title text-center">
            <h2 class="title">DERNIER ARTICLE <span>DE BLOG</span></h2>
            <div class="desc">
              <p> "Le sport va chercher la peur pour la dominer, la fatigue pour en triompher, la difficulté pour la vaincre." <br>- Pierre de Coubertin.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-aos="fade-up" data-aos-duration="1000">
        <div class="col-md-6 col-lg-4">
          <!--== Start Blog Post Item ==-->
          <div class="post-item mb-md-30">
            <div class="thumb">
              <a href="blog-details.html"><img src="{{ url ('img/blog/1.jpg')}}" alt="Image"></a>
            </div>
            <div class="content">
              <div class="meta">
                <a class="category" href="blog.html"><i class="fa fa-tags icon"></i><span> FITNESS</span></a>
                <a class="post-date" href="blog.html"><i class="fa fa-calendar icon"></i><span> 05 MAI, 2023</span></a>
              </div>
              <h4 class="title">
                <a href="blog-details.html">Un entraînement parfait est le moyen de façonner votre corps et votre esprit</a>
              </h4>
              <p>La salle de sport est très importante pour maintenir notre santé quia cuuntur magni dolores eos plaisir de l’esprit et vous rendre plus sain</p>
            </div>
          </div>
          <!--== End Blog Post Item ==-->
        </div>
        <div class="col-md-6 col-lg-4">
          <!--== Start Blog Post Item ==-->
          <div class="post-item mb-md-30">
            <div class="thumb">
              <a href="blog-details.html"><img src="{{ url ('img/blog/2.jpg')}}" alt="Image"></a>
            </div>
            <div class="content">
              <div class="meta">
                <a class="category" href="blog.html"><i class="fa fa-tags icon"></i><span> YOGA</span></a>
                <a class="post-date" href="blog.html"><i class="fa fa-calendar icon"></i><span> 04 MAI, 2023</span></a>
              </div>
              <h4 class="title">
                <a href="blog-details.html">Le yoga est important pour le rafraîchissement du corps et de l’esprit</a>
              </h4>
              <p>La salle de sport est très importante pour maintenir notre santé quia cuuntur magni dolores eos plaisir de l’esprit et vous rendre plus sain</p>
            </div>
          </div>
          <!--== End Blog Post Item ==-->
        </div>
        <div class="col-md-6 col-lg-4">
          <!--== Start Blog Post Item ==-->
          <div class="post-item">
            <div class="thumb">
              <a href="blog-details.html"><img src="{{ url ('img/blog/3.jpg')}}" alt="Image"></a>
            </div>
            <div class="content">
              <div class="meta">
                <a class="category" href="blog.html"><i class="fa fa-tags icon"></i><span> BODYBUILD</span></a>
                <a class="post-date" href="blog.html"><i class="fa fa-calendar icon"></i><span> 02 MAI, 2023</span></a>
              </div>
              <h4 class="title">
                <a href="blog-details.html">Donnez plus de temps à l’entraînement pour une bonne forme que vous voulez</a>
              </h4>
              <p>La salle de sport est très importante pour maintenir notre santé quia cuuntur magni dolores eos plaisir de l’esprit et vous rendre plus sain</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  </main>

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

  <div class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>

  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay d-none"></div>
      <div class="off-canvas-content">
        <div class="off-canvas-header">
          <div class="close-action">
            <button class="btn-close"><i class="pe-7s-close"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <div class="res-mobile-menu">
          </div>
        </div>
        <div class="off-canvas-footer"></div>
      </div>
    </div>
  </aside>
  </div>
  
<!-- Ajoutez un script pour écouter le clic sur le bouton -->
<script>
  // Sélectionnez le bouton et l'élément body
  var button = document.getElementById("toggleDarkMode");
  var body = document.body;

  // Ajoutez un écouteur d'événement sur le clic du bouton
  button.addEventListener("click", function() {
    // Basculez entre les classes .dark-mode et .light-mode sur le body
    body.classList.toggle("dark-mode");
    body.classList.toggle("light-mode");
  });
</script>
<style>
.light-mode {
  background-color: white;
  color: black;
}

/* Définissez les styles pour le mode nuit */
.dark-mode {
  background-color: black;
  color: white;
}

/* Définissez les styles pour le bouton */
button {
  position: fixed; /* Fixez le bouton par rapport à la fenêtre du navigateur */
  bottom: 10px; /* Placez-le en bas de la page */
  right: 10px; /* Placez-le à droite de la page */
  border: none; /* Enlevez la bordure */
  background-color: transparent; /* Rendez le fond transparent */
  cursor: pointer; /* Changez le curseur en pointeur */
}

/* Définissez les styles pour l'icône de lune */
.fas.fa-moon {
  font-size: 30px; /* Ajustez la taille de l'icône */
  color: yellow; /* Changez la couleur de l'icône */
}
</style>

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
</body>

