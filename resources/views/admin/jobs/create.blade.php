@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Create job
@endsection
@push('styles')
@endpush
@section('head')
    Create job
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('career.jobs.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="sales-report-card-wrap">
                        <div class="form-head">
                            <h4>Job Details</h4>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- title --}}
                                        <label for="floatingInputValue">Job Title*</label>
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
                                        {{-- eligibility --}}
                                        <label for="floatingInputValue">Job Eligibility*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="eligibility"
                                            value="{{ old('eligibility') }}" placeholder="Eligibility*">
                                        @if ($errors->has('eligibility'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('eligibility') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- opening_for --}}
                                        <label for="floatingInputValue">Job Opening For*</label>
                                        <input type="number" class="form-control" id="floatingInputValue" name="opening_for"
                                            value="{{ old('opening_for') }}" placeholder="Job Opening For*">
                                        @if ($errors->has('opening_for'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('opening_for') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- opening_for --}}
                                        <label for="floatingInputValue">Job Location*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="location"
                                            value="{{ old('location') }}" placeholder="Location*">
                                        @if ($errors->has('location'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('location') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- status --}}
                                        <label for="floatingInputValue">Status*</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="">Select Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('status') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- description --}}
                                        <label for="floatingInputValue">Description*</label>
                                        <textarea name="description" id="description" placeholder="Description" class="form-control">{{ old('description') }}</textarea>
                                        @if ($errors->has('description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="btn-1">
                                <button type="submit">Create job</button>
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
