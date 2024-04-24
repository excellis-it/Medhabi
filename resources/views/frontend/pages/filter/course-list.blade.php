@if (count($courses) > 0)
    <div class="row g-lg-5">
        <div class="col-lg-12">
            <div class="enriching-list">
                <ul id="dept-main-ui">
                    @foreach ($courses as $course)
                        <li class="allcls" data-category="master" data-program="ma">
                            @if ($course['slug'] != null)
                            <a href="{{ route('course', $course['slug']) }}">{{ $course['name'] }}</a>
                            @else
                            <a href="javascript:void(0);">{{ $course['name'] }}</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
