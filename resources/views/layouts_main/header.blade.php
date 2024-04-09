<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area white-bg" style="background: #5703863 !important;">
            <div class="container-fluid p-0">
                <div class="row align-items-center justify-content-between no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="{{ route('index') }}">
                                <img src="images/logo_full_bk.png" class="img-fluid img-logo" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="main-menu  d-none d-lg-block">
                            {{-- request()->is('news') ? 'active' : '' --}}
                            <nav>
                                <ul id="navigation">
                                    <li><a class="{{ Request::is('index') ? 'active' : '' }}" href="{{ route('index') }}">首頁</a></li>
                                    <li><a class="{{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">關於美美</a></li>
                                    {{-- <li><a href="project.html">Projects</a></li> --}}
                                    {{-- <li><a href="service.html">療程項目</a></li> --}}
                                    <li><a href="service.html">醫師團隊</a></li>
                                    <li><a href="service.html">診所資訊</a></li>
                                    <li><a href="service.html">美麗見證</a></li>
                                    <li><a href="service.html">醫師專欄</a></li>

                                    <li><a href="#">療程項目 <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="single-blog.html">single-blog</a></li>
                                        </ul>
                                    </li>
                                    {{-- <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="project-details.html">project-details</a></li>
                                            <li><a href="elements.html">elements</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="contact.html">聯絡資訊</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        <div class="get_in_tauch">
                            <a href="#" class="boxed-btn">GET IN TOUCH</a>
                        </div>
                    </div> --}}
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
