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
                                <p>Adopter notre processus d’approvisionnement à vos besoins et économiser du temps et de l’argent.</p>
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
        </div>
        <!-- slider area end -->

@endsection
