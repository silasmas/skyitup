@extends('layouts.template')

@section('guest-content')

        <!-- crumbs area start -->
        <div id="servicePage" class="crumbs-area">
            <div class="container">
                <div class="crumb-content">
                    <p class="mb-2"><a href="{{ route('home') }}" class="text-warning">@lang('info.menu_home')</a> &raquo; @lang('info.menu_service')</p>
                    <h4 class="crumb-title"><span>@lang('info.service.big_title_1')</span> @lang('info.service.big_title_2')</h4>
                </div>
            </div>
        </div>
        <!-- crumbs area end -->

        <!-- services list area start -->
        <div class="about-area ptb--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 order-lg-7">
                        <div class="section-title mb-5">
                            <h1 class="mt-lg-4" style="line-height: 5rem;">@lang('info.service.title1')</h1>
                            <div class="mt-4" style="border-bottom: 5px solid #f7a426;"></div>
                        </div>

                        <div class="about-left-content">
                            <p class="m-lg-0">@lang('info.service.content1')</p>
                        </div>
                    </div>

                    <div class="col-lg-5 order-lg-5">
                        <div class="rounded-block overflow-hidden" style="height: 35rem; background: url({{ asset('assets/img/services/service-1.png') }}); background-size: cover;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-area ptb--60 bg-light border-top border-bottom border-default">
            <div class="container">
                <div class="section-title">
                    <h1 style="line-height: 5rem;">@lang('info.service.title2')</h1>
                    <div class="mt-4" style="border-bottom: 5px solid #155459;"></div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="about-left-content">
                            <p>@lang('info.service.content2_1')</p>
                            <p>@lang('info.service.content2_2')</p>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="mb-lg-0 mb-4 rounded-block overflow-hidden" style="height: 35rem; background: url({{ asset('assets/img/services/service-2.jpg') }}); background-size: cover;"></div>
                    </div>

                    <div class="col-12">
                        <div class="about-left-content">
                            <p class="mb-3">@lang('info.service.content2_3.text')</p>
                            <p class="mb-2"><i class="fa fa-check mr-3 text-warning"></i>@lang('info.service.content2_3.item1')</p>
                            <p class="mb-2"><i class="fa fa-check mr-3 text-warning"></i>@lang('info.service.content2_3.item2')</p>
                            <p class="mb-2"><i class="fa fa-check mr-3 text-warning"></i>@lang('info.service.content2_3.item3')</p>
                            <p class="mb-2"><i class="fa fa-check mr-3 text-warning"></i>@lang('info.service.content2_3.item4')</p>
                            <p class="mb-2"><i class="fa fa-check mr-3 text-warning"></i>@lang('info.service.content2_3.item5')</p>
                            <p class="m-0"><i class="fa fa-check text-warning"></i> @lang('info.service.content2_3.item6')</li>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-area ptb--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 order-lg-7">
                        <div class="section-title mb-5">
                            <h1 class="mt-lg-4" style="line-height: 5rem;">@lang('info.service.title3')</h1>
                            <div class="mt-4" style="border-bottom: 5px solid #d83c2a;"></div>
                        </div>

                        <div class="about-left-content">
                            <h4 class="h4-responsive">@lang('info.service.content3_1.inner_title1')</h4>
                            <p>@lang('info.service.content3_1.content1')</p>
                        </div>
                    </div>

                    <div class="col-12 mt-5 order-lg-7">
                        <div class="about-left-content">
                            <h4 class="h4-responsive">@lang('info.service.content3_1.inner_title2')</h4>
                            <p>@lang('info.service.content3_1.content2')</p>

                            <h4 class="h4-responsive">@lang('info.service.content3_1.inner_title3')</h4>
                            <p>@lang('info.service.content3_1.content3')</p>
                        </div>
                    </div>

                    <div class="col-lg-5 order-lg-5">
                        <div class="rounded-block overflow-hidden" style="height: 35rem; background: url({{ asset('assets/img/services/service-3.png') }}); background-size: cover;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-area ptb--60 bg-light border-top border-bottom border-default">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="section-title mb-5">
                            <h1 class="mt-lg-4" style="line-height: 5rem;">@lang('info.service.title4')</h1>
                            <div class="mt-4" style="border-bottom: 5px solid #2a979e;"></div>
                        </div>

                        <div class="about-left-content">
                            <p>@lang('info.service.content4.text')</p>
                            <p class="mb-3">@lang('info.service.content4.item1')</p>
                            <p class="mb-2"><i class="fa fa-check mr-3 text-warning"></i>@lang('info.service.content4.item1')</p>
                            <p class="mb-2"><i class="fa fa-check mr-3 text-warning"></i>@lang('info.service.content4.item2.text')</p>
                            <p class="mb-2 ml-4"><i class="fa fa-check mr-3 green-text-1"></i>@lang('info.service.content4.item2.inner_item1')</p>
                            <p class="mb-2 ml-4"><i class="fa fa-check mr-3 green-text-1"></i>@lang('info.service.content4.item2.inner_item2')</p>
                            <p class="mb-2 ml-4"><i class="fa fa-check mr-3 green-text-1"></i>@lang('info.service.content4.item2.inner_item3')</p>
                            <p class="mb-2 ml-4"><i class="fa fa-check mr-3 green-text-1"></i>@lang('info.service.content4.item2.inner_item4')</p>
                            <p class="mb-2 ml-4"><i class="fa fa-check mr-3 green-text-1"></i>@lang('info.service.content4.item2.inner_item5')</p>
                            <p class="mb-2 ml-4"><i class="fa fa-check mr-3 green-text-1"></i>@lang('info.service.content4.item2.inner_item6')</p>
                            <p class="mb-2 ml-4"><i class="fa fa-check mr-3 green-text-1"></i>@lang('info.service.content4.item2.inner_item7')</p>
                            <p class="mb-3 ml-4"><i class="fa fa-check mr-3 green-text-1"></i>@lang('info.service.content4.item2.inner_item8')</p>
                            <p class="mb-2"><i class="fa fa-check mr-3 text-warning"></i>@lang('info.service.content4.item3.text')</p>
                            <p class="mb-2 ml-4"><i class="fa fa-check mr-3 green-text-1"></i>@lang('info.service.content4.item3.inner_item1')</p>
                            <p class="mb-2 ml-4"><i class="fa fa-check mr-3 green-text-1"></i>@lang('info.service.content4.item3.inner_item2')</p>
                            <p class="ml-4"><i class="fa fa-check mr-3 green-text-1"></i>@lang('info.service.content4.item3.inner_item3')</p>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="rounded-block overflow-hidden" style="height: 35rem; background: url({{ asset('assets/img/services/service-4.jpg') }}); background-size: cover;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-area ptb--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 order-lg-7">
                        <div class="section-title mb-5">
                            <h1 class="mt-lg-4" style="line-height: 5rem;">@lang('info.service.title5')</h1>
                            <div class="mt-4" style="border-bottom: 5px solid #fbbd38;"></div>
                        </div>

                        <div class="about-left-content">
                            <p>@lang('info.service.content5_1')</p>
                            <p class="mb-3 font-weight-bold text-uppercase">@lang('info.service.inner_title5')</p>
                            <p>@lang('info.service.content5_2')</p>
                            <p class="m-lg-0">@lang('info.service.content5_3')</p>
                        </div>
                    </div>

                    <div class="col-lg-5 order-lg-5">
                        <div class="rounded-block overflow-hidden" style="height: 35rem; background: url({{ asset('assets/img/services/service-5.jpg') }}); background-size: cover;"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- services list area end -->

@endsection
