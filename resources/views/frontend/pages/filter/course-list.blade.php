@if (count($courses) > 0)
    <div class="row g-lg-5">
        <div class="col-lg-12">
            <div class="enriching-list">
                <ul id="dept-main-ui">
                    @foreach ($courses as $course)
                        <li class="allcls" data-category="master" data-program="ma">
                            <a href="{{ route('course', $course['slug']) }}">{{ $course['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
