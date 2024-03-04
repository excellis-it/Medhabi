@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Create TVC
@endsection
@push('styles')
@endpush
@section('head')
    Create TVC
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('tvc.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="sales-report-card-wrap">
                        <div class="form-head">
                            <h4>TVC Details</h4>
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
                                <button type="submit">Create TVC</button>
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
