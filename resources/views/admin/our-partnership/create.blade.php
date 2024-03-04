@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Create Our Partnership
@endsection
@push('styles')
@endpush
@section('head')
    Create Our Partnership
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('our-partnerships.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="sales-report-card-wrap">
                        <div class="form-head">
                            <h4>Our Partnership Details</h4>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- name --}}
                                        <label for="floatingInputValue">Name*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="name"
                                            value="{{ old('name') }}" placeholder="Name*">
                                        @if ($errors->has('name'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- type --}}
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Type*</label>
                                        <select class="form-select" name="type" id="floatingSelectGrid"
                                            aria-label="Floating label select example">
                                            <option selected>Select Type</option>
                                            <option value="Digital">Digital</option>
                                            <option value="Industry">Industry</option>
                                            <option value="Knowledge">Knowledge</option>
                                        </select>
                                        @if ($errors->has('type'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('type') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- logo --}}
                                        <label for="floatingInputValue">Logo*</label>
                                        <input type="file" class="form-control" id="floatingInputValue" name="logo"
                                            value="{{ old('logo') }}" placeholder="Logo*">
                                        @if ($errors->has('logo'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('logo') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="btn-1">
                                <button type="submit">Create Our Partnership</button>
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
