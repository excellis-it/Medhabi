@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Create Event
@endsection
@push('styles')
@endpush
@section('head')
    Create Event
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="sales-report-card-wrap">
                        <div class="form-head">
                            <h4>Event Details</h4>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- name --}}
                                        <label for="floatingInputValue">Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="title"
                                            value="{{ old('title') }}" placeholder="Title*">
                                        @if ($errors->has('title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- address --}}
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- address --}}
                                        <label for="floatingInputValue">Address*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="address"
                                            value="{{ old('address') }}" placeholder="Address*">
                                        @if ($errors->has('address'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('address') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- start_date --}}
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- start_date --}}
                                        <label for="floatingInputValue">Start Date*</label>
                                        <input type="date" class="form-control" id="floatingInputValue" name="start_date" min="{{date('Y-m-d')}}"
                                            value="{{ old('start_date') }}" placeholder="Start Date*">
                                        @if ($errors->has('start_date'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('start_date') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- end_date --}}
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- end_date --}}
                                        <label for="floatingInputValue">End Date</label>
                                        <input type="date" class="form-control" id="floatingInputValue" name="end_date" min="{{date('Y-m-d')}}"
                                            value="{{ old('end_date') }}" placeholder="End Date">
                                        @if ($errors->has('end_date'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('end_date') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- url --}}
                                        <label for="floatingInputValue">URL*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="url"
                                            value="{{ old('url') }}" placeholder="URL*">
                                        @if ($errors->has('url'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('url') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- description --}}
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- description --}}
                                        <label for="floatingInputValue">Short Description*</label>
                                       <input type="text" class="form-control" id="floatingInputValue" name="description"
                                            value="{{ old('description') }}" placeholder="Short Description*">
                                        @if ($errors->has('description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- thumbnail --}}
                                        <label for="floatingInputValue">Thumbnail*</label>
                                        <input type="file" class="form-control" id="floatingInputValue" name="thumbnail"
                                            value="{{ old('thumbnail') }}" placeholder="Thumbnail*">
                                        @if ($errors->has('thumbnail'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('thumbnail') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="btn-1">
                                <button type="submit">Create Event</button>
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
