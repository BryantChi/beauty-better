@php
    $contact = App\Models\Admin\CompanyInfo::first();
    $servicesInfos = \App\Models\Admin\ServicesInfo::get('service_name');
@endphp
<!-- footer_start -->
<footer class="footer footer_bg">
    <div class="footer_top">
        <div class="container-fluid p-0">
            <div class="row no-gutters ">
                <div class="col-xl-3 col-12 col-md-4">
                    <div class="footer_widget">
                        <div class="footer_logo text-lg-center">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('images/logo_footer.png') }}" class="img-fluid w-50" alt="">
                            </a>
                        </div>
                        <ul class="social_links text-lg-center">
                            <li>
                                <a href="{{ $contact->company_facebook ?? 'javascript:void(0)' }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="{{ $contact->company_line ?? 'javascript:void(0)' }}" target="_blank"><i class="fa-brands fa-line"></i></a>
                            </li>
                            <li>
                                <a href="{{ $contact->company_instagram ?? 'javascript:void(0)' }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="{{ $contact->company_youtube ?? 'javascript:void(0)' }}" target="_blank"><i class="fa-brands fa-youtube"></i></a>
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
                        <div class="col-xl-9 col-12 col-md-12">
                            <div class="row">
                                <div class="col-xl-4 col-12 col-md-4">
                                    <div class="footer_widget">
                                        <p class="h3 footer_heading">
                                            導覽列
                                        </p>
                                        <ul class="quick_links">
                                            <li><a href="{{ route('index') }}/#about">診所介紹</a></li>
                                            <li><a href="{{ route('teams') }}">醫師團隊</a></li>
                                            {{-- <li><a href="{{ route('case') }}">美麗見證</a></li> --}}
                                            <li><a href="{{ route('blog') }}">醫師專欄</a></li>
                                            <li><a href="{{ route('contact') }}">聯絡資訊</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-12 col-md-4">
                                    <div class="footer_widget">
                                        <p class="h3 footer_heading">
                                            療程項目
                                        </p>
                                        <ul class="quick_links">
                                            @foreach ($servicesInfos ?? [] as $service)
                                            <li>
                                                <a href="{{ route('services.items', DB::table('post_type_infos')->whereNull('deleted_at')->where('deleted_at', null)->where('type_name', 'like', '%' . $service->service_name . '%')->value('type_slug')) }}">
                                                    {{ $service->service_name }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-12 col-md-4 ">
                                    <div class="footer_widget">
                                        <p class="h3 footer_heading">
                                            聯繫資訊
                                        </p>
                                        <ul class="quick_links" style="line-height: 1.2rem !important;">
                                            <li class="mb-3"><a href="tel:{{ $contact->company_phone ?? 'javascript:void(0)' }}" style="line-height: 1rem !important;">電話:
                                                    {{ $contact->company_phone ?? '' }}</a></li>
                                            <li class="mb-3"><a
                                                    href="mailto:{{ $contact->company_email ?? 'javascript:void(0)' }}" style="line-height: 1rem !important;">{{ $contact->company_email ?? '' }}</a>
                                            </li>
                                            <li class="mb-3">
                                                <a href="{{ $contact->company_map_url ?? 'javascript:void(0)' }}" style="line-height: 1rem !important;">{{ $contact->company_address ?? '' }}</a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="javascript:void(0)" style="line-height: 1rem !important;">
                                                    營業時間:週一至週六 10:00–18:00 (周日公休)
                                                </a>
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
