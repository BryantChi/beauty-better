<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
            <div class="title-heading justify-content-center align-items-end">
                {{-- <h3 class="text-white pt-5 mt-5">{{ $breadcrumb_title }}</h3> --}}
                <div class="breadcrumb-position">
                    <nav aria-label="breadcrumb" class="d-inline-block">
                        <ul class="breadcrumb bg-white rounded shadow-md mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}"><i class="fas fa-home"></i></a>
                            </li>
                            <li class="breadcrumb-item font-weight-bold" style="color: #3c4858;">></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Page</a></li>
                            <li class="breadcrumb-item font-weight-bold" style="color: #3c4858;">></li>
                            <li class="breadcrumb-item active" aria-current="page" style="text-transform: capitalize;">
                                {{ $breadcrumb_title }}</li>
                            {{-- {{ request()->route()->getName() }} --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
</div>



@push('third_party_css')
    <style>
        .title-heading .breadcrumb-position {
            position: relative;
            top: 140px;
            /* top: -170px; */
            z-index: 99;
        }

        .breadcrumb {
            letter-spacing: 0.5px;
            padding: 8px 24px;
            display: block;
            box-shadow: #3c4858 0px 0px 20px;
        }

        .breadcrumb .breadcrumb-item {
            font-size: 14px;
            font-weight: 700;
            padding-left: 0;
            display: inline-block;
        }

        .breadcrumb .breadcrumb-item a {
            color: #3c4858;
        }

        .breadcrumb .breadcrumb-item a:hover {
            /* color: #726ae9; */
            /* color: #714288; */
            color: #9873b9;
        }

        .breadcrumb .breadcrumb-item.active {
            /* color: #726ae9; */
            /* color: #714288; */
            color: #9873b9;
        }

        .breadcrumb .breadcrumb-item:before {
            content: "";
        }

        /* .breadcrumb .breadcrumb-item:after {
            content: "\F0142" !important;
            content: ">" !important;
            font-size: 14px;
            color: #3c4858;
            font-family: "Material Design Icons";
            padding-left: 5px;
        } */

        .breadcrumb .breadcrumb-item:last-child:after {
            display: none;
        }

        @media (max-width: 768px) {
            .title-heading .breadcrumb-position {
                position: relative;
                top: 80px;
                /* top: -170px; */
                z-index: 99;
            }
        }
    </style>
@endpush
