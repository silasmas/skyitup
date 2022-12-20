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
                            <img class="card-img-top" src="{{ asset('assets/img/realizations/realization-1.jpg') }}" alt="image">
                            <div class="card-body p-25">
                                <h4 class="card-title mb-4"><a href="#">Curabitur pretium tincidunt lacus</a></h4>
                                <p class="card-text">Duis ac tellus et risus vulputate vehicula donec lobortis risus a elit. Etiam tempor.</p>
                                <a class="btn btn-primary btn-round btn-sm" href="#"> Read More </a>
                            </div>
                        </div><!-- card -->
                    </div>
                    <!-- blog single end -->

                    <!-- blog single start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-5 rounded-block overflow-hidden">
                            <img class="card-img-top" src="{{ asset('assets/img/realizations/realization-2.jpg') }}" alt="image">
                            <div class="card-body p-25">
                                <h4 class="card-title mb-4"><a href="#">Curabitur pretium tincidunt lacus</a></h4>
                                <p class="card-text">Duis ac tellus et risus vulputate vehicula donec lobortis risus a elit. Etiam tempor.</p>
                                <a class="btn btn-primary btn-round btn-sm" href="#"> Read More </a>
                            </div>
                        </div><!-- card -->
                    </div>
                    <!-- blog single end -->

                    <!-- blog single start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card mb-5 rounded-block overflow-hidden">
                            <img class="card-img-top" src="{{ asset('assets/img/realizations/realization-3.jpg') }}" alt="image">
                            <div class="card-body p-25">
                                <h4 class="card-title mb-4"><a href="#">Curabitur pretium tincidunt lacus</a></h4>
                                <p class="card-text">Duis ac tellus et risus vulputate vehicula donec lobortis risus a elit. Etiam tempor.</p>
                                <a class="btn btn-primary btn-round btn-sm" href="#"> Read More </a>
                            </div>
                        </div><!-- card -->
                    </div>
                    <!-- blog single end -->
                </div>
            </div>
        </div>
        <!-- blog area end -->

@endsection
