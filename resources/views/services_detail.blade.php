@extends('layouts_main.master')

@section('content')
    @include('layouts_main.sub_hero', ['bradcam_title' => '療程項目 / Services'])

    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ $postInfo->post_front_cover ?? null ? env('APP_URL', 'https://beauty4u-clinic.com') . '/uploads/' . $postInfo->post_front_cover : asset('images/about/about-05.jpg') }}" alt="{{ $postInfo->post_seo_title }}" />
                        </div>
                        <div class="blog_details table-responsive">
                            <h2>
                                {{ $postInfo->post_title }}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4 ml-auto">
                                <li><a href="{{ route('services.items', DB::table('post_type_infos')->where('id', $postInfo->post_type)->value('type_slug'))  }}"><i class="fas fa-flag"></i> {{ DB::table('post_type_infos')->where('id', $postInfo->post_type)->value('type_name') }}</a></li>
                                <li><a href="javascript:void(0)"><i class="fas fa-calendar-alt"></i> {{ \Carbon\Carbon::parse($postInfo->created_at)->format('d M, Y') }}</a></li>
                            </ul>

                            {!! $postInfo->post_content !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                @foreach ($typeInfo as $type)
                                @php
                                    if ($type->id == 13) {
                                        continue;
                                    }
                                @endphp
                                <li>
                                    <a href="{{ route('services.items', DB::table('post_type_infos')->where('id', $type->id)->value('type_slug')) }}" class="d-flex">
                                        <p>{{ $type->type }}</p>
                                        <p>({{ $type->count }})</p>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>

                        {{-- <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/post/post_5.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/post/post_6.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/post/post_7.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/post/post_8.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/post/post_9.png') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset('assets/img/post/post_10.png') }}" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('third_party_css')
    <style>
        .blog_details img {
            max-width: 100% !important;
        }

        .blog_details iframe {
            max-width: 100% !important;
            height: 25rem;
        }

        @media (max-width: 768px) {
            .blog_details img {
                max-width: 100% !important;
                height: auto !important;
            }

            .blog_details iframe {
                max-width: 100% !important;
                height: 15rem !important;
            }
        }
    </style>
@endpush