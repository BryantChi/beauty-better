<!-- breadcam_area_start -->
<div class="breadcam_area bradcam_bg overlay2 position-relative">
    <img src="{{ $pageSettings->banner == '' ? 'images/hero-sub-default.webp' : $pageSettings->banner }}" class="img-fluid d-none d-md-block sub-hero-img" alt="{{ $pageSettings->banner_alt ?? '' }}">
    <img src="{{ $pageSettings->banner_mob == '' ? 'images/hero-sub-default.webp' : $pageSettings->banner_mob }}" class="img-fluid d-block d-md-none sub-hero-img" alt="{{ $pageSettings->banner_alt_mob ?? '' }}">
    <div class="overlay2 sub-hero-overlay"></div>
    <div class="bradcam_text">
        <h3>{{ $bradcam_title }}</h3>
    </div>
</div>
<!-- breadcam_area_end -->
@push('third_party_css')
    <style>
        .sub-hero-img {
            z-index: 0;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        .sub-hero-overlay {
            z-index: 1;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .bradcam_text {
            position: relative;
            z-index: 2;
        }
    </style>
@endpush
