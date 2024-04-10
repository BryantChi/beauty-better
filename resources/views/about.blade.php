@extends('layouts_main.master')

@section('content')
    @include('layouts_main.sub_hero', ['bradcam_title' => '認識美美上美 / About Us'])

    <!-- about_area_start -->
    <div class="about_area">
        <div class="text-center mb-5">
            <a href="javascript:void(0)" class="boxed-btn mx-1" onclick="view(1)">版本一</a>
            <a href="javascript:void(0)" class="boxed-btn mx-1" onclick="view(2)">版本二</a>
        </div>

        <div class="container">

            <div class="row justify-content-center align-items-center view1" style="margin-bottom: 12rem;">
                <div class="col-xl-3 col-md-4">
                    <div class="about_thumb p-5" style="background-color: #452915;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.558);opacity: 9;border-radius: 15px;">
                        <img src="images/about/資產 1.webp" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-md-8">
                    <div class="about_info">
                        <div class="section_title">
                            <span class="sub_heading">About Us</span>
                            <h3>MakeYou <br>
                                A Better You</h3>
                            <div class="seperator"></div>
                        </div>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis. </p>
                        <ul class="about_list">
                            <li>Consectetur adipiscing sed do eiusmod. </li>
                            <li>Eiusmod tempor incididunt labore. </li>
                        </ul>
                        <a href="#" class="boxed-btn">Services</a> --}}
                        <div class="about_content table-responsive">
                            {!! $aboutInfo->contents !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center mb-5 pb-5 view2" style="margin-bottom: 15rem;">
                <div class="col-xl-3 col-md-4 mb-md-auto mb-4">
                    <div class="about_thumb p-5" style="background-color: #452915;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.558);opacity: 9;border-radius: 2rem;">
                        <img src="images/about/資產 1.webp" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-md-8">
                    <div class="about_info">
                        <div class="section_title">
                            <span class="sub_heading">About Us</span>
                            <h3>MakeYou <br>
                                A Better You</h3>
                            <div class="seperator"></div>
                        </div>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis. </p>
                        <ul class="about_list">
                            <li>Consectetur adipiscing sed do eiusmod. </li>
                            <li>Eiusmod tempor incididunt labore. </li>
                        </ul>
                        <a href="#" class="boxed-btn">Services</a> --}}
                        <div class="about_content table-responsive">
                            本院醫療團隊的宗旨在打造客戶專有的美上美，無論是身體曲線，或精緻立體的五官加上臉部輪廓緊緻年輕，客戶想改變的需求，我們都以認真熱誠的態度去面對，用專業精準的技術創造適合每一位顧客的專屬美麗。
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-around align-items-center mb-5 py-5 view2" style="margin-bottom: 15rem;">
                <div class="col-xl-6 col-md-7 order-1 order-md-2 mb-md-auto mb-4">
                    <div class="about_thumb">
                        <img src="images/about-01.jpg" class="img-fluid" style="box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.558);opacity: 9;border-radius: 10rem;" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-md-5 order-2 order-md-1">
                    <div class="about_info">
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis. </p>
                        <ul class="about_list">
                            <li>Consectetur adipiscing sed do eiusmod. </li>
                            <li>Eiusmod tempor incididunt labore. </li>
                        </ul>
                        <a href="#" class="boxed-btn">Services</a> --}}
                        <div class="about_content table-responsive mt-md-5 pt-md-5">
                            在醫美診所林立的多元市場中，我們持著專業醫療人員盡心盡力的態度，提供顧客美容美體的整體規劃、統合建議，站在顧客的角度思考，絕不強迫推銷，並力求所有療程設計都可以切合顧客需要，保障顧客的安全和權益。
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-around align-items-center mb-5 py-5 view2" style="margin-bottom: 10rem;">
                <div class="col-xl-6 col-md-7 mb-md-auto mb-4">
                    <div class="about_thumb">
                        <img src="images/about/about-02.webp" class="img-fluid" style="box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.558);opacity: 9;border-radius: 10rem;" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-md-5">
                    <div class="about_info">
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis. </p>
                        <ul class="about_list">
                            <li>Consectetur adipiscing sed do eiusmod. </li>
                            <li>Eiusmod tempor incididunt labore. </li>
                        </ul>
                        <a href="#" class="boxed-btn">Services</a> --}}
                        <div class="about_content table-responsive mt-md-5 pt-md-5">
                            緊密團隊合作是我們的特點，從醫師、護士乃至行政單位，除稱職扮演自己角色外，整個團隊就像個大家庭，上下一心將服務做到出色的服務，希望這種溫暖體貼的氛圍，能讓顧客有踏實穩當的安全感。讓顧客與我們緊密相連，藉由我們的牽引，讓每一位走進美上美的人邁向成為更美的自己及更幸福的境界。
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->
@endsection
@push('custom_css')
    <style>
        .about_area {
            background-image: url("images/about/about-bg2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        @media (max-width: 767px) {
            .about_area {
                background-image: url("images/about/about-bg-mob2.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }
        }
    </style>
@endpush
@push('custom_scripts')
    <script>
        view(1);
        function view(type) {
            if (type == 1) {
                $('.view1').show();
                $('.view2').hide();
            } else if (type == 2) {
                $('.view1').hide();
                $('.view2').show();
            }
        }
    </script>
@endpush
