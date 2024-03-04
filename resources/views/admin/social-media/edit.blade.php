@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Update Social Media
@endsection
@push('styles')
@endpush
@section('head')
    Update Social Media
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('social-media.update', $social_media->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="sales-report-card-wrap">
                        <div class="form-head">
                            <h4>Social Media Details</h4>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- name --}}
                                        <label for="floatingInputValue">University Name*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="university_name"
                                            value="{{($social_media->university_name) ? $social_media->university_name : old('university_name') }}" placeholder="University Name*">
                                        @if ($errors->has('university_name'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('university_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- thumbnail --}}
                                        <label for="floatingInputValue">University Logo</label>
                                        <input type="file" class="form-control" id="floatingInputValue" name="university_logo"
                                            value="{{ old('university_logo') }}" placeholder="University Logo*">
                                        @if ($errors->has('university_logo'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('university_logo') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- address --}}
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- address --}}
                                        <label for="floatingInputValue">User Name*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="user_name"
                                            value="{{($social_media->user_name) ? $social_media->user_name : old('user_name') }}" placeholder="User Name*">
                                        @if ($errors->has('user_name'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('user_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- icon --}}
                                        <label for="floatingInputValue">Icon*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="icon"
                                            value="{{ ($social_media->icon) ? $social_media->icon : old('icon') }}" placeholder="Icon*">
                                        @if ($errors->has('icon'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('icon') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- link --}}
                                        <label for="floatingInputValue">Link*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="link"
                                            value="{{ ($social_media->link) ? $social_media->link : old('link') }}" placeholder="Link*">
                                        @if ($errors->has('link'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('link') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- thumbnail --}}
                                        <label for="floatingInputValue">Image</label>
                                        <input type="file" class="form-control" id="floatingInputValue" name="image"
                                            value="{{ old('image') }}" placeholder="Image*">
                                        @if ($errors->has('image'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('image') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="btn-1">
                                <button type="submit">Update Social Media</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
@endpush
