@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Application Process
@endsection
@push('styles')
@endpush
@section('head')
    Application Process
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('application-process.update', $applicationProcess->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    @method('PUT')
                    {{-- <input type="hidden" name="id" value="{{ $career->id ?? '' }}"> --}}
                    <div class="sales-report-card-wrap">
                        <div class="row justify-content-between" >
                            <div class="col-xl-6 col-md-5 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Process Image</label>
                                        <input type="file" class="form-control" name="process_image"
                                            value="{{ $applicationProcess->process_image }}" placeholder="Process Image">
                                        <input type="hidden" name="process_image_id">
                                        <span class="text-danger process_image_error"
                                            id="process_image_error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Process Description*</label>
                                        <input type="text" class="form-control"
                                            name="process_description"
                                            placeholder="Process Description" value="{{ $applicationProcess->process_desc }}">
                                        <span
                                            class="text-danger process_description_error"
                                            id="process_description_error"></span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row justify-content-between" >
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Button Text*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="button_text" required value="{{ $applicationProcess->button_text }}">
                                            
                                        @if ($errors->has('button_text'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('button_text') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-12">
                        <div class="btn-1">
                            <button type="submit">Update Application Process</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@push('scripts')

@endpush
