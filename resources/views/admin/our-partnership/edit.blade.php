@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Edit Partnership Details
@endsection
@push('styles')
@endpush
@section('head')
    Edit Partnership Details
@endsection
@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <div class="sales-report-card-wrap">
                    <div class="form-head">
                        <h4>Partnership Details</h4>
                    </div>
                    <form action="{{ route('our-partnerships.update', $partnership->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row justify-content-between">

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- name --}}
                                        <label for="floatingInputValue">Name*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="name"
                                            value="{{ $partnership->name }}" placeholder="Name*">
                                        @if ($errors->has('name'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Type*</label>
                                        <select class="form-select" name="type" id="floatingSelectGrid"
                                            aria-label="Floating label select example">
                                            <option selected>Select Type</option>
                                            <option value="Digital" {{ $partnership->type == 'Digital' ? 'selected' : '' }}>Digital</option>
                                            <option value="Industry" {{ $partnership->type == 'Industry' ? 'selected' : '' }}>Industry</option>
                                            <option value="Knowledge" {{ $partnership->type == 'Knowledge' ? 'selected' : '' }}>Knowledge</option>
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
                                        <label for="floatingInputValue">Logo</label>
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
                                <button type="submit">Update Partnership Details</button>
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
