<header class="header-style1 menu_area-light">

    <div class="navbar-default border-bottom border-color-light-white">

        <!-- start top search -->
        <div class="top-search bg-secondary">
            <div class="container-fluid px-sm-1-6 px-lg-2-9">
                <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                    <div class="input-group">
                        <span class="input-group-addon cursor-pointer">
                            <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                        </span>
                        <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Cher...">
                        <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- end top search -->

        <div class="container-fluid px-sm-2-9">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="menu_area alt-font">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">

                            <div class="navbar-header navbar-header-custom">
                                <!-- start logo -->
                                <a href="index.html" class="navbar-brand">
                                    Logo Skyitup
                                </a>
                                <!-- end logo -->
                            </div>

                            <div class="navbar-toggler"></div>

                            <!-- menu area -->
                            <ul class="navbar-nav align-items-lg-center ms-auto" id="nav" style="display: none;">
                                <li><a href="#!" class="active">@lang("info.m1")</a>
                                </li>
                                <li><a href="#!">A propos</a>
                                </li>
                                <li><a href="#!">Services</a>

                                </li>
                                <li class="center"><a href="#!">Réalisations</a>
                                </li>
                                <li class="right  ms-lg-5 me-lg-5" style="ma">
                                    <a href="#!">Langues</a>
                                   <ul style="right:-5px">
                                       <li>
                                @foreach ($available_locales as $locale_name => $available_locale)
                                    @if ($available_locale === $current_locale)
                                        <li>
                                            <a class="dropdown-item disabled" href="#">
                                                @switch($available_locale)
                                                    @case('en')
                                                        <span class="fi fi-us me-2 align-middle"></span>{{ $locale_name }}

                                                        @break
                                                    @default
                                                        <span class="fi fi-fr me-2 align-middle"></span>{{ $locale_name }}

                                                    @endswitch
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ route('change_language', ['locale' => $available_locale]) }}">
                                                @switch($available_locale)
                                                    @case('en')
                                                        <span class="fi fi-us me-2 align-middle"></span>{{ $locale_name }}

                                                    @break

                                                    @default
                                                        <span class="fi fi-fr me-2 align-middle"></span>{{ $locale_name }}

                                                        @endswitch
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                                    </ul>
                                </li>
                            </ul>
                            <!-- end menu area -->

                            <!-- start attribute navigation -->

                            <!-- end attribute navigation -->

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
