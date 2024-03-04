@if (count($courses) > 0)
<div class="row g-lg-5">
    <div class="col-lg-12">
        <div class="enriching-list">
            <ul id="dept-main-ui">
                @foreach ($courses as $course)
                    <li class="allcls" data-category="bachelor" data-program="bsc">
                        <a href="{{ route('course', $course['slug']) }}">{{ $course['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@else
<div class="col-lg-12 col-md-12">
    <div class="text-center mt-5 text-danger">
        <h3>No Course Found</h3>
    </div>
</div>
@endif
