@extends('layouts_main.master')

@section('content')
    @include('layouts_main.sub_hero', ['bradcam_title' => '聯絡我們 / <br class="d-block d-md-none">Contact Us'])

    <section class="contact_area contact-section">
        <div class="container">
            <div class="mb-5 pb-4">
                <div id="map" style="height: 480px; position: relative; overflow: hidden;">

                    {!! $companyInfo->company_map_iframe !!}
                </div>

            </div>


            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                {{-- <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Name"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                        placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                        placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                    </form>
                </div> --}}
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info align-items-center">
                        <span class="contact-info__icon"><i class="fas fa-map-marked-alt"></i></span>
                        <div class="media-body">
                            <h3><a href="{{ $companyInfo->company_map_url }}"
                                    target="_blank">{{ $companyInfo->company_address }}</a></h3>
                            {{-- <p></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info align-items-center">
                        <span class="contact-info__icon"><i class="fas fa-phone-alt"></i></span>
                        <div class="media-body">
                            <h3><a href="tel:{{ $companyInfo->company_phone }}">{{ $companyInfo->company_phone }}</a></h3>
                            <p>週一至週六 10:00–18:00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 {{ $companyInfo->company_fax == null ? 'd-none' : '' }}">
                    <div class="media contact-info align-items-center">
                        <span class="contact-info__icon"><i class="fas fa-phone-alt"></i></span>
                        <div class="media-body">
                            <h3><a href="tel:{{ $companyInfo->company_fax }}">{{ $companyInfo->company_fax }}</a></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 {{ $companyInfo->company_mail == null ? 'd-none' : '' }}">
                    <div class="media contact-info align-items-center">
                        <span class="contact-info__icon"><i class="fas fa-envelope"></i></span>
                        <div class="media-body">
                            <h3><a
                                    href="mailto:{{ $companyInfo->company_mail ?? '' }}">{{ $companyInfo->company_mail ?? '' }}</a>
                            </h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 {{ $companyInfo->company_facebook == null ? 'd-none' : '' }}">
                    <div class="media contact-info align-items-center">
                        <span class="contact-info__icon"><i class="fab fa-facebook"></i></span>
                        <div class="media-body">
                            <h3><a href="{{ $companyInfo->company_facebook }}"
                                    target="_blank">{{ $companyInfo->company_name }}</a></h3>
                            {{-- <p></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 {{ $companyInfo->company_line == null ? 'd-none' : '' }}">
                    <div class="media contact-info align-items-center">
                        <span class="contact-info__icon"><i class="fab fa-line"></i></span>
                        <div class="media-body">
                            <h3><a href="{{ $companyInfo->company_line }}"
                                    target="_blank">{{ $companyInfo->company_name }}</a></h3>
                            {{-- <p></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 {{ $companyInfo->company_instagram == null ? 'd-none' : '' }}">
                    <div class="media contact-info align-items-center">
                        <span class="contact-info__icon"><i class="fab fa-instagram"></i></span>
                        <div class="media-body">
                            <h3><a href="{{ $companyInfo->company_instagram }}"
                                    target="_blank">{{ $companyInfo->company_name }}</a></h3>
                            {{-- <p></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 {{ $companyInfo->company_youtube == null ? 'd-none' : '' }}">
                    <div class="media contact-info align-items-center">
                        <span class="contact-info__icon"><i class="fab fa-youtube"></i></span>
                        <div class="media-body">
                            <h3><a href="{{ $companyInfo->company_youtube }}"
                                    target="_blank">{{ $companyInfo->company_name }}</a></h3>
                            {{-- <p></p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('custom_css')
    <style>
        .contact_area {
            background-image: url("../../images/about/about-bg2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        #map iframe {
            border: 0;
            width: 100% !important;
            height: 100% !important;
        }

        .media-body a:hover {
            color: #570386 !important;
        }

        .media-body p {
            margin-bottom: 0 !important;
        }

        @media (max-width: 767px) {
            .contact_area {
                background-image: url("../../images/about/about-bg-mob2.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }
        }
    </style>
@endpush
@push('custom_scripts')
@endpush
