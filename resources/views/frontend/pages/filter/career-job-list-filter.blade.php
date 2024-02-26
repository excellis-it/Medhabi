@if (count($jobs) > 0)
<div class="col-lg-4 col-md-12">
    <div class="advance-tab-button advance-tab-button-1">
        <ul class="nav nav-tabs tab-button-list flex-column" id="aboutmyTab" role="tablist">
            @foreach ($jobs as $key => $value)
                <li class="nav-item" role="presentation">
                    <a href="javascript:void(0);"
                        class="nav-link tab-button {{ $key == 0 ? 'active' : '' }}"
                        id="home-tab-{{ $key + 1 }}" data-bs-toggle="tab"
                        data-bs-target="#home-{{ $key + 1 }}" role="tab"
                        aria-controls="home-{{ $key + 1 }}" aria-selected="true">
                        <div class="tab">
                            {{-- <h6>Healthcare &Allied Sciences > Medical Lab Technology</h6> --}}
                            <h4 class="title">{{ $value['title'] }}</h4>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="col-lg-8 col-md-12">
    <div class="tab-content">
        @foreach ($jobs as $key => $job)
            <div class="tab-pane fade advance-tab-content-1 {{ $key == 0 ? 'active show' : '' }} "
                id="home-{{ $key + 1 }}" role="tabpanel"
                aria-labelledby="home-tab-{{ $key + 1 }}">

                <div class="career_tab_content">
                    <h3 class="tab_career_title">Careers</h3>
                    <p class="tab_career_title">{{ $job['description'] }}</p>

                    <ul class="list-unstyled careers__pointers">
                        <li>
                            <div class="left__bx d-flex align-items-center">
                                <div class="icon">
                                    <img src="{{ asset('frontend_assets/images/icons/001-adaptation.svg') }}"
                                        alt="">
                                </div>
                                <p>Eligibility:</p>
                            </div>
                            <div class="contentWrapRight">
                                <p>{{ $job['eligibility'] }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="left__bx d-flex align-items-center">
                                <div class="icon">
                                    <img src="{{ asset('frontend_assets/images/icons/002-open-sign.svg') }}"
                                        alt="">
                                </div>
                                <p>Opening:</p>
                            </div>
                            <div class="contentWrapRight">
                                <p>{{ $job['opening_for'] }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="left__bx d-flex align-items-center">
                                <div class="icon">
                                    <img src="{{ asset('frontend_assets/images/icons/003-placeholder.svg') }}"
                                        alt="">
                                </div>
                                <p>Location:</p>
                            </div>
                            <div class="contentWrapRight">
                                <p>{{ $job['location'] }}</p>
                            </div>
                        </li>
                    </ul>

                    <a class="cta_btn" href="">apply now!</a>

                </div>


            </div>
        @endforeach
    </div>

</div>
@else
<div class="col-lg-12 col-md-12">
    <div class="tab-content">
        <div class="tab-pane fade advance-tab-content-1 active show" id="home-1" role="tabpanel"
            aria-labelledby="home-tab-1">
            <div class="career_tab
                _content">
                <h3 class="tab_career_title">Careers</h3>
                <p class="tab_career_title">No Job Found</p>
            </div>
        </div>
    </div>
</div>

@endif
