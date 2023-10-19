@extends('layouts.template')

@section('guest-content')

        <!-- slider area start -->
        <div class="slider-area owl-carousel has-color">
            <div class="slider_item" style="background: url({{ asset('assets/img/sliders/slider-1.png') }}) center/cover no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-9">
                            <div class="slider-content">
                                <h3>@lang('info.slide1_title')</h3>
                                <h1><span class="primary-color">@lang('info.slide1_subtitle1')</span> @lang('info.slide1_subtitle2')</h1>
                                <p>@lang('info.slide1_content')</p>
                                <a class="btn btn-primary btn-round btn-lg mt-5" href="#">@lang('info.slide1_button')</a>
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
                                <h3>@lang('info.slide2_title')</h3>
                                <h1><span class="primary-color">@lang('info.slide2_subtitle1')</span> @lang('info.slide2_subtitle2')</h1>
                                <p>@lang('info.slide2_content')</p>
                                <a class="btn btn-primary btn-round btn-lg mt-5" href="#">@lang('info.slide2_button')</a>
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
                                <h3>@lang('info.slide3_title')</h3>
                                <h1><span class="primary-color">@lang('info.slide3_subtitle1')</span> @lang('info.slide3_subtitle2')</h1>
                                <p>@lang('info.slide3_content')</p>
                                <a class="btn btn-primary btn-round btn-lg mt-5" href="#">@lang('info.slide3_button')</a>
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
                                <h3>@lang('info.slide4_title')</h3>
                                <h1><span class="primary-color">@lang('info.slide4_subtitle1')</span> @lang('info.slide4_subtitle2')</h1>
                                <p>@lang('info.slide4_content')</p>
                                <a class="btn btn-primary btn-round btn-lg mt-5" href="#">@lang('info.slide4_button')</a>
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
                                <h3>@lang('info.slide5_title')</h3>
                                <h1><span class="primary-color">@lang('info.slide5_subtitle1')</span> @lang('info.slide5_subtitle2')</h1>
                                <p>@lang('info.slide5_content')</p>
                                <a class="btn btn-primary btn-round btn-lg mt-5" href="#">@lang('info.slide4_button')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider area end -->

        <!-- welcome words area start -->
        <div class="course-area pt-5 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12 mx-auto">
                        <div class="bg-image">
                            <img src="{{ asset('assets/img/welcomer.jpg') }}" alt="" class="float-left mr-4 mb-4" class="img-fluid" style="border-radius: 3rem;">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-sm-6 col-12 mx-auto">
                        <h2 class="mb-4">@lang('info.home.welcome_word.title')</h2>
                        <p class="mb-4">@lang('info.home.welcome_word.paragraph1')</p>
                        <p class="mb-4">@lang('info.home.welcome_word.paragraph2')</p>
                        <p class="mb-4">@lang('info.home.welcome_word.paragraph3')</p>
                        <p class="mb-4">@lang('info.home.welcome_word.paragraph4')</p>
                        <p class="mb-4">@lang('info.home.welcome_word.paragraph5')</p>
                        <p class="mb-4">@lang('info.home.welcome_word.paragraph6')</p>
                        <p class="mb-4">@lang('info.home.welcome_word.paragraph7')</p>
                        <p class="mb-5">@lang('info.home.welcome_word.paragraph8')</p>
                        <p class="mb-0 font-weight-bold" style="color: #555;">Alphonse-Willy Ngana Mabiala, CEO</p>

                        <hr class="my-5">

                        <form action="{{ route('download') }}" class="text-sm-right text-center">
                            <button type="submit" class="btn btn-sm btn-primary px-5 z-depth-0" style="border-radius: 3rem;">
                                <i class="fa fa-file-pdf-o mr-3" style="vertical-align: -3px; font-size: 2.5rem;"></i>@lang('info.home.download_brochure')
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- welcome words area end -->

        <!-- team area start -->
        <div class="teacher-area pt--50 pb--70 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <span class="text-uppercase">@lang('info.home.team_title')</span>
                            <h2>@lang('info.home.team_subtitle_1')</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="row">
    @foreach ($json_result as $team)
                            <div class="col-lg-6 col-sm-6 col-12 mx-auto">
        @if ($team->names == 'Sarah Kalala')
                                <h2 class="mb-5 text-center">@lang('info.home.team_subtitle_2')</h2>
        @endif
                                <div class="card mb-5 rounded-block overflow-hidden">
                                    <img src="{{ asset($team->picture) }}" alt="image">
                                    <div class="card-body text-center p-25">
                                        <h3 class="card-title mb-4">{{ $team->names }}</h3>
                                        <span class="primary-color d-block mb-3">{{ $team->role }}</span>
                                        <ul class="list-inline">
                                            <li {{ $team->facebook==""?'hidden':'' }}><a href="{{ $team->facebook }}"><i class="fa fa-facebook" style="font-size: 2rem;"></i></a></li>
                                            <li {{ $team->twitter==""?'hidden':'' }}><a href="{{ $team->twitter }}"><i class="fa fa-twitter" style="font-size: 2rem;"></i></a></li>
                                            <li {{ $team->instagram==""?'hidden':'' }}><a href="{{ $team->instagram }}"><i class="fa fa-instagram" style="font-size: 2rem;"></i></a></li>
                                            <li {{ $team->linkedin==""?'hidden':'' }}><a href="{{ $team->linkedin }}"><i class="fa fa-linkedin" style="font-size: 2rem;"></i></a></li>
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

        <!-- contact info area start -->
        <div class="contact-info ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cnt-info" style="border-top: 5px solid #d83c2a;">
                            <h1 class="h1-responsive d-inline-block px-4 bg-danger m-0"><i class="fa fa-phone mt-2 mb-0 text-white"></i></h1>
                            <h1 class="h1-responsive d-inline-block ml-3 mb-5">@lang('info.home.contact_title')</h1>
                            <h5 class="mb-5 text-muted font-weight-normal">@lang('info.home.contact_description')</h5>
                            <ul class="text-center">
                                <li style="font-size: 2.5rem; color: black;">(+243) 821 790 718</li>
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
        {{-- <div class="contact-form-area pt--40 pb--120">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="cnt-title text-sm-left">
                            <h4 class="h4-responsive m-0">@lang('info.home.contact_form.title')</h4>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="name" placeholder="@lang('info.home.contact_form.name')">
                            </div>
                            <div class="col-md-4">
                                <input type="email" name="email" placeholder="@lang('info.home.contact_form.email')">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="phone" placeholder="@lang('info.home.contact_form.phone')">
                            </div>
                            <div class="col-12">
                                <button type="submit">@lang('info.home.contact_form.button')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
        <!-- contact form area end -->

        <!-- testimonial area start -->
        <div class="testimonial-area ptb--120">
            <img class="tst-bg" src="{{ asset('assets/img/watermark.png') }}" alt="image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <div class="section-title sec-style-two">
                            <span class="text-uppercase primary-color mb-0">@lang('info.home.testimonial_title')</span>
                            <h2>@lang('info.home.testimonial_subtitle')</h2>
                        </div>

                        <div class="tst-carousel owl-carousel">
                            <div class="testimonial-content pb--40">
                                <h3>&laquo; Vous devez profiter de la vie. Toujours aimez, les personnespositives penser. &raquo;</h3>
                                <h4>Kawsar Ahhamed</h4>
                                <span>App Developer</span>
                            </div>
                            <div class="testimonial-content pb--40">
                                <h3>&laquo; Vous devez profiter de la vie. Toujours aimez, les personnespositives penser. &raquo;</h3>
                                <h4>Kawsar Ahhamed</h4>
                                <span>App Developer</span>
                            </div>
                            <div class="testimonial-content pb--40">
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
                            <h2 class="m-0" style="color: black;">@lang('info.home.partners_title')</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-3 col-6 mx-auto">
                        <div class="card mb-5">
                            <div class="card-body">
                                <a href="https://www.sysinfocom-kin.fr/" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ asset('assets/img/partners/partner-1.png') }}" alt="image" style="width: 100%">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-3 col-6 mx-auto">
                        <div class="card mb-5">
                            <div class="card-body">
                                <a href="https://www.sysinfocom-kin.fr/" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ asset('assets/img/partners/partner-2.png') }}" alt="image" style="width: 100%">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-3 col-6 mx-auto">
                        <div class="card mb-5">
                            <div class="card-body">
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ asset('assets/img/partners/partner-3.png') }}" alt="image" style="width: 100%">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-3 col-6 mx-auto">
                        <div class="card mb-5">
                            <div class="card-body">
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ asset('assets/img/partners/partner-4.png') }}" alt="image" style="width: 100%">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-3 col-6 mx-auto">
                        <div class="card mb-5">
                            <div class="card-body">
                                <a href="https://osiyatech.com/" target="_blank" rel="noopener noreferrer">
                                     <img src="{{ asset('assets/img/partners/partner-5.png') }}" alt="image" style="width: 100%">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-3 col-6 mx-auto">
                        <div class="card mb-5">
                            <div class="card-body">
                                <a href="https://www.soft-it.com/" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ asset('assets/img/partners/partner-6.png') }}" alt="image" style="width: 100%">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- take toure area end -->

@endsection
