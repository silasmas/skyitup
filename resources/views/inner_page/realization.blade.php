@extends('layouts.template')

@section('guest-content')

        <!-- crumbs area start -->
        <div id="realizationPage" class="crumbs-area">
            <div class="container">
                <div class="crumb-content">
                    <p class="mb-2"><a href="{{ route('home') }}" class="text-warning">@lang('info.menu_home')</a> &raquo; @lang('info.menu_realization')</p>
                    <h4 class="crumb-title"><span>@lang('info.realization.big_title_1')</span> @lang('info.realization.big_title_2')</h4>
                </div>
            </div>
        </div>
        <!-- crumbs area end -->

        <!-- blog area start -->
        <div class="blog-area ptb--60">
            <div class="container">
                <div class="row">
                    <!-- blog single start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-5 rounded-block overflow-hidden">
                            <img class="card-img-top position-relative px-4" src="{{ asset('assets/img/realizations/realization-01.png') }}" alt="image" style="z-index: 5;">
                            <img class="card-img-top position-absolute" src="{{ asset('assets/img/realizations/bg-realization.png') }}" alt="image" style="top: 0; z-index: 4;">
                            <div class="card-body p-25 border-top">
                                <h4 class="card-title mt-5 mb-4 text-truncate"><a href="https://www.ccb.cd/">Conseil Congolais de la batterie</a></h4>
                                <p class="card-text">Duis ac tellus et risus vulputate vehicula donec lobortis risus a elit. Etiam tempor.</p>
                                <a class="btn btn-primary btn-round btn-sm" href="https://www.ccb.cd/"> @lang('info.realization.link')<span class="d-inline-block ml-3" style="vertical-align: -3px; font-size: 2rem;">&raquo;</span></a>
                            </div>
                        </div><!-- card -->
                    </div>
                    <!-- blog single end -->

                    <!-- blog single start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-5 rounded-block overflow-hidden">
                            <img class="card-img-top position-relative p-5" src="{{ asset('assets/img/realizations/realization-02.png') }}" alt="image" style="z-index: 5;">
                            <img class="card-img-top position-absolute" src="{{ asset('assets/img/realizations/bg-realization.png') }}" alt="image" style="top: 0; z-index: 4;">
                            <div class="card-body p-25 border-top">
                                <h4 class="card-title mb-4 text-truncate"><a href="https://fpc.cd/">Fond de promotion culturelle</a></h4>
                                <p class="card-text">Duis ac tellus et risus vulputate vehicula donec lobortis risus a elit. Etiam tempor.</p>
                                <a class="btn btn-primary btn-round btn-sm" href="https://fpc.cd/"> @lang('info.realization.link')<span class="d-inline-block ml-3" style="vertical-align: -3px; font-size: 2rem;">&raquo;</span></a>
                            </div>
                        </div><!-- card -->
                    </div>
                    <!-- blog single end -->

                    <!-- blog single start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-5 rounded-block overflow-hidden">
                            <img class="card-img-top position-relative" src="{{ asset('assets/img/realizations/realization-03.jpeg') }}" alt="image" style="z-index: 5;">
                            <img class="card-img-top position-absolute" src="{{ asset('assets/img/realizations/bg-realization.png') }}" alt="image" style="top: 0; z-index: 4;">
                            <div class="card-body p-25 border-top">
                                <h4 class="card-title mb-4 text-truncate"><a href="https://www.linkedin.com/company/mdfils-sarl/">Mdfils SARL</a></h4>
                                <p class="card-text">Duis ac tellus et risus vulputate vehicula donec lobortis risus a elit. Etiam tempor.</p>
                                <a class="btn btn-primary btn-round btn-sm" href="https://www.linkedin.com/company/mdfils-sarl/"> @lang('info.realization.link')<span class="d-inline-block ml-3" style="vertical-align: -3px; font-size: 2rem;">&raquo;</span></a>
                            </div>
                        </div><!-- card -->
                    </div>
                    <!-- blog single end -->

                    <!-- blog single start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-5 rounded-block overflow-hidden">
                            <img class="card-img-top position-relative" src="{{ asset('assets/img/realizations/realization-04.jpg') }}" alt="image" style="z-index: 5;">
                            <img class="card-img-top position-absolute" src="{{ asset('assets/img/realizations/bg-realization.png') }}" alt="image" style="top: 0; z-index: 4;">
                            <div class="card-body p-25 border-top">
                                <h4 class="card-title mb-4 text-truncate"><a href="https://cd.linkedin.com/company/sca-inter-a">SCA INTER A Santé- RDC</a></h4>
                                <p class="card-text">Duis ac tellus et risus vulputate vehicula donec lobortis risus a elit. Etiam tempor.</p>
                                <a class="btn btn-primary btn-round btn-sm" href="https://cd.linkedin.com/company/sca-inter-a"> @lang('info.realization.link')<span class="d-inline-block ml-3" style="vertical-align: -3px; font-size: 2rem;">&raquo;</span></a>
                            </div>
                        </div><!-- card -->
                    </div>
                    <!-- blog single end -->

                    <!-- blog single start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-5 rounded-block overflow-hidden">
                            <img class="card-img-top position-relative" src="{{ asset('assets/img/realizations/realization-05.jpg') }}" alt="image" style="z-index: 5;">
                            <img class="card-img-top position-absolute" src="{{ asset('assets/img/realizations/bg-realization.png') }}" alt="image" style="top: 0; z-index: 4;">
                            <div class="card-body p-25 border-top">
                                <h4 class="card-title mb-4 text-truncate"><a href="https://m.facebook.com/cnssrdc">Caisse Nationale de Sécurité Sociale</a></h4>
                                <p class="card-text">Duis ac tellus et risus vulputate vehicula donec lobortis risus a elit. Etiam tempor.</p>
                                <a class="btn btn-primary btn-round btn-sm" href="https://m.facebook.com/cnssrdc"> @lang('info.realization.link')<span class="d-inline-block ml-3" style="vertical-align: -3px; font-size: 2rem;">&raquo;</span></a>
                            </div>
                        </div><!-- card -->
                    </div>
                    <!-- blog single end -->
                </div>
            </div>
        </div>
        <!-- blog area end -->

@endsection
