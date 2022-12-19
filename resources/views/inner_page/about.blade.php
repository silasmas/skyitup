@extends('layouts.template')

@section('guest-content')

        <!-- crumbs area start -->
        <div class="crumbs-area">
            <div class="container">
                <div class="crumb-content">
                    <p class="mb-2"><a href="" class="text-warning">@lang('info.menu_home')</a> &raquo; @lang('info.menu_about')</p>
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
                            <div class="abt-rt-inner"></div>
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
                                <h3 class="h3-responsive text-uppercase green-text-1">@lang('info.home.about_mission_title')</h3>
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
                                <h3 class="h3-responsive text-uppercase red-text">@lang('info.home.about_ambitions_title')</h3>
                            </div>
                            <h4 class="h4-responsive text-muted font-weight-normal">@lang('info.home.about_ambitions_description')</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ambitions area end -->

        <!-- values area start -->
        <div id="ourValues" class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-7 col-12">
                        <div class="card mb-4">
                            <div class="card-body p-25">
                                <div class="course-meta-title mb-4">
                                    <div class="course-meta-text">
                                        <h3 class="h4-responsive font-weight-bold text-uppercase yellow-text-2">@lang('info.home.about_values_title')</h3>
                                    </div>
                                </div>
                                <h4 class="h4-responsive text-muted font-weight-normal m-2"><i class="fa fa-angle-right"></i>@lang('info.home.about_values_list.item1')</h4>
                                <h4 class="h4-responsive text-muted font-weight-normal m-2"><i class="fa fa-angle-right"></i>@lang('info.home.about_values_list.item2')</h4>
                                <h4 class="h4-responsive text-muted font-weight-normal m-2"><i class="fa fa-angle-right"></i>@lang('info.home.about_values_list.item3')</h4>
                                <h4 class="h4-responsive text-muted font-weight-normal m-2"><i class="fa fa-angle-right"></i>@lang('info.home.about_values_list.item4')</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- values area end -->

@endsection
