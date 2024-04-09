@extends('layouts_main.master')

@section('content')
    @include('layouts_main.sub_hero', ['bradcam_title' => '關於美美'])

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-3 col-md-4">
                    <div class="about_thumb p-5" style="background-color: #452915;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.558);opacity: 9;">
                        <img src="images/about/資產 1.webp" class="img-fluid" alt="">
                            {{-- <div class="exprience">
                                <h1>25</h1>
                                <span>Years of Experience</span>
                            </div> --}}
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
        </div>
    </div>
    <!-- about_area_end -->
@endsection
