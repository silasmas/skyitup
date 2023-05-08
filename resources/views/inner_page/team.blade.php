@extends('layouts.template')

@section('guest-content')

        <!-- crumbs area start -->
        <div id="aboutPage" class="crumbs-area">
            <div class="container">
                <div class="crumb-content">
                    <p class="mb-2"><a href="{{ route('home') }}" class="text-warning">@lang('info.menu_home')</a> &raquo; <a href="{{ route('about') }}" class="text-warning">@lang('info.menu_about')</a> &raquo; @lang('info.home.team_title')</p>
                    <h4 class="crumb-title"><span>@lang('info.home.team_title_1')</span> @lang('info.home.team_title_2')</h4>
                </div>
            </div>
        </div>
        <!-- crumbs area end -->

        <!-- member details area start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div id="member" class="about-area pt--50 pb--30">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset($member->picture) }}" alt="{{ $member->names }}" class="rounded-block mr-sm-5 mb-4 float-left">
                                    <h1 class="h1-responsive mb-4" style="line-height: 4.5rem">{{ $member->names }}</h1>
                                    <h4 class="h4-responsive"><span class="green-text-1 d-block mb-3">{{ $member->role }}</span></h4>
                                    <p>
                                        <a href="{{ $member->facebook }}" class="btn btn-primary rounded-circle mx-3" style="padding: 1.1rem 1.5rem 0.9rem 1.5rem;"><i class="fa fa-facebook" style="font-size: 2rem;"></i></a>
                                        <a href="{{ $member->twitter }}" class="btn btn-primary rounded-circle mx-3" style="padding: 1.1rem 1.05rem 0.9rem 1.05rem;"><i class="fa fa-twitter" style="font-size: 2rem;"></i></a>
                                    </p>

    @foreach ($member->assets as $asset)
                                    <p style="text-align: justify;">{{ $asset->asset1 }}</p>
                                    <p style="text-align: justify;">{{ $asset->asset2 }}</p>
                                    <p style="text-align: justify;">{{ $asset->asset3 }}</p>
                                    <p style="text-align: justify;">{{ $asset->asset4->content1 }}</p>
                                    <ul>
                                        <li>{{ $asset->asset4->list_item_1 }}</li>
                                        <li>{{ $asset->asset4->list_item_2 }}</li>
                                        <li>{{ $asset->asset4->list_item_3 }}</li>
                                        <li>{{ $asset->asset4->list_item_4 }}</li>
                                        <li>{{ $asset->asset4->list_item_5 }}</li>
                                        <li>{{ $asset->asset4->list_item_6 }}</li>
                                    </ul>
                                    <p style="text-align: justify;">{{ $asset->asset4->content2 }}</p>
    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

    @if (!empty($member->experience))
                    <div id="member" class="about-area pb--50">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title mt-0 mb-5">
                                        <h2 class="h2-responsive" class="mt-lg-4" style="line-height: 5rem;">@lang('info.about.experience')</h2>
                                        <div class="mt-4" style="border-bottom: 5px solid #f7a426;"></div>
                                    </div>
        @foreach ($member->experience as $exp)
                                    <h5 class="h5-responsive mt-4 mb-2">{{ $exp->company }}</h5>
                                    <p class="m-0">{{ $exp->role }}</p>
                                    <ul class="p-0"></ul>
            @if ($exp->tasks != null)
                @foreach ($exp->tasks as $task)
                                        <li>{{ $task->task }}</li>
                @endforeach
            @endif
        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
    @endif

    @if (!empty($member->diplomas))
                    <div id="member" class="about-area pb--50">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title mt-0 mb-5">
                                        <h2 class="h2-responsive" style="line-height: 5rem;">@lang('info.about.diploma')</h2>
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
                    <div id="member" class="about-area pb--50">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title mt-0 mb-5">
                                        <h2 class="h2-responsive" class="mt-lg-4" style="line-height: 5rem;">@lang('info.about.expertise')</h2>
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
                    <div id="member" class="about-area pb--50">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title mt-0 mb-5">
                                        <h2 class="h2-responsive" style="line-height: 5rem;">@lang('info.about.work_countries')</h2>
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
                </div>
                <div class="col-lg-3">
                    <div class="sidebar">
                        <!-- widget course start -->
                        <div class="widget widget-course" style="background-color: transparent;">
                            <h4 class="widget-title mt-lg-4">@lang('info.home.team_other_members')</h4>
                            <div class="course-list">
    @foreach ($team as $other_members)
        @if ($other_members->id != $member->id)
                                <div class="w-cs-single mb-5">
                                    <img src="{{ asset($other_members->picture) }}" alt="image">
                                    <div class="fix">
                                        <p><a href="{{ route('team.member', ['member_id' => $other_members->id]) }}">{{ $other_members->names }}</a></p>
                                        <p class="text-truncate small">{{ $other_members->role }}</p>
                                        <small class="text-truncate"><a href="{{ route('team.member', ['member_id' => $other_members->id]) }}" class="btn pl-0 py-3 border-bottom border-warning">@lang('info.details')</a></small>
                                    </div>
                                </div>
        @endif
    @endforeach
                            </div>

                            <a href="{{ route('about') }}" class="btn btn-primary btn-round btn-block my-4">@lang('info.menu_about')</a>
                        </div>
                        <!-- widget course end -->
                    </div>
                    <!-- sidebar end -->
                </div>
            </div>
        </div>

@endsection
