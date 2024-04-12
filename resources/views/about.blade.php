@extends('layouts_main.master')

@section('content')
    @include('layouts_main.sub_hero', ['bradcam_title' => '認識美美上美 / About Us'])

    <!-- about_area_start -->
    <div class="about_area">
        <div class="text-center mb-5 d-flex justify-content-center">
            <a href="javascript:void(0)" class="boxed-btn m-1" onclick="view(1)">V1</a>
            <a href="javascript:void(0)" class="boxed-btn m-1" onclick="view(2)">V2</a>
            <a href="javascript:void(0)" class="boxed-btn m-1" onclick="view(3)">V3</a>
        </div>

        <div class="container d-none2">

            <div class="row justify-content-center align-items-center view1" style="margin-bottom: 12rem;">
                <div class="col-xl-3 col-md-4 ">
                    <div class="about_thumb p-5 w-d-75 mx-auto" style="background-color: #452915;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.558);opacity: 9;border-radius: 15px;">
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
                <div class="col-xl-3 col-md-4 mb-md-0 mb-4 align-self-center2">
                    <div class="about_thumb p-5 w-d-75 mx-auto" style="background-color: #452915;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.558);opacity: 9;border-radius: 1rem;">
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
                            <h2 class="mb-3">美美上美診所｜讓你成為更美的自己</h2>
                            <p>我們致力於為您提供專業的醫學美容服務，我們秉持著一個使命：為每位客戶量身打造專屬美上美。</p>
                            <p>無論是身體曲線，或精緻立體的五官加上臉部輪廓緊緻年輕，客戶想改變的需求，我們都以認真熱誠的態度去面對，用專業精準的技術創造適合每一位顧客的專屬美麗。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-around align-items-center mb-5 py-5 view2" style="margin-bottom: 15rem;">
                <div class="col-xl-6 col-md-7 order-1 order-md-2 mb-md-auto mb-4">
                    <div class="about_thumb">
                        <img src="images//about/about-03.jpg" class="img-fluid" style="box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.558);opacity: 9;border-radius: 10rem;" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-md-5 order-2 order-md-1">
                    <div class="about_info">
                        <div class="about_content table-responsive">
                            <h2 class="mb-3">讓我們協助你擺脫歲月的痕跡</h2>
                            <p class="">在醫美診所林立的多元市場中，我們持著專業醫療人員盡心盡力的態度，提供顧客美容美體的整體規劃、統合建議，站在顧客的角度思考，絕不強迫推銷，並力求所有療程設計都可以切合顧客需要，保障顧客的安全和權益，真誠服務貫穿始終，從首次接觸到後期追蹤，我們都以顧客需求為出發點，用心聆聽、細心解答，每位顧客都能感受到像家人一般溫暖而親切的關注。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-around align-items-center mb-5 py-5 view2" style="margin-bottom: 10rem;">
                <div class="col-xl-6 col-md-7 mb-md-auto mb-4">
                    <div class="about_thumb">
                        <img src="images/about/about-04.jpg" class="img-fluid about_area_3_img" style="height: 23rem;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.558);opacity: 9;border-radius: 10rem;" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-md-5">
                    <div class="about_info">
                        <div class="about_content table-responsive">
                            <h2 class="mb-3">為何選擇我們？</h2>
                            <p>選擇美美上美診所，您也同時選擇了專業、安全和真誠，我們提供的不僅是解決方案，更是一段旅程——從第一次咨詢到最終實現夢想之美。</p>
                            <p>緊密團隊合作是我們的特點，從醫師、護士乃至行政單位，除稱職扮演自己角色外，整個團隊就像個大家庭，上下一心將服務做到出色的服務，安全至上是我們堅持不懈的原則，所有治療計劃都基於顧客具體需求定制，並在完善細節中確保每項手術與處理高效而安全，希望這種溫暖體貼的氛圍，能讓顧客有踏實穩當的安全感，讓顧客與我們緊密相連，藉由我們的牽引，讓每一位走進美上美的人邁向成為更美的自己及更幸福的境界。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid view3 p-0">
            <div class="row justify-content-center align-items-center mb-5 pb-5 mx-0" style="margin-bottom: 15rem;">
                {{-- <div class="col-xl-3 col-md-4 mb-md-auto mb-4">
                    <div class="about_thumb p-5" style="background-color: #452915;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.558);opacity: 9;border-radius: 2rem;">
                        <img src="images/about/資產 1.webp" class="img-fluid" alt="">
                    </div>
                </div> --}}
                <div class="col-xl-6 offset-xl-2 col-md-6 px-md-0 px-3">
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
                            <h2 class="mb-3">美美上美診所｜讓你成為更美的自己</h2>
                            <p>我們致力於為您提供專業的醫學美容服務，我們秉持著一個使命：為每位客戶量身打造專屬美上美。</p>
                            <p>無論是身體曲線，或精緻立體的五官加上臉部輪廓緊緻年輕，客戶想改變的需求，我們都以認真熱誠的態度去面對，用專業精準的技術創造適合每一位顧客的專屬美麗。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-start align-items-center about_area_2 mb-5 py-5 mx-0"
                style="">
                <div class="col-xl-5 offset-xl-0 col-md-7 px-md-0 px-2">
                    <div class="about_info ml-md-3">
                        <div class="about_content table-responsive">
                            <h2 class="mb-3 text-white">讓我們協助你擺脫歲月的痕跡</h2>
                            <p class="text-white">在醫美診所林立的多元市場中，我們持著專業醫療人員盡心盡力的態度，提供顧客美容美體的整體規劃、統合建議，站在顧客的角度思考，絕不強迫推銷，並力求所有療程設計都可以切合顧客需要，保障顧客的安全和權益，真誠服務貫穿始終，從首次接觸到後期追蹤，我們都以顧客需求為出發點，用心聆聽、細心解答，每位顧客都能感受到像家人一般溫暖而親切的關注。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center my-5 py-5 pl-md-0 mx-0" style="margin-bottom: 15rem;">
                <div class="col-xl-5 col-md-5 mb-md-auto mb-4 px-md-0 px-3">
                    <div class="about_thumb">
                        <img src="images/about/about-04.jpg" class="img-fluid about_area_3_img" alt="">
                    </div>
                </div>
                <div class="col-xl-7 offset-xl-0 col-md-7 px-md-5 px-3">
                    <div class="about_info">
                        <div class="about_content table-responsive">
                            <h2 class="mb-3">為何選擇我們？</h2>
                            <p>選擇美美上美診所，您也同時選擇了專業、安全和真誠，我們提供的不僅是解決方案，更是一段旅程——從第一次咨詢到最終實現夢想之美。</p>
                            <p>緊密團隊合作是我們的特點，從醫師、護士乃至行政單位，除稱職扮演自己角色外，整個團隊就像個大家庭，上下一心將服務做到出色的服務，安全至上是我們堅持不懈的原則，所有治療計劃都基於顧客具體需求定制，並在完善細節中確保每項手術與處理高效而安全，希望這種溫暖體貼的氛圍，能讓顧客有踏實穩當的安全感，讓顧客與我們緊密相連，藉由我們的牽引，讓每一位走進美上美的人邁向成為更美的自己及更幸福的境界。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- about_area_end -->

    <div class="about_sub_area">
        <div class="container">
            <div class="section_title mx-auto text-center">
                <span class="sub_heading">Core Values</span>
                <h3>美美上美的中心理念</h3>
                <div class="seperator"></div>
            </div>

            <div class="row">
                <div class="col-md mb-md-auto my-3">
                    <div class="mb-4 text-center">
                        <img src="images/about/about_sub_01.jpg" class="img-fluid about_sub_img" alt="">
                    </div>
                    <div class="single_about_sub mx-auto">
                        <h3>安全醫療</h3>
                        <p>安全是首要理念，針對個人提供術前與術後完善的照顧。</p>
                    </div>
                </div>
                <div class="col-md mb-md-auto my-3">
                    <div class="mb-4 text-center">
                        <img src="images/about/about_sub_02.jpg" class="img-fluid about_sub_img" alt="">
                    </div>
                    <div class="single_about_sub mx-auto">
                        <h3>諮詢規劃</h3>
                        <p>提供完整、適切、專屬於您的美學建議，尊重顧客的意願，不強迫推銷。</p>
                    </div>
                </div>
                <div class="col-md mb-md-auto my-3">
                    <div class="mb-4 text-center">
                        <img src="images/about/about_sub_03.jpg" class="img-fluid about_sub_img" alt="">
                    </div>
                    <div class="single_about_sub mx-auto">
                        <h3>精進技術</h3>
                        <p>醫師皆定期進修，帶回最新觀念及技術。並發表演講於各個學術研討會。</p>
                    </div>
                </div>
                <div class="col-md mb-md-auto my-3">
                    <div class="mb-4 text-center">
                        <img src="images/about/about_sub_04.jpg" class="img-fluid about_sub_img" alt="">
                    </div>
                    <div class="single_about_sub mx-auto">
                        <h3>顧客與員工</h3>
                        <p>我們重視所有的顧客，也重視所有的員工。我們深信，有快樂的員工，才能提供顧客滿意的服務。</p>
                    </div>
                </div>
                <div class="col-md mb-md-auto my-3">
                    <div class="mb-4 text-center">
                        <img src="images/about/about_sub_05.jpg" class="img-fluid about_sub_img" alt="">
                    </div>
                    <div class="single_about_sub mx-auto">
                        <h3>細緻服務</h3>
                        <p>從診所環境規劃、諮詢、醫療操作到術後照顧，完整提供您無微不至的服務。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom_css')
    <link rel="stylesheet" href="assets/css/about.css?v={{ time() }}">
    <style>
        @media (max-width: 768px) {
            .w-d-75 {
                width: 75% !important;
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
                $('.view3').hide();
            } else if (type == 2) {
                $('.view1').hide();
                $('.view2').show();
                $('.view3').hide();
            } else if (type == 3) {
                $('.view1').hide();
                $('.view2').hide();
                $('.view3').show();
            }
        }
    </script>
@endpush
