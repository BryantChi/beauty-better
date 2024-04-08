<!-- slider_area_start -->
<div class="slider_area position-relative">
    <div class="swiper heroSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#" class="w-100 h-100">
                    <img src="images/hero-default.webp" class="img-fluid hero-img" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#" class="w-100 h-100">
                    <img src="images/hero-default-02.webp" class="img-fluid hero-img" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#" class="w-100 h-100">
                    <img src="images/hero-default-03.webp" class="img-fluid hero-img" alt="">
                </a>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="overlay-hero-bottom"></div>
    {{-- <div class="slider_active owl-carousel">
        <div class="single_slider overlay2 d-flex align-items-center justify-content-center slider_bg_">
            <a href="#" class="w-100 h-100">
                <img src="images/hero-default.webp" class="img-fluid hero-img" alt="">
            </a>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>We Design your space</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor</p>
                            <a href="#" class="boxed-btn2">See Our Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider overlay2 d-flex align-items-center justify-content-center slider_bg_">
            <a href="#" class="w-100 h-100">
                <img src="images/hero-default-02.webp" class="img-fluid hero-img" alt="">
            </a>
        </div>
        <div class="single_slider overlay2 d-flex align-items-center justify-content-center slider_bg_">
            <a href="#" class="w-100 h-100">
                <img src="images/hero-default-03.webp" class="img-fluid hero-img" alt="">
            </a>
        </div>
    </div> --}}
</div>
<!-- slider_area_end -->
@push('third_party_css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush
@push('custom_css')
    <style>
        .slider_area{
            height: 42rem;
        }
        .heroSwiper {
            width: 100%;
            height: 100%;
        }

        .heroSwiper .swiper-slide {
            background-position: center;
            background-size: cover;
        }

        .heroSwiper .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            background: #cecece;
        }

        .heroSwiper .swiper-button-next:after,
        .heroSwiper .swiper-button-prev:after {
            font-size: 16px;
            color: #ffffff;
            background: #eeeeeecc;
            padding: 15px 20px;
            border-radius: 50%;
        }

        .overlay-hero-bottom {
            position: absolute;
            width: 100%;
            height: 5rem;
            bottom: 0;
            z-index: 3;
            text-shadow: 0 0 100px whitesmoke;
            opacity: 9;
            background-image: linear-gradient(0deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0.87) 25%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0.22) 75%,rgb(255, 255, 255, 0) 100%);
        }

        @media (max-width: 768px) {
            .slider_area{
                height: 23rem;
            }
            .heroSwiper {
                height: 100%;
            }

            /* .heroSwiper .swiper-button-next, .heroSwiper .swiper-button-prev {
                display: none;
            } */
        }
    </style>
@endpush
@push('third_party_scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endpush
@push('custom_scripts')
    <script>
        var swiper = new Swiper(".heroSwiper", {
            loop: true,
            autoplay: true,
            autoheight: true,
            centeredSlides: true,
            slidesPerView: 1,
            spaceBetween: 30,
            effect: "fade",
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endpush
