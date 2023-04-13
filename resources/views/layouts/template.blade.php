<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@lang('info.description')" />

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

        <title>
@if (Route::current()->getName() == 'home')
            @lang('info.welcome') - SkyITup @lang('info.llc')
@endif

@if (Route::current()->getName() == 'about')
            @lang('info.about.big_title')
@endif

@if (Route::current()->getName() == 'team.member')
            {{ $member->names }}
@endif

@if (Route::current()->getName() == 'service')
            @lang('info.service.big_title')
@endif

@if (Route::current()->getName() == 'realization')
            @lang('info.realization.big_title')
@endif
        </title>
    </head>

    <body class="antialiased">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- preloader area start -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- prealoader area end -->

        <!-- header area start -->
        <header id="header">
            <!-- header top area start -->
            <div class="header-top d-sm-block d-none">
                <div class="container">
                    <div class="row d-flex flex-center">
                        <div class="col-sm-7">
                            <div class="ht-address">
                                <ul>
                                    <li><i class="fa fa-phone"></i>+243 821 790 718</li>
                                    <li class="text-uppercase">@lang('info.schedule') 08h30' - 16h30'</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="ht-social">
                                <ul>
@foreach ($available_locales as $locale_name => $available_locale)
                                    <li>
    @if ($available_locale != $current_locale)
                                        <a href="{{ route('change_language', ['locale' => $available_locale]) }}" title="{{ $locale_name }}">
        @switch($available_locale)
            @case('en')
                                            <span class="fi fi-us"></span>
            @break

            @default
                                            <span class="fi fi-{{ $available_locale }}"></span>
            @endswitch
                                        </a>
    @else
                                        <a title="{{ $locale_name }}">
        @switch($available_locale)
            @case('en')
                                            <span class="fi fi-us"></span>
            @break

            @default
                                            <span class="fi fi-{{ $available_locale }}"></span>
            @endswitch
                                        </a>
    @endif
                                    </li>
@endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top area end -->

            <!-- header bottom area start -->
            <div class="header-bottom">
                <div class="container">
                    <div class="header-bottom-inner">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-4 col-sm-9">
                                <div class="logo">
                                    <a href="{{ route('home') }}" class="d-sm-inline d-inline-block mr-5">
                                        <img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="me-2">
                                        <p class="d-inline-block m-0 text-uppercase"><span class="green-text-1">Sky</span><span class="red-text">IT</span><span class="yellow-text-2">Up</span></p>
                                    </a>

                                    <p class="d-sm-none d-inline-block ml-5">
@foreach ($available_locales as $locale_name => $available_locale)
    @if ($available_locale != $current_locale)
                                        <a class="ml-3" href="{{ route('change_language', ['locale' => $available_locale]) }}" title="{{ $locale_name }}">
        @switch($available_locale)
            @case('en')
                                            <span class="fi fi-us"></span>
            @break

            @default
                                            <span class="fi fi-{{ $available_locale }}"></span>
            @endswitch
                                        </a>
    @else
                                        <a class="ml-3" title="{{ $locale_name }}">
        @switch($available_locale)
            @case('en')
                                            <span class="fi fi-us"></span>
            @break

            @default
                                            <span class="fi fi-{{ $available_locale }}"></span>
            @endswitch
                                        </a>
    @endif
@endforeach
                                    </p>
                                </div>
                            </div>

                            <div class="col-xl-9 col-lg-8 d-none d-lg-block">
                                <div class="main-menu">
                                    <nav>
                                        <ul id="m_menu_active">
                                            <li class="{{ Route::current()->getName() == 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">@lang('info.menu_home')</a></li>
                                            <li class="{{ Route::current()->getName() == 'about' ? 'active' : '' }}"><a href="{{ route('about') }}">@lang('info.menu_about')</a></li>
                                            <li class="{{ Route::current()->getName() == 'service' ? 'active' : '' }}"><a href="{{ route('service') }}">@lang('info.menu_service')</a></li>
                                            <li class="{{ Route::current()->getName() == 'realization' ? 'active' : '' }}"><a href="{{ route('realization') }}">@lang('info.menu_realization')</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-12 d-block d-lg-none">
                                <div id="mobile_menu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header bottom area end -->
        </header>
        <!-- header area end -->

        <!-- offset search area start -->
        <div class="offset-search">
            <form action="#">
                <input type="text" name="search" placeholder="@lang('info.search')">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- offset search area end -->

        <!-- body overlay area start -->
        <div class="body_overlay"></div>
        <!-- body overlay area end -->

