@extends('layouts.template')

@section('guest-content')

        <!-- crumbs area start -->
        <div id="aboutPage" class="crumbs-area">
            <div class="container">
                <div class="crumb-content">
                    <p class="mb-2"><a href="{{ route('home') }}" class="text-warning">@lang('info.menu_home')</a> &raquo; @lang('info.menu_about')</p>
                    <h4 class="crumb-title"><span>@lang('info.about.big_title_1')</span> @lang('info.about.big_title_2')</h4>
                </div>
            </div>
        </div>
        <!-- crumbs area end -->

        <!-- about area start -->
        <div class="about-area ptb--80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 py-4">
                        <div class="about-left-content">
                            <div class="section-title">
                                <span class="text-uppercase">@lang('info.home.about_title')</span>
                                <h2>@lang('info.about.welcome_title_1')</h2>
                                <h2><span class="green-text-1">Sky</span><span class="red-text">IT</span><span class="yellow-text-2">Up</span></h2>
                            </div>
                            <p>@lang('info.about.about_content1')</p>
                            <p>@lang('info.about.about_content2')</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="abt-right-thumb">
                            <div class="abt-rt-inner rounded-block"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->

        <!-- mission area start -->
        <div class="about-area ptb--60 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-left-content text-sm-left text-center">
                            <div class="section-title mb-4">
                                <h2 class="h2-responsive text-uppercase">@lang('info.home.about_mission_title')</h2>
                            </div>
                            <h4 class="h4-responsive text-muted font-weight-normal">@lang('info.home.about_mission_description')</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mission area end -->

        <!-- ambitions area start -->
        <div class="about-area ptb--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-left-content text-sm-right text-center">
                            <div class="section-title mb-4">
                                <h2 class="h2-responsive text-uppercase">@lang('info.home.about_ambitions_title')</h2>
                            </div>
                            <h4 class="h4-responsive text-muted font-weight-normal">@lang('info.home.about_ambitions_description')</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ambitions area end -->

        <!-- values area start -->
        <div id="ourValues" class="about-area bg-light ptb--50">
            <div class="container">
                <div class="row mb-sm-5 mb-4 text-center">
                    <div class="col-12">
                        <div class="section-title mb-4">
                            <h2 class="h2-responsive font-weight-bold text-uppercase">@lang('info.home.about_values_title')</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-9 mx-auto value-item">
                        <div class="card mb-4 rounded-circle">
                            <div class="card-body p-25 d-flex justify-content-center align-items-center text-center">
                                <div class="view mx-5">
                                    <img src="{{ asset('assets/img/values/value-1.png') }}" alt="" width="70">
                                    <div class="mask">
                                        <h4 class="h4-responsive mt-3 text-muted">@lang('info.home.about_values_list.item1')</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-9 mx-auto value-item">
                        <div class="card mb-4 rounded-circle">
                            <div class="card-body p-25 d-flex justify-content-center align-items-center text-center">
                                <div class="view mx-5">
                                    <img src="{{ asset('assets/img/values/value-2.png') }}" alt="" width="70">
                                    <div class="mask">
                                        <h4 class="h4-responsive mt-3 text-muted">@lang('info.home.about_values_list.item2')</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-9 mx-auto value-item">
                        <div class="card mb-4 rounded-circle">
                            <div class="card-body p-25 d-flex justify-content-center align-items-center text-center">
                                <div class="view mx-5">
                                    <img src="{{ asset('assets/img/values/value-3.png') }}" alt="" width="70">
                                    <div class="mask">
                                        <h4 class="h4-responsive mt-3 text-muted">@lang('info.home.about_values_list.item3')</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-9 mx-auto value-item">
                        <div class="card mb-4 rounded-circle">
                            <div class="card-body p-25 d-flex justify-content-center align-items-center text-center">
                                <div class="view mx-5">
                                    <img src="{{ asset('assets/img/values/value-4.png') }}" alt="" width="70">
                                    <div class="mask">
                                        <h4 class="h4-responsive mt-3 text-muted">@lang('info.home.about_values_list.item4')</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- values area end -->

        <!-- team area start -->
        <div class="teacher-area pt--50 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <span class="text-uppercase">@lang('info.home.team_title')</span>
                            <h2>@lang('info.home.team_subtitle')</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="row">
    @foreach ($json_result as $team)
                            <div class="col-lg-6 col-sm-6 col-12 mx-auto">
                                <div class="card mb-5 rounded-block overflow-hidden">
                                    <img src="{{ asset($team->picture) }}" alt="image">
                                    <div class="card-body text-center p-25">
                                        <h3 class="card-title mb-4">{{ $team->names }}</h3>
                                        <span class="primary-color d-block mb-3">{{ $team->role }}</span>
                                        <ul class="list-inline">
                                            <li><a href="{{ $team->facebook }}"><i class="fa fa-facebook" style="font-size: 2rem;"></i></a></li>
                                            <li><a href="{{ $team->twitter }}"><i class="fa fa-twitter" style="font-size: 2rem;"></i></a></li>
                                            <a href="{{ route('team.member', ['member_id' => $team->id]) }}" class="btn btn-primary btn-round btn-sm team-member"> @lang('info.details')</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
    @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team area end -->

@endsection
