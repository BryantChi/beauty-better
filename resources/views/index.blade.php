@extends('layouts_main.master')

@section('content')
    @include('layouts_main.hero')

    <!-- dream_service_start -->
    <div class="dream_service">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-5">
                        <span class="sub_heading">Treatment</span>
                        <h3>美美上美療程</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center treatment-slick mb-md-auto mb-5">
                <div class="mb-3">
                    <div class="single_dream text-center">
                        <div class="thumb">
                            <img src="images/services/services-01.webp" class="img-fluid w-75 mx-auto" alt="">
                        </div>
                        <h3>醫美手術</h3>
                        <p></p>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="single_dream text-center">
                        <div class="thumb">
                            <img src="images/services/services-02.webp" class="img-fluid w-75 mx-auto" alt="">
                        </div>
                        <h3>微整手術</h3>
                        <p></p>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="single_dream text-center">
                        <div class="thumb">
                            <img src="images/services/services-03.webp" class="img-fluid w-75 mx-auto" alt="">
                        </div>
                        <h3>肌膚管理</h3>
                        <p></p>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="single_dream text-center">
                        <div class="thumb">
                            <img src="images/services/services-04.webp" class="img-fluid w-75 mx-auto" alt="">
                        </div>
                        <h3>雷射光電療程</h3>
                        <p></p>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="single_dream text-center">
                        <div class="thumb">
                            <img src="images/services/services-05.webp" class="img-fluid w-75 mx-auto" alt="">
                        </div>
                        <h3>預防醫學</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dream_service_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_thumb">
                        <img src="images/about-01.jpg" class="img-fluid img-about-index" alt="">
                        {{-- <div class="exprience">
                            <h1>25</h1>
                            <span>Years of Experience</span>
                        </div> --}}
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
                        <a href="#" class="boxed-btn">了解更多 >></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <div class="my-5 bg-white">

        <div class="container">
            <div class="row">
                <div class="col-xl-12 justify-content-center">
                    <div class="section_title mb-60 text-center">
                        {{-- <span class="sub_heading"></span> --}}
                        <h3 class="title-brown">專業醫療團隊‧打造美麗極緻</h3>
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
                        <a href="#" class="boxed-btn ml-auto">更多案例 >></a>
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

    <!-- lastest_project_strat -->
    {{-- <div class="lastest_project">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <span class="sub_heading">Project view</span>
                        <h3>Our Latest Projects</h3>
                        <div class="seperator"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-xl-6 col-md-6">
                    <div class="single_project_thumb">
                        <img src="img/project/1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="section_title">
                        <span class="sub_heading2">Dubai, UAE</span>
                        <h4>Abahoni Building</h4>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor labore et dolore magna aliqua
                            quis ipsum suspendisse.</p>
                        <a href="#" class="boxed-btn">View More</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-xl-6 col-md-6">
                    <div class="section_title">
                        <span class="sub_heading2">Dhaka, Bangladesh</span>
                        <h4>MR Kholifa Tower</h4>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua
                            quis ipsum suspendisse.</p>
                        <a href="#" class="boxed-btn">View More</a>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="single_project_thumb">
                        <img src="img/project/2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-xl-6 col-md-6">
                    <div class="single_project_thumb">
                        <img src="img/project/3.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="section_title">
                        <span class="sub_heading2">Dubai, UAE</span>
                        <h4>Galoni Plan & Design</h4>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor labore et dolore magna aliqua
                            quis ipsum suspendisse.</p>
                        <a href="#" class="boxed-btn">View More</a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-80">
                <div class="col-xl-6 col-md-6">
                    <div class="section_title">
                        <span class="sub_heading2">Dhaka, Bangladesh</span>
                        <h4>Hiclick Mirror design</h4>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua
                            quis ipsum suspendisse.</p>
                        <a href="#" class="boxed-btn">View More</a>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="single_project_thumb">
                        <img src="img/project/4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- lastest_project_end -->

    <!-- testmonial_area_start -->
    {{-- <div class="testmonial_area testimonial_bg overlay2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_testmonial">
                            <div class="testmonial_info text-center">
                                <div class="author">
                                    <img src="img/testmonial/author.png" alt="">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor
                                    incididunt ut
                                    <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                    Risus
                                    commodo
                                    viverra <br> maecenas accumsan lacus vel facilisis.
                                </p>
                                <div class="author_name">
                                    <h4>-MITHILA</h4>
                                    <span> Designer at Colorlib</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_testmonial">
                            <div class="testmonial_info text-center">
                                <div class="author">
                                    <img src="img/testmonial/author.png" alt="">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor
                                    incididunt ut
                                    <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                    Risus
                                    commodo
                                    viverra <br> maecenas accumsan lacus vel facilisis.
                                </p>
                                <div class="author_name">
                                    <h4>-MITHILA</h4>
                                    <span> Designer at Colorlib</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_testmonial">
                            <div class="testmonial_info text-center">
                                <div class="author">
                                    <img src="img/testmonial/author.png" alt="">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor
                                    incididunt ut
                                    <br> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                    Risus
                                    commodo
                                    viverra <br> maecenas accumsan lacus vel facilisis.
                                </p>
                                <div class="author_name">
                                    <h4>-MITHILA</h4>
                                    <span> Designer at Colorlib</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- testmonial_area_end -->

    <!-- messege_area_start -->
    {{-- <div class="messege_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="messege_thumb">
                        <img src="img/testmonial/mesege.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="section_title mb-20">
                        <span class="sub_heading">Contact Us</span>
                        <h3>Send your message</h3>
                        <div class="seperator"></div>
                    </div>
                    <form action="#" class="messege">
                        <input type="email" placeholder="Your Email">
                        <input type="text" placeholder="Subject">
                        <textarea placeholder="Messege"></textarea>
                        <button class="boxed-btn">SEND US</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- messege_area_end -->
@endsection

@push('third_party_css')
<link rel="stylesheet" href="css/images-compare.css">
@endpush
@push('custom_css')
<link rel="stylesheet" href="css/index.css?v={{ time() }}">
@endpush
@push('third_party_scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<script type="text/javascript" src="js/jquery.images-compare.js"></script>
@endpush
@push('custom_scripts')
<script src="js/index.js?v={{ time() }}"></script>
@endpush