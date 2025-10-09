@extends('layouts_main.master')

@section('content')
    @include('layouts_main.sub_hero', ['bradcam_title' => '醫師團隊 / Team'])

    <!-- team_area_start -->
    <div class="team_area">


        <div class="section_title mb-5 mx-auto text-center">
            <span class="sub_heading">Teams</span>
            <h2>醫師團隊</h2>
            <div class="seperator"></div>
        </div>
        <div class="container">

            @foreach ($teamsInfo as $i => $team)
                <div class="row justify-content-between mb-3">
                    <div class="col-xl-3 col-md-6 col-lg-3 {{ $i % 2 == 0 ? '' : 'order-md-2 order-1' }} mb-5">
                        <div class="single_team text-center">
                            <div class="team_thumb"
                                style="background-color: #9b745700;box-shadow: 0px 0px 30px rgba(0, 0, 0, 0);opacity: 1;border-radius: 10rem;">
                                <img src="{{ env('APP_URL') . '/uploads/' . $team->headshots }}" class="img-fluid w-d-75"
                                    alt="{{ $team->headshots_alt }}">
                            </div>

                        </div>
                    </div>
                    <div
                        class="col-xl-8 col-md-6 col-lg-8 team_content {{ $i % 2 == 0 ? '' : 'order-md-1 order-2' }} mb-5">
                        <div class="mb-4">
                            <div class="team_title d-flex align-items-end">
                                <h3 class="mb-0">{{ $team->name }}</h3>
                                <p class="mb-0 ml-3">{{ $team->role }}</p>
                            </div>

                            <div class="seperator w-100 bg-brown" style="height: 3px"></div>

                            <p class="text-justify">{{ $team->introduce }}</p>
                        </div>

                        <div class="row">
                            <div
                                class="col-lg-4 mb-3 {{ count($team->degree ?? []) == 0 || count($team->degree ?? []) == null ? 'd-none' : '' }}">
                                <h4>學歷</h4>
                                <ul>
                                    @foreach ($team->degree ?? [] as $key => $value)
                                        <li>{{ $value }}</li>
                                    @endforeach
                                </ul>
                            </div>

                            <div
                                class="col-lg-4 mb-3 {{ count($team->expertise ?? []) == 0 || count($team->expertise ?? []) == null ? 'd-none' : '' }}">
                                <h4>專長</h4>
                                <ul>
                                    @foreach ($team->expertise ?? [] as $key => $value)
                                        <li>{{ $value }}</li>
                                    @endforeach
                                </ul>
                            </div>

                            <div
                                class="col-lg-4 mb-3 {{ count($team->experience ?? []) == 0 || count($team->experience ?? []) == null ? 'd-none' : '' }}">
                                <h4>經歷/資格</h4>
                                <ul>
                                    @foreach ($team->experience ?? [] as $key => $value)
                                        <li>{{ $value }}</li>
                                    @endforeach
                                </ul>
                            </div>

                            {{-- <div class="col-lg-6 mb-3 {{ count($team->certificate_license ?? []) == 0 || count($team->certificate_license ?? []) == null ? 'd-none' : '' }} {{ count($team->certificate_license ?? []) ? 'd-none' : '' }}">
                                <h4>證照/資格</h4>
                                <ul>
                                    @foreach ($team->certificate_license ?? [] as $key => $value)
                                        <li>{{ $value }}</li>
                                    @endforeach
                                </ul>
                            </div> --}}
                        </div>

                    </div>

                </div>
            @endforeach
        </div>
    </div>
    <!-- team_area_end -->
@endsection

@push('custom_css')
    <style>
        .team_area {
            background-image: url("../../images/about/about-bg2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .team_content ul {
            list-style: none;
            border-left: 5px solid #a68a5e;
            padding-left: 10px;
        }

        .team_content ul li {
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .team_area {
                background-image: url("../../images/about/about-bg-mob2.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
                padding-top: 80px;
                padding-bottom: 80px;
            }
        }
    </style>
@endpush

@push('custom_scripts')
@endpush
