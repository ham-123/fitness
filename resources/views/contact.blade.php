@extends('layouts.base')

@section('content')
<main class="main-content">
    <section class="page-title-area bg-img" data-bg-img="{{ url('img/team/npng.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content content-style2">
                        <h2 class="title"><span>CONTACT </span>NOUS</h2>
                        <div class="desc">
                            <p>Nous disposons d’un instructeur très professionnel et expert qui peut nous apporter beaucoup pour préserver notre santé. Il nous fait découvrir certains produits qui nous aident à lutter contre les douleurs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-area position-relative">
        <div class="contact-page-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2 class="title">ENTREZ EN <span>CONTACT</span></h2>
                            <div class="desc">
                                <p>Contactez-nous si vous avez besoin d’informations</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-info-content">
                            <div class="contact-info-item">
                                <div class="icon">
                                    <img class="icon-img" src="{{ url('img/icons/c1.png') }}" alt="Icon">
                                </div>
                                <div class="content">
                                    <p>252B, Central Street Main road<br>Benin</p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="icon">
                                    <img class="icon-img" src="{{ url('img/icons/c2.png') }}" alt="Icon">
                                </div>
                                <div class="content">
                                    <a href="tel://09(123)456789">00 (229) 90 78 88 77</a>
                                    <a href="tel://09(987)654321">00 (229) 63 08 28 67</a>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="icon">
                                    <img class="icon-img" src="{{ url('img/icons/c3.png') }}" alt="Icon">
                                </div>
                                <div class="content">
                                    <a href="mailto://info@example.com">gym@example.com</a>
                                    <a href="#">www.gym.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-form mb-md-90">
                            <form class="contact-form-wrapper"  action="{{ route('contact.store') }}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title">
                                            <h2 class="title">Envoyez-nous un message</h2>
                                            <div class="desc">
                                                <p>Si vous avez besoin d’informations, n’hésitez pas à nous envoyer un message. Nous essaierons de répondre à votre message et de vous donner des conseils appropriés.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row row-gutter-12">
                                        <div class="col-md-6">
    <div class="form-group">
        <input class="form-control" type="text" name="con_name" placeholder="Nom" value="{{ Auth::user()->prenom }}" readonly>
    </div>
</div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="email" name="con_email"placeholder="Email" value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-0">
                                                    <textarea name="con_message" placeholder="Écrivez votre message ici"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-0">
                                                    <button class="btn btn-theme" type="submit">Envoyer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Message Notification -->
                        <div class="form-message">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-map-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3151.8402891185374!2d2.618165557579652!3d9.357576529683113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssg!4v1607294780661!5m2!1sen!2ssg" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-group">
                <div class="shape-img5">
                    <img src="assets/img/photos/shape1.png" alt="Image">
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
