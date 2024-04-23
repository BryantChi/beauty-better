@extends('layouts_main.master')

@section('content')
    @include('layouts_main.hero')
    <h1 class="d-none">{{ $pageSettings->title }}</h1>
    <!-- dream_service_start -->
    <div class="dream_service">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-5">
                        <span class="sub_heading">Treatment</span>
                        <h2>美美上美療程</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center treatment-slick mb-md-auto mb-5">
                @php
                    $servicesInfo = \App\Models\Admin\ServicesInfo::all();
                @endphp
                @foreach ($servicesInfo ?? [] as $service)
                <div class="my-3 pt-2">
                    <div class="single_dream text-center">
                        <div class="thumb">
                            <a href="{{ route('services.items', DB::table('post_type_infos')->where('deleted_at', '!=', null)->where('type_name', 'like', '%' . $service->service_name . '%')->value('type_slug')) }}">
                                <img src="{{ $service->service_cover_front ?? null ? env('APP_URL', 'https://beauty4u-clinic.com') . '/uploads/' . $service->service_cover_front : asset('images/services/services-01.webp') }}"
                                        class="img-fluid w-75 mx-auto img-services"
                                        alt="{{ $service->service_cover_front_alt ?? '美美上美 - ' . $service->service_name }}">
                            </a>
                        </div>
                        <h3>{{ $service->service_name }}</h3>
                        <p></p>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- dream_service_end -->

    <!-- about_area_start -->
    @include('about')
    {{-- <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_thumb">
                        <img src="images/about-01.jpg" class="img-fluid img-about-index" alt="">
                        <div class="exprience">
                            <h1>25</h1>
                            <span>Years of Experience</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="about_info">
                        <div class="section_title">
                            <span class="sub_heading">About Us</span>
                            <h3>關於美美上美</h3>
                            <div class="seperator"></div>
                        </div>
                        <p>
                            集合了台南成大醫學中心菁英醫師,專業領域包括：各項整形手術、肌膚管理、雷射光電療程、微整形、預防醫學<br><br>
                            美上美診所將在台南中西區打造一間優質有堅持、有良心、有理念與專業的診所。
                        </p>
                        <ul class="about_list">
                            <li>醫學中心訓練的專業團隊 </li>
                            <li>專業的手術與麻醉設備 </li>
                            <li>專業的雷射儀器 </li>
                            <li>舒適的個人接待空間 </li>
                        </ul>
                        <a href="{{ route('about') }}" class="boxed-btn">了解更多 >></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- about_area_end -->

    <div class="my-5 bg-white" id="compare">

        <div class="container">
            <div class="row">
                <div class="col-xl-12 justify-content-center">
                    <div class="section_title mb-60 text-center">
                        {{-- <span class="sub_heading"></span> --}}
                        <h2 class="title-brown">專業醫療團隊‧打造美麗極緻</h2>
                        <div class="seperator"></div>
                        <p>這是我們的美麗見證，也是我們與您的約定，和我們一起專注於您的美麗。</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 p-0 m-0">
                    <div id="myImageCompare" class="position-relative">
                        <!-- The first div will be the front element, to prevent FOUC add a style="display: none;" -->
                        <div style="display: none;" >
                            <span class="images-compare-label">Before</span>
                            <img src="images/bf/a1.png" class="img-fluid" alt="Before">
                        </div>
                        <!-- This div will be the back element -->
                        <div>
                            <span class="images-compare-label">After</span>
                            <img src="images/bf/a2.png" class="img-fluid" alt="After">
                        </div>
                    </div>
                    <div class="w-100 d-flex mt-3">
                        <a href="{{ route('case') }}" class="boxed-btn ml-auto">更多案例 >></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="ev_area p-0 m-0 position-relative">
        <div class="container-fluid p-0 m-0">
            <video src="images/ev-vid.mov" autoplay loop muted playsinline class="vid p-0 m-0"></video>
        </div>
        <div class=" p-0 m-0 w-100 h-100 position-absolute"
            style="z-index: 2;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.3);"></div>
    </div>


@endsection

@push('third_party_css')
<link rel="stylesheet" href="css/images-compare.css">
@endpush
@push('custom_css')
<link rel="stylesheet" href="css/index.css?v={{ time() }}">
<style>
    @media (max-width: 768px) {
        #compare .section_title h3 {
            font-size: 1.5rem !important;
        }
    }

</style>
@endpush
@push('third_party_scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<script type="text/javascript" src="js/jquery.images-compare.js"></script>
@endpush
@push('custom_scripts')
<script src="js/index.js?v={{ time() }}"></script>
<script>
    $(function() {
        $('a.scrollto').on('click', function(e) {
            e.preventDefault();

            var header = $('#sticky-header');
            var selector = $(this).context.hash;
            console.log($(this).context.hash);
            var to = $(selector).offset().top - header.height() - 100;

            $('html, body').animate({
                scrollTop: to
            }, 1000);

            $('.mobile_menu .slicknav_btn').click();
        });
    })
</script>
@endpush
