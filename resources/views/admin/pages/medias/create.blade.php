@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Create News & Media
@endsection
@push('styles')
@endpush
@section('head')
    Create News & Media
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('media.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="sales-report-card-wrap">
                        <div class="form-head">
                            <h4>News & Media Details</h4>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- name --}}
                                        <label for="floatingInputValue">Media Channel Name*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="media_channel_name" value="{{ old('media_channel_name') }}"
                                            placeholder="Media Channel Name*">
                                        @if ($errors->has('media_channel_name'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('media_channel_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- url --}}
                                        <label for="floatingInputValue">News Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="news_title"
                                            value="{{ old('news_title') }}" placeholder="News Title*">
                                        @if ($errors->has('news_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('news_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- news_date --}}
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- news_date --}}
                                        <label for="floatingInputValue">News Date*</label>
                                        <input type="date" class="form-control" id="floatingInputValue" name="news_date"
                                            value="{{ old('news_date') }}" placeholder="News Date*">
                                        @if ($errors->has('news_date'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('news_date') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- media_channel_url --}}
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- url --}}
                                        <label for="floatingInputValue">Media Channel URL*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="media_channel_url" value="{{ old('media_channel_url') }}"
                                            placeholder="Media Channel URL*">
                                        @if ($errors->has('media_channel_url'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('media_channel_url') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- thumbnail --}}
                                        <label for="floatingInputValue">News Thmbnail*</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="media_channel_thumbnail" value="{{ old('media_channel_thumbnail') }}"
                                            placeholder="media_channel_thumbnail*">
                                        @if ($errors->has('media_channel_thumbnail'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('media_channel_thumbnail') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="btn-1">
                                <button type="submit">Create News & Media</button>
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
