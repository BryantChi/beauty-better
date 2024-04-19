@php
    $contact = App\Models\Admin\CompanyInfo::first();
@endphp
<!-- footer_start -->
<footer class="footer footer_bg">
    <div class="footer_top">
        <div class="container-fluid p-0">
            <div class="row no-gutters ">
                <div class="col-xl-3 col-12 col-md-4">
                    <div class="footer_widget">
                        <div class="footer_logo text-center">
                            <a href="index.html">
                                <img src="images/logo_bk.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <ul class="social_links text-center">
                            <li>
                                <a href="{{ $contact->company_facebook ?? 'javascript:void(0)' }}"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="{{ $contact->company_line ?? 'javascript:void(0)' }}"><i class="fa-brands fa-line"></i></a>
                            </li>
                            <li>
                                <a href="{{ $contact->company_instagram ?? 'javascript:void(0)' }}"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="{{ $contact->company_youtube ?? 'javascript:void(0)' }}"><i class="fa-brands fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-12 col-md-8">
                    {{-- <div class="footer_header d-flex justify-content-between">
                        <div class="footer_header_left">
                            <h3>Do youn have any project or Query ?</h3>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt. </p>
                        </div>
                        <div class="footer_btn">
                            <a href="#" class="boxed-btn2">Contact Us</a>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-xl-8 col-12 col-md-12">
                            <div class="row">
                                <div class="col-xl-4 col-12 col-md-4">
                                    <div class="footer_widget">
                                        <h3 class="footer_heading">
                                            導覽列
                                        </h3>
                                        <ul class="quick_links">
                                            <li><a href="{{ route('index') }}">Home</a></li>
                                            <li><a href="{{ route('about') }}">關於美美</a></li>
                                            <li><a href="{{ route('teams') }}">醫師團隊</a></li>
                                            <li><a href="javascript:void(0)">療程項目</a></li>
                                            <li><a href="{{ route('case') }}">美麗見證</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-12 col-md-4">
                                    <div class="footer_widget">
                                        <h3 class="footer_heading">
                                            療程項目
                                        </h3>
                                        <ul class="quick_links">
                                            <li><a href="javascript:void(0)">項目一</a></li>
                                            <li><a href="javascript:void(0)">項目二</a></li>
                                            <li><a href="javascript:void(0)">項目三</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-12 col-md-4 ">
                                    <div class="footer_widget">
                                        <h3 class="footer_heading">
                                            聯繫資訊
                                        </h3>
                                        <ul class="quick_links">
                                            <li><a href="tel:{{ $contact->company_phone ?? '' }}">電話:
                                                    {{ $contact->company_phone ?? '' }}</a></li>
                                            <li><a
                                                    href="mailto:{{ $contact->company_email ?? '' }}">{{ $contact->company_email ?? '' }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copy_right">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>
                document.write(new Date().getFullYear());
            </script> All rights reserved | 美美上美 <i class="fas fa-heart" aria-hidden="true"></i> design
            by <a href="mailto:bryantchi.work@gmail.com" target="_blank">MWStudio - Bryant</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
    </div>
</footer>
<!-- footer_end -->
