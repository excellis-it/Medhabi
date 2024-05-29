@extends('frontend.layouts.master')
@section('meta_title')
    <meta name="description"
        content="Stay updated with the latest news and updates from Medhavi Skills University, including academic achievements, events, and collaborations shaping the future of education.
" />
@endsection
@section('title')
    {{ env('APP_NAME') }} - Latest News and Updates
@endsection
@push('styles')
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5HHK5ZC');
    </script>
    <!-- End Google Tag Manager -->

    <meta name="p:domain_verify" content="c711886600acc8f58440b8a66c9756ce" />

    <!-- Global site tag (gtag.js) - Google Ads: 10779528309 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10779528309"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10779528309');
    </script>

    <style>
        .rbt-card-subtext {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .view_all_button {
            padding: 10px 40px;
            border-radius: 5px;
            background-color: #0B7EAE;
            color: white;
            width: max-content;
        }

        .view_all_button_bg a {
            width: max-content;
        }

        .view_all_button_bg {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@endpush

@section('content')
    <section class="hero--Inner-page-banner"
        style="background-image: url({{ asset('frontend_assets/images/banner/BLOGS.jpg') }});  background-size: cover; background-position: center;">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="page-title">
                    <h1 class="title">News</h1>
                    <!-- <p>
                Find our blogs
              </p> -->
                </div>
            </div>
        </div>
    </section>


    <section class="blog_listing position-relative">
        <div class="container-fluid custom-width__2">
            <div class="row g-lg-5 g-4">
                @if (count($newses) > 0)
                    @foreach ($newses as $news)
                        <div class="col-lg-4 col-md-6">
                            <div class="medhavi_blog_wrap">
                                <div class="rbt-card-blog rbt-hover">
                                    <div class="rbt-card-img">
                                        <a
                                            href="{{ $news->slug ? route('news.details', ['slug' => $news->slug]) : 'javascript:void(0);' }}">
                                            @if ($news->image)
                                                <img src="{{ Storage::url($news->image) }}" alt="Card image">
                                            @else
                                                <img src="{{ asset('assets/images/blog/yoga_1.jpg') }}" alt="Card image">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="rbt-card-body">
                                        <h4 class="rbt-card-title">
                                            <a
                                                href="{{ $news->slug ? route('news.details', ['slug' => $news->slug]) : 'javascript:void(0);' }}">
                                                {{ $news->name }}
                                            </a>
                                        </h4>
                                        <p class="rbt-card-subtext">
                                            {{ Str::words($news->short_description, $words = 20, $end = '...') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
