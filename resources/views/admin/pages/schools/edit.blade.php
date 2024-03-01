@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Update School Page
@endsection
@push('styles')
@endpush
@section('head')
    Update School Page
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('schools.update', $school->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="sales-report-card-wrap">
                        <div class="form-head">
                            <h4>Menu Section</h4>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- name --}}
                                        <label for="floatingInputValue">Page Name*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="name"
                                            value="{{ ($school->name) ?  $school->name : old('name') }}" placeholder="Page Name*">
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
                                        <label for="floatingInputValue">Courses*</label>
                                        <select class="form-select select2" name="course_id[]" id="course_id" multiple>
                                            <option value="">Select Course</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}" @if (in_array($course->id, $school->schoolCourses->pluck('id')->toArray())) selected @endif>{{ $course->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('course_id'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('course_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap">
                        <div class="form-head">
                            <h4>Banner Section</h4>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Banner Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="banner_title"
                                            value="{{ isset($school['banner_title']) ? $school['banner_title'] : old('banner_title') }}" placeholder="Banner Title">
                                        @if ($errors->has('banner_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('banner_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Banner Image</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="banner_image"
                                            value="{{ isset($school['banner_image']) ? $school['banner_image'] : old('banner_image') }}"
                                            placeholder="Banner Image">
                                        @if ($errors->has('banner_image'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('banner_image') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Section 1</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 1 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_1_title" value="{{ ($school->section_1_title) ?  $school->section_1_title : old('section_1_title') }}" placeholder="Section 1 Title">
                                        @if ($errors->has('section_1_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_1_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 1 Description*</label>
                                        <textarea name="section_1_description" id="section_1_description" cols="30" rows="10"
                                            placeholder="Section 1 Description" class="form-control">{{ ($school->section_1_description) ?  $school->section_1_description : old('section_1_description') }}</textarea>
                                        @if ($errors->has('section_1_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_1_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Section 2</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 2 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_2_title" value="{{ ($school->section_2_title) ?  $school->section_2_title : old('section_2_title') }}"
                                            placeholder="Section 2 Title">
                                        @if ($errors->has('section_2_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_2_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Section 2 Image</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="section_2_image">
                                        @if ($errors->has('section_2_image'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_2_image') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 2 Description*</label>
                                        <textarea name="section_2_description" id="section_2_description" cols="30" rows="10"
                                            placeholder="Section 2 Description" class="form-control">{{ ($school->section_2_description) ?  $school->section_2_description : old('section_2_description') }}</textarea>
                                        @if ($errors->has('section_2_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_2_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Section 3</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 3 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_3_title" value="{{ ($school->section_3_title) ?  $school->section_3_title : old('section_3_title') }}"
                                            placeholder="Section 3 Title">
                                        @if ($errors->has('section_3_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_3_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 3 Description*</label>
                                        <textarea name="section_3_description" id="section_3_description" cols="30" rows="10"
                                            placeholder="Section 3 Description" class="form-control">{{ ($school->section_3_description) ?  $school->section_3_description : old('section_3_description') }}</textarea>
                                        @if ($errors->has('section_3_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_3_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Section 4</h4>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 4 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_4_title" value="{{ ($school->section_4_title) ?  $school->section_4_title : old('section_4_title') }}"
                                            placeholder="Section 4 Title">
                                        @if ($errors->has('section_4_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_4_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Section 5</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 5 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_5_title" value="{{ ($school->section_5_title) ?  $school->section_5_title : old('section_5_title') }}"
                                            placeholder="Section 5 Title">
                                        @if ($errors->has('section_5_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_5_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 5 Description*</label>
                                        <textarea name="section_5_description" id="section_5_description" cols="30" rows="10"
                                            placeholder="Section 5 Description" class="form-control">{{ ($school->section_5_description) ?  $school->section_5_description : old('section_5_description') }}</textarea>
                                        @if ($errors->has('section_5_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_5_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>SEO Management</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Meta Title</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="seo_title" value="{{ ($school->seo_title) ?  $school->seo_title : old('seo_title') }}" placeholder="Meta Title">
                                        @if ($errors->has('seo_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('seo_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Meta Keywords</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="seo_keywords" value="{{ ($school->seo_keywords) ?  $school->seo_keywords : old('seo_keywords') }}" placeholder="Meta Keywords">
                                        @if ($errors->has('seo_keywords'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('seo_keywords') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Meta Description</label>
                                        <textarea name="seo_description" id="seo_description" cols="30" rows="10" placeholder="Meta Description"
                                            class="form-control">{{ ($school->seo_description) ?  $school->seo_description : old('seo_description') }}</textarea>
                                        @if ($errors->has('seo_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('seo_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                             {{-- button --}}
                             <div class="col-xl-12">
                                <div class="btn-1">
                                    <button type="submit">Update</button>
                                </div>
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