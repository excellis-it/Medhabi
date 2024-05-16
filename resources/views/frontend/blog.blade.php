@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    {{ env('APP_NAME') }} - Blogs
@endsection
@push('styles')
@endpush

@section('content')
    <section class="hero--Inner-page-banner"
        style="background-image: url({{ asset('frontend_assets/images/banner/blog-banner.jpg') }});  background-size: cover; background-position: center;">
        <div class="container-fluid custom-width__2">
            <div class="row">
                <div class="page-title">
                    <h1 class="title">Blogs</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="blog_listing position-relative">
        <div class="container-fluid custom-width__2">
            <div class="row custom-padding" id="blog-container">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="medhavi_blog_wrap">
                            <div class="rbt-card-blog rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="{{ route('blog.details', ['slug' => $blog['slug']]) }}">
                                        <img src="{{ Storage::url($blog->image) }}" alt="Card image">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h4 class="rbt-card-title">
                                        <a
                                            href="{{ route('blog.details', ['slug' => $blog['slug']]) }}">{{ $blog['name'] }}</a>
                                    </h4>
                                    <p class="rbt-card-subtext">
                                        {{ Str::words($blog->short_description, $words = 20, $end = '...') }}
                                    </p>
                                    <a class="arrow-btn" href="{{ route('blog.details', ['slug' => $blog['slug']]) }}">READ
                                        MORE<i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="view_all_button_bg" id="load-more-posts">
                    <a href="javascript:void(0);" onclick="loadMoreBlogs();">
                        <div class="view_all_button">Load More</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        var offset = {{ $blogs->count() }};
        var limit = 6; // Change this to the number of blogs to load per request
        var loading = false;

        $(document).ready(function() {
            $('#load-more-posts').click(function() {
                if (!loading) {
                    loading = true;
                    $.ajax({
                        url: '{{ route('load-more-blogs') }}',
                        type: 'GET',
                        data: {
                            offset: offset,
                            limit: limit
                        },
                        success: function(response) {
                            if (response.length > 0) {
                                var html = '';
                                $.each(response, function(index, blog) {
                                    var blogSlug = blog.slug;
                                    var route = "{{ route('blog.details', ':slug') }}";
                                    var route = route.replace(':slug', blogSlug);
                                    var image = "{{ Storage::url('') }}" + blog.image;

                                    html += '<div class="col-lg-4 col-md-6">';
                                    html += '<div class="medhavi_blog_wrap">';
                                    html += '<div class="rbt-card-blog rbt-hover">';
                                    html += '<div class="rbt-card-img">';
                                    html +=
                                        '<a href="'+route+'">'; // Use inline PHP for route
                                    html += '<img src="'+image+'" alt="Card image">'; // Use inline PHP for Storage::url
                                    html += '</a>';
                                    html += '</div>';
                                    html += '<div class="rbt-card-body">';
                                    html += '<h4 class="rbt-card-title">';
                                    html += '<a href="' + route + '">' +
                                        blog.name + '</a>';
                                    html += '</h4>';
                                    html += '<p class="rbt-card-subtext">';
                                    html += blog.short_description;
                                    html += '</p>';
                                    html += '<a class="arrow-btn" href="' + route +
                                        '">READ MORE<i class="ri-arrow-right-s-line"></i></a>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                    html += '</div>';
                                });
                                $('#blog-container').append(html);
                                offset += response.length;
                            } else {
                                $('#load-more-posts')
                                    .hide(); // Hide the button if no more posts
                            }
                        },
                        complete: function() {
                            loading = false;
                        }
                    });
                }
            });
        });
    </script>
@endpush
