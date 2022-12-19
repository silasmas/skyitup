@extends('layouts.template')

@section('guest-content')

        <!-- slider area start -->
        <div class="slider-area owl-carousel has-color">
            <div class="slider_item" style="background: url({{ asset('assets/img/sliders/slider-1.png') }}) center/cover no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-9">
                            <div class="slider-content">
                                <h3>Consulting</h3>
                                <h1><span class="primary-color">Approche axée sur</span> l'objectivité et les résultats</h1>
                                <p>SkyITup offre de véritables solutions de travail en matière de conseil en technologie digitale.</p>
                                <a class="btn btn-primary btn-round btn-lg mt-5" href="#">Contactez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider_item" style="background: url({{ asset('assets/img/sliders/slider-2.png') }}) center/cover no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-9">
                            <div class="slider-content">
                                <h3>Computing</h3>
                                <h1><span class="primary-color">Solutions numériques</span> et logiciels</h1>
                                <p>Implémentation des solutions logicielles et organisationnelles dédiées aux activités de nos clients.</p>
                                <a class="btn btn-primary btn-round btn-lg mt-5" href="#">Contactez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider_item" style="background: url({{ asset('assets/img/sliders/slider-3.png') }}) center/cover no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-9">
                            <div class="slider-content">
                                <h3>Maintenance</h3>
                                <h1><span class="primary-color">Services</span> Matériels</h1>
                                <p>Adopter notre processus d'approvisionnement à vos besoins et économiser du temps et de l'argent.</p>
                                <a class="btn btn-primary btn-round btn-lg mt-5" href="#">Projets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider_item" style="background: url({{ asset('assets/img/sliders/slider-4.png') }}) center/cover no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-9">
                            <div class="slider-content">
                                <h3>Safe keeping</h3>
                                <h1><span class="primary-color">Solution de </span> sécurité</h1>
                                <p>Nous sommes de leaders éprouvés en matière de solutions de sécurité pour les petites et moyennes entreprises.</p>
                                <a class="btn btn-primary btn-round btn-lg mt-5" href="#">Contactez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider_item" style="background: url({{ asset('assets/img/sliders/slider-5.png') }}) center/cover no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-9">
                            <div class="slider-content">
                                <h3>Quick support</h3>
                                <h1><span class="primary-color">Service</span> d'assistance</h1>
                                <p>Nos services d'assistance informatique garantissent que vos systèmes et applications informatiques critiques soient toujours opérationnels et que tous les problèmes techniques soient résolus rapidement et avec précision par des techniciens compétents et serviables.</p>
                                <a class="btn btn-primary btn-round btn-lg mt-5" href="#">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider area end -->

        <!-- about area start -->
        <div class="course-area py-5 my-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="section-title">
                            <span class="text-uppercase">A propos</span>
                            <h2><span class="yellow-text-2">Mission</span> | <span class="red-text">Ambitions</span> | <span class="green-text-1">Valeurs</span></h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12 mx-auto">
                        <div class="card mb-4">
                            <div class="card-body p-25">
                                <div class="course-meta-title mb-4">
                                    <div class="course-meta-text">
                                        <h4 class="h4-responsive font-weight-bold text-uppercase">Notre mission</h4>
                                    </div>
                                </div>
                                <p class="m-0">Notre mission est de dotée de capacité à toute personne ou organisation de produire plus dans un temps record.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-12 mx-auto">
                        <div class="card mb-4">
                            <div class="card-body p-25">
                                <div class="course-meta-title mb-4">
                                    <div class="course-meta-text">
                                        <h4 class="h4-responsive font-weight-bold text-uppercase">Nos ambitions</h4>
                                    </div>
                                </div>
                                <p class="m-0">SKYITUP SARL à l’ambition de continuer dans l’amélioration de l’environnement, du social, de l’économie de la population et de la gouvernance en offrant des solutions de transformation digitale qui permettent l’élévation de la qualité socio-économique du monde et de la population.</p>
                            </div>
                        </div>
                    </div>

                    <div id="ourValues" class="col-lg-4 col-sm-6 col-12 mx-auto">
                        <div class="card mb-4">
                            <div class="card-body p-25">
                                <div class="course-meta-title mb-4">
                                    <div class="course-meta-text">
                                        <h4 class="h4-responsive font-weight-bold text-uppercase">Nos valeurs</h4>
                                    </div>
                                </div>
                                <p class="m-1"><i class="fa fa-angle-right red-text"></i> Intégrité</p>
                                <p class="m-1"><i class="fa fa-angle-right red-text"></i> Respect</p>
                                <p class="m-1"><i class="fa fa-angle-right red-text"></i> Professionnalisme</p>
                                <p class="m-0"><i class="fa fa-angle-right red-text"></i> Fiabilité</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->

        <!-- team area start -->
        <div class="teacher-area pt--50 pb--70 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <span class="text-uppercase">Notre équipe</span>
                            <h2 class="green-text-1">Leadership</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12 mx-auto">
                        <div class="card mb-5">
                            <img src="{{ asset('assets/img/team/member-1.jpg') }}" alt="image">
                            <div class="card-body text-center p-25">
                                <h3 class="card-title mb-4"><a href="teacher-details.html">Willy NGANA</a></h3>
                                <span class="primary-color d-block mb-3">Chief Executive Officer</span>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook" style="font-size: 2rem;"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" style="font-size: 2rem;"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-12 mx-auto">
                        <div class="card mb-5">
                            <img src="{{ asset('assets/img/team/member-2.jpg') }}" alt="image">
                            <div class="card-body text-center p-25">
                                <h3 class="card-title mb-4"><a href="teacher-details.html">René KUNGANA</a></h3>
                                <span class="primary-color d-block mb-3">Chief Operations Officer</span>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook" style="font-size: 2rem;"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" style="font-size: 2rem;"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team area end -->

        <!-- contact info area start -->
        <div class="contact-info pt--120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cnt-info" style="border-top: 5px solid #d83c2a;">
                            <h1 class="h1-responsive d-inline-block px-4 bg-danger m-0"><i class="fa fa-phone mt-2 mb-0 text-white"></i></h1>
                            <h1 class="h1-responsive d-inline-block ml-3 mb-5">Contact</h1>
                            <h5 class="mb-5 text-muted font-weight-normal">Appelez-nous directement pour une assistance ou pour d'autres informations</h5>
                            <ul class="text-center">
                                <li style="font-size: 2.5rem;">(+243) 821 790 718</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div id="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.574722962964!2d15.306261015516387!3d-4.302449239004399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a33a4f5f0aee5%3A0x8a0a1535583dd981!2sSkyItUp%20Sarl!5e0!3m2!1sfr!2scd!4v1671452470092!5m2!1sfr!2scd" height="400" style="width: 100%; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact info area end -->

        <!-- contact form area start -->
        <div class="contact-form-area pt--40 pb--120">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="cnt-title text-sm-left">
                            <h4 class="h4-responsive m-0">Obtenir un devis gratuit et rapide</h4>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="name" placeholder="Votre nom">
                            </div>
                            <div class="col-md-4">
                                <input type="email" name="email" placeholder="Adresse Email">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="phone" placeholder="Téléphone">
                            </div>
                            <div class="col-12">
                                <button type="submit">Obtenir le devis</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- contact form area end -->

        <!-- testimonial area start -->
        <div class="testimonial-area ptb--120">
            <img class="tst-bg" src="{{ asset('assets/img/watermark.png') }}" alt="image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="tst-carousel owl-carousel">
                            <div class="testimonial-content pb--40">
                                <div class="section-title sec-style-two">
                                    <span class="text-uppercase primary-color mb-0">Les clients satisfaits</span>
                                    <h2>Témoignages</h2>
                                </div>
                                <h3>&laquo; Vous devez profiter de la vie. Toujours aimez, les personnespositives penser. &raquo;</h3>
                                <h4>Kawsar Ahhamed</h4>
                                <span>App Developer</span>
                            </div>
                            <div class="testimonial-content pb--40">
                                <div class="section-title sec-style-two">
                                    <span class="text-uppercase primary-color mb-0">happy students</span>
                                    <h2>Testimonial</h2>
                                </div>
                                <h3>&laquo; Vous devez profiter de la vie. Toujours aimez, les personnespositives penser. &raquo;</h3>
                                <h4>Kawsar Ahhamed</h4>
                                <span>App Developer</span>
                            </div>
                            <div class="testimonial-content pb--40">
                                <div class="section-title sec-style-two">
                                    <span class="text-uppercase primary-color mb-0">happy students</span>
                                    <h2>Testimonial</h2>
                                </div>
                                <h3>&laquo; Vous devez profiter de la vie. Toujours aimez, les personnespositives penser. &raquo;</h3>
                                <h4>Kawsar Ahhamed</h4>
                                <span>App Developer</span>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- testimonial-area -->

        <!-- take toure area start -->
        <div class="ptb--50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title sec-style-two">
                            <h2 class="red-text m-0">Nos partenaires</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-3 col-6 mx-auto">
                        <div class="card mb-5">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/partners/partner-1.png') }}" alt="image" style="width: 100%">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-3 col-6 mx-auto">
                        <div class="card mb-5">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/partners/partner-1.png') }}" alt="image" style="width: 100%">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-3 col-6 mx-auto">
                        <div class="card mb-5">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/partners/partner-1.png') }}" alt="image" style="width: 100%">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-3 col-6 mx-auto">
                        <div class="card mb-5">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/partners/partner-1.png') }}" alt="image" style="width: 100%">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-3 col-6 mx-auto">
                        <div class="card mb-5">
                            <div class="card-body">
                                <img src="{{ asset('assets/img/partners/partner-1.png') }}" alt="image" style="width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- take toure area end -->

@endsection
