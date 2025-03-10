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
                            <a href="{{ route('services.items', DB::table('post_type_infos')->whereNull('deleted_at')->where('type_name', 'like', '%' . $service->service_name . '%')->value('type_slug')) }}">
                                <img src="{{ $service->service_cover_front ?? null ? env('APP_URL', 'https://beauty4u-clinic.com') . '/uploads/' . $service->service_cover_front : asset('images/services/services-01.webp') }}"
                                        class="img-fluid w-75 mx-auto img-services"
                                        alt="{{ $service->service_cover_front_alt ?? '美美上美 - ' . $service->service_name }}">
                            </a>
                        </div>
                        <h3><a href="{{ route('services.items', DB::table('post_type_infos')->whereNull('deleted_at')->where('type_name', 'like', '%' . $service->service_name . '%')->value('type_slug')) }}">{{ $service->service_name }}</a></h3>
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

    {{-- <div class="ev_area p-0 m-0 position-relative">
        <div class="container-fluid p-0 m-0">
            <video src="images/ev-vid.mov" autoplay loop muted playsinline class="vid p-0 m-0"></video>
        </div>
        <div class=" p-0 m-0 w-100 h-100 position-absolute"
            style="z-index: 2;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.3);"></div>
    </div> --}}

    <div class="index_blog_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-5">
                        <span class="sub_heading">Blog</span>
                        <h2>醫師專欄</h2>
                        <div class="seperator"></div>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                    $postTypes = \App\Models\Admin\PostTypeInfo::where(function($query) {
                        $query->whereNotNull('type_parent_id')
                            ->whereNotIn('type_parent_id',
                            \App\Models\Admin\PostTypeInfo::whereNull('type_parent_id')->where(function($query) {
                                $query->whereNotIn('id', [1, 3]);
                            })->get('id')->toArray());
                    })->orWhere(function($query) {
                        $query->whereIn('id', [1, 3]);
                    })->pluck('id')->toArray();
                    $index_blogs = \App\Models\Admin\PostsInfo::whereIn('post_type', $postTypes)->orderBy('created_at', 'desc')->limit(4)->get();
                @endphp

                @foreach ($index_blogs ?? [] as $index_blog)
                <div class="col-xl-3 col-6">
                    <div class="single_blog_item">
                        <div class="thumb">
                            <a class=""
                                href="{{ route('blog.show', ['type' => DB::table('post_type_infos')->whereNull('deleted_at')->where('id', $index_blog->post_type)->value('type_slug'), 'slug' => $index_blog->post_slug]) }}">
                                <img class="card-img img-blog-index img-fluid rounded" src="{{ $index_blog->post_front_cover ?? null ? env('APP_URL', 'https://beauty4u-clinic.com') . '/uploads/' . $index_blog->post_front_cover : asset('images/about/about-05.jpg') }}"
                                    alt="{{ $index_blog->post_front_cover_alt ?? $index_blog->post_title }}">
                            </a>
                        </div>
                        <span class="mt-2 text-secondary">{{  \Carbon\Carbon::parse($index_blog->created_at)->format('Y-m-d') }}</span>
                        <h3 class="mt-3 font-weight-bolder title-blog-index multiline-ellipsis">
                            <a class=""
                                href="{{ route('blog.show', ['type' => DB::table('post_type_infos')->whereNull('deleted_at')->where('id', $index_blog->post_type)->value('type_slug'), 'slug' => $index_blog->post_slug]) }}">
                                {{ $index_blog->post_title }}
                            </a>
                        </h3>
                        <p class="multiline-ellipsis mt-2">
                            {!! str_replace(["\r\n", "\r", "\n"], '', strip_tags($index_blog->post_content)) !!}</p>
                    </div>
                </div>
                @endforeach

                <div class="col-xl-12 mt-3">
                    <div class="w-100 text-center">
                        <a class="boxed-btn" href="{{ route('blog') }}">查看更多</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0 mx-0">
        <div class="container">
            <div class="row" id="transportation">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-3">
                        <span class="sub_heading">Transportation</span>
                        <h2>交通方式</h2>
                        <div class="seperator"></div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="map" style="">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.9117701560663!2d120.23401120000001!3d22.990271699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e773f31cca15b%3A0x1bcab774e4c7b4b1!2z576O576O5LiK576O6Ki65omA772c5Y-w5Y2X6Yar576O5o6o6Jam!5e0!3m2!1szh-TW!2stw!4v1739635768030!5m2!1szh-TW!2stw"
                style="border:0;width: 100%; height: 25rem;margin-bottom: -5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="single_transportation_item">
                        <h3>從高鐵台南站出發</h3>
                        <p>
                            您可搭乘高鐵接駁車，搭乘興南客運的奇美線(H62)，在南紡購物中心站下車，美美上美位於南紡購物中心對面；若您是要從高鐵駕車至診所，路線為：沿台86線東西向高速公路，接著轉入1號省道（大同路）→ 中華東路。
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="single_transportation_item">
                        <h3>自行開車</h3>
                        <p>
                            國道1號（中山高速公路）南向行駛至永康交流道後，轉接1號省道前往台南市區（中正南路→中華路→中華東路）；若北上則至仁德交流道接182縣道，進入台南市區（中山路→東門路右轉→中華東路）。
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="single_transportation_item">
                        <h3>從台南火車站出發</h3>
                        <p>
                            若您位於台南前站，可搭乘府城客運6號至後甲圓環下車，並再步行一小段路即可抵達診所；若您在台南後站（靠近香格里拉大飯店），可搭乘77號公車至南紡購物中心站下車，並再步行至對面的美美上美診所。
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="single_transportation_item">
                        <h3>搭台南公車</h3>
                        <p>
                            美美上美診所位於南紡購物中心對面，您可搭乘15、20、77號公車至南紡後，步行至對面的美美上美診所，
                        </p>
                    </div>
                </div>
        </div>
    </div>
@endsection

@push('third_party_css')
<link rel="stylesheet" href="css/images-compare.css">
@endpush
@push('custom_css')
<link rel="stylesheet" href="css/index.css?v={{ time() }}">
<style>
    .img-blog-index {
        width: 100%;
        height: 15rem;
        object-fit: cover;
        object-position: center;
    }
    .title-blog-index {
        font-size: 1.25rem !important;
    }
    @media (max-width: 768px) {
        #compare .section_title h2 {
            font-size: 1.5rem !important;
        }
        .img-blog-index {
            width: 100%;
            height: 10rem;
            object-fit: cover;
            object-position: center;
        }
        .title-blog-index {
            font-size: 1rem !important;
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
