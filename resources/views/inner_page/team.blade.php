<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Consulting Approche axée sur l&#039;objectivité et les résultats offre de véritables solutions de travail en matière de conseil en technologie digitale. Contactez-nous Entrepreneurs Solutions numériques et logiciels Implémentation des solutions logicielles et organisationnelles dédiées aux activités de nos clients. Contactez-nous Logiciel Services Matériels Adopter notre processus d’approvisionnement à vos besoins et économiser du temps et" />

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- All css here -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/default-css.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

        <!-- modernizr css -->
        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

        <title>Document</title>
    </head>
    <body>
        <!-- member details area start -->
        <div id="member" class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ asset($member->picture) }}" alt="{{ $member->names }}" class="rounded-block mr-sm-5 mb-4 float-left">
                        <h1 class="h1-responsive mb-4" style="line-height: 4.5rem">{{ $member->names }}</h1>
                        <h4 class="h4-responsive"><span class="primary-color d-block mb-3">{{ $member->role }}</span></h4>
@foreach ($member->assets as $asset)
                        <p>{{ $asset->asset1 }}</p>
                        <p>{{ $asset->asset2 }}</p>
@endforeach
                    </div>
                </div>
            </div>
        </div>

@if (!empty($member->experience))
        <div id="member" class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mt-0 mb-5">
                            <h1 class="mt-lg-4" style="line-height: 5rem;">@lang('info.about.experience')</h1>
                            <div class="mt-4" style="border-bottom: 5px solid #f7a426;"></div>
                        </div>
    @foreach ($member->experience as $exp)
                        <h5 class="h5-responsive mt-4 mb-2">{{ $exp->company }}</h5>
                        <p class="m-0">{{ $exp->role }}</p>
    @endforeach
                    </div>
                </div>
            </div>
        </div>
@endif

@if (!empty($member->diplomas))
        <div id="member" class="about-area pt--40 pb--20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mt-0 mb-5">
                            <h1 style="line-height: 5rem;">@lang('info.about.diploma')</h1>
                            <div class="mt-4" style="border-bottom: 5px solid #155459;"></div>
                        </div>
    @foreach ($member->diplomas as $diploma)
                        <p class="mb-3"><i class="fa fa-angle-right green-text-1" style="font-size: 3rem; vertical-align: -3px;"></i> {{ $diploma->diploma }}</p>
    @endforeach
                    </div>
                </div>
            </div>
        </div>
@endif

@if (!empty($member->expertises))
        <div id="member" class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mt-0 mb-5">
                            <h1 class="mt-lg-4" style="line-height: 5rem;">@lang('info.about.expertise')</h1>
                            <div class="mt-4" style="border-bottom: 5px solid #d83c2a;"></div>
                        </div>
    @foreach ($member->expertises as $exp)
                        <p class="mb-3"><i class="fa fa-angle-right red-text" style="font-size: 3rem; vertical-align: -3px;"></i> {{ $exp->expertise }}</p>
    @endforeach
                    </div>
                </div>
            </div>
        </div>
@endif

@if (!empty($member->work_countries))
        <div id="member" class="about-area pt--40">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mt-0 mb-5">
                            <h1 style="line-height: 5rem;">@lang('info.about.work_countries')</h1>
                            <div class="mt-4" style="border-bottom: 5px solid #155459;"></div>
                        </div>
    @foreach ($member->work_countries as $work_country)
                        <h5 class="h5-responsive mt-4 mb-2">{{ $work_country->region }}</h5>
                        <p class="m-0">{{ $work_country->countries }}</p>
    @endforeach
                    </div>
                </div>
            </div>
        </div>
@endif

        <!-- member details area end -->


        <!-- jquery latest version -->
        <script src="{{ asset('assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
        <!-- bootstrap 4 js -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- others plugins -->
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
    </body>
</html>