@yield('guest-content')

        <!-- footer area start -->
        <footer>
            <div class="footer-top has-color pt--120 pb--30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-sm-6 col-12">
                            <div class="widget widget-company px-3">
                                <div class="logo">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="me-2">
                                    <p class="d-inline-block m-0 text-uppercase"><span class="green-text-1">Sky</span><span class="red-text">IT</span><span class="yellow-text-2">Up</span></p>
                                    <h5 class="h5-responsive mt-4 mb-5">@lang('info.company_description')</h5>
                                </div>

                                <div class="address">
                                    <h6><i class="fa fa-map-marker mr-3"></i> @lang('info.address')</h6>
                                    <p>@lang('info.company_address')</p>
                                </div>
                                <div class="address">
                                    <h6><i class="fa fa-phone mr-3"></i> @lang('info.phone')</h6>
                                    <p>+243 821 790 718</p>
                                </div>
                                <div class="address">
                                    <h6><i class="fa fa-envelope mr-3"></i> @lang('info.email')</h6>
                                    <p>contact@skyitupsas.com</p>
                                </div>
                                <ul class="social">
                                    <li class="ml-3"><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                                    <li class="ml-3"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="ml-3"><a href="https://www.instagram.com/skyitup_sarl/"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 col-12 pl-4">
                            <div class="widget footer-link">
                                <h4 class="fwidget-title mt-sm-0 mt-5 mb-5 pb-3 primary-color">@lang('info.quick_links')</h4>
                                <ul>
                                    <li><a href="{{ route('home') }}"><i class="fa fa-arrow-right"></i>@lang('info.menu_home')</a></li>
                                    <li><a href="{{ route('about') }}"><i class="fa fa-arrow-right"></i>@lang('info.menu_about')</a></li>
                                    <li><a href="{{ route('service') }}"><i class="fa fa-arrow-right"></i>@lang('info.menu_service')</a></li>
                                    <li><a href="{{ route('realization') }}"><i class="fa fa-arrow-right"></i>@lang('info.menu_realization')</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12 col-12">
                            <div class="widget widget-opening">
                                <h4 class="fwidget-title mt-lg-0 mt-5 mb-5 pb-3 primary-color">@lang('info.newsletter_title')</h4>
                                <p>@lang('info.newsletter_description')</p>
                                <form>
                                    <label for="subscribe_newsletter" class="sr-only">@lang('info.email')</label>
                                    <input type="email" name="subscribe_newsletter" class="form-control rounded-0 mb-4 py-3" id="subscribe_newsletter" placeholder="@lang('info.email')">
                                    <input type="submit" class="btn btn-danger text-white z-depth-0" value="@lang('info.send')">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom d-sm-flex justify-content-between">
                        <p>Copyright <i class="fa fa-copyright"></i> {{ date('Y') }} <a href="{{ route('home') }}" class="font-weight-bold">SkyITup</a> - @lang('info.all_right_reserved')</p>
                        <p>Designed by <a href="https://www.silasmas.com" class="text-uppercase">Sdev</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->

        <!-- scroll top start -->
        <button id="scrollTop" class="position-fixed d-none btn-warning border-0 rounded-circle" style="z-index: 999; bottom: 3rem; right: 3rem; transition: .5s;">
            <i class="fa fa-angle-up" style="width: 5rem; height: 5rem; padding: 0.9rem 1rem; font-size: 3rem;"></i>
        </button>
        <!-- scroll top end -->

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
@if (Route::current()->getName() == 'home')
        <script type="text/javascript">
            $(function () {
                /*================================
                Welcome modal
                ==================================*/
                var modal = new bootstrap.Modal(document.getElementById('welcomeWordModal'), {
                    keyboard: false
                });

                $(window).scroll(function () {
                    if ($(document).scrollTop() > 500) {
                        modal.show();

                        $('#scrollTop').removeClass('d-none');

                    } else {
                        $('#scrollTop').addClass('d-none');
                    }
                });

                $('#welcomeWordModal').on('show.bs.modal', function () {
                    $('body').addClass('modal-padding-overlap');

                }).on('hidden.bs.modal', function () {
                    modal.dispose();
                });

                $('#scrollTop').click(function (e) { 
                    e.preventDefault();
                    $("html, body").animate({ scrollTop: '0' });
                });
            });
        </script>
@else
        <script type="text/javascript">
            $(function () {
                $(window).scroll(function () {
                    if ($(document).scrollTop() > 500) {
                        $('#scrollTop').removeClass('d-none');

                    } else {
                        $('#scrollTop').addClass('d-none');
                    }
                });

                $('#scrollTop').click(function (e) { 
                    e.preventDefault();
                    $("html, body").animate({ scrollTop: '0' });
                });
            });
        </script>
@endif
    </body>
</html>
