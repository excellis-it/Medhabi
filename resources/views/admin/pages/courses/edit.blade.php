@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Update Course Page
@endsection
@push('styles')
@endpush
@section('head')
    Update Course Page
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('courses.update', $course->id) }}" method="post" enctype="multipart/form-data"
                    id="edit-form">
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
                                        {{-- program_type_id --}}
                                        <label for="program_type_id">Programs Type*</label>
                                        <select class="form-control" id="program_type_id" name="program_type_id">
                                            <option value="">Select Program Type</option>
                                            @if (count($program_types) > 0)
                                                @foreach ($program_types as $program_type)
                                                    <option value="{{ $program_type->id }}"
                                                        {{ $course->program_type_id == $program_type->id ? 'selected' : '' }}>
                                                        {{ $program_type->name }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <span class="text-danger" id="program_type_id_msg"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- course_type_id --}}
                                        <label for="course_type_id">Course Type*</label>
                                        <select class="form-control" id="course_type_id" name="course_type_id">
                                            <option value="">Select Course Type</option>
                                        </select>
                                        <span class="text-danger" id="course_type_id_msg"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- name --}}
                                        <label for="floatingInputValue">Page Name*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="name"
                                            value="{{ $course->name }}" placeholder="Page Name">
                                        <span class="text-danger" id="name_msg"></span>
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
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="banner_title"
                                            value="{{ $course->banner_title ? $course->banner_title : old('banner_title') }}"
                                            placeholder="Banner Title*">
                                        <span class="text-danger" id="banner_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Banner Image*</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="banner_image" value="{{ old('banner_image') }}"
                                            placeholder="Banner Image">
                                        <span class="text-danger" id="banner_image_msg"></span>
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
                                            name="section_1_title"
                                            value="{{ $course->section_1_title ? $course->section_1_title : old('section_1_title') }}"
                                            placeholder="Section 1 Title">
                                        <span class="text-danger" id="section_1_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 1 Description*</label>
                                        <textarea name="section_1_description" id="section_1_description" cols="30" rows="10"
                                            placeholder="Section 1 Description" class="form-control">{{ $course->section_1_description ? $course->section_1_description : old('section_1_description') }}</textarea>
                                        <span class="text-danger" id="section_1_description_msg"></span>
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
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 2 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_2_title"
                                            value="{{ $course->section_2_title ? $course->section_2_title : old('section_2_title') }}"
                                            placeholder="Section 2 Title">
                                        <span class="text-danger" id="section_2_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- section_2_right_image --}}
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 2 Left Image*</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="section_2_left_image" value="{{ old('section_2_left_image') }}"
                                            placeholder="Section 2 Right Image">
                                        <span class="text-danger" id="section_2_left_image_msg"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- section_2_right_image --}}
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 2 Right Image*</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="section_2_right_image" value="{{ old('section_2_right_image') }}"
                                            placeholder="Section 2 Right Image">
                                        <span class="text-danger" id="section_2_right_image_msg"></span>
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
                                            name="section_3_title"
                                            value="{{ $course->section_3_title ? $course->section_3_title : old('section_3_title') }}"
                                            placeholder="Section 3 Title">
                                        <span class="text-danger" id="section_3_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row count-class" id="add-more">
                            @if (count($jobOpportunities) > 0)
                            @foreach ($jobOpportunities as $key => $item)
                            <div class="col-xl-5 col-md-5 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Job Opportunity Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="job_opportunity_title[]" value="{{ $item->name }}"
                                            placeholder="Job Opportunity Title">
                                        <span class="text-danger" id="job_opportunity_title_0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Job Opportunity Description*</label>
                                        <input type="text" class="form-control"
                                            name="job_opportunity_description[]"
                                            value="{{ $item->description }}"
                                            placeholder="Job Opportunity Description">
                                        <span class="text-danger" id="job_opportunity_description_0"></span>
                                    </div>
                                </div>
                            </div>
                            @if ($key == 0)
                            <div class="col-xl-2 mt-4">
                                <div class="btn-1">
                                    <button type="button" class="add-more"><i class="ph ph-plus"></i> Add
                                        More</button>
                                </div>
                            </div>
                            @else
                            <div class="col-xl-2 mt-4">
                                <div class="btn-1">
                                    <button type="button" class="remove"><i class="ph ph-minus"></i> Remove</button>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            @else
                                <div class="col-xl-5 col-md-5 mt-4">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            {{-- meta title --}}
                                            <label for="floatingInputValue">Job Opportunity Title*</label>
                                            <input type="text" class="form-control" id="floatingInputValue"
                                                name="job_opportunity_title[]" value="{{ old('job_opportunity_title') }}"
                                                placeholder="Job Opportunity Title">
                                            <span class="text-danger" id="job_opportunity_title_0"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 mt-4">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            {{-- banner_title --}}
                                            <label for="floatingInputValue">Job Opportunity Description*</label>
                                            <input type="text" class="form-control"
                                                name="job_opportunity_description[]"
                                                value="{{ old('job_opportunity_description') }}"
                                                placeholder="Job Opportunity Description">
                                            <span class="text-danger" id="job_opportunity_description_0"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 mt-4">
                                    <div class="btn-1">
                                        <button type="button" class="add-more"><i class="ph ph-plus"></i> Add
                                            More</button>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Section 4</h4>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 4 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_4_title"
                                            value="{{ $course->section_4_title ? $course->section_4_title : old('section_4_title') }}"
                                            placeholder="Section 4 Title">
                                        <span class="text-danger" id="section_4_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- brochure --}}
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Brochure*</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="brochure" value="{{ old('brochure') }}" placeholder="Brochure">
                                        <span class="text-danger" id="brochure_msg"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- section_4_step_1_title --}}
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 4 Step 1 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_4_step_1_title"
                                            value="{{ $course->section_4_step_1_title ? $course->section_4_step_1_title : old('section_4_step_1_title') }}"
                                            placeholder="Section 4 Step 1 Title">
                                        <span class="text-danger" id="section_4_step_1_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- section_4_step_1_description --}}
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 4 Step 1 Description</label>
                                        <textarea name="section_4_step_1_description" id="section_4_step_1_description" cols="30" rows="10"
                                            placeholder="Section 4 Step 1 Description" class="form-control">{{ $course->section_4_step_1_description ? $course->section_4_step_1_description : old('section_4_step_1_description') }}</textarea>
                                        <span class="text-danger" id="section_4_step_1_description_msg"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- section_4_step_2_title --}}
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 4 Step 2 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_4_step_2_title"
                                            value="{{ $course->section_4_step_2_title ? $course->section_4_step_2_title : old('section_4_step_2_title') }}"
                                            placeholder="Section 4 Step 2 Title">
                                        <span class="text-danger" id="section_4_step_2_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- section_4_step_2_description --}}
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 4 Step 2 Description</label>
                                        <textarea name="section_4_step_2_description" id="section_4_step_2_description" cols="30" rows="10"
                                            placeholder="Section 4 Step 2 Description" class="form-control">{{ $course->section_4_step_2_description ? $course->section_4_step_2_description : old('section_4_step_2_description') }}</textarea>
                                        <span class="text-danger" id="section_4_step_2_description_msg"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- section_4_step_3_title --}}
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 4 Step 3 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_4_step_3_title"
                                            value="{{ $course->section_4_step_3_title ? $course->section_4_step_3_title : old('section_4_step_3_title') }}"
                                            placeholder="Section 4 Step 3 Title">
                                        <span class="text-danger" id="section_4_step_3_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- section_4_step_3_description --}}
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 4 Step 3 Description</label>
                                        <textarea name="section_4_step_3_description" id="section_4_step_3_description" cols="30" rows="10"
                                            placeholder="Section 4 Step 3 Description" class="form-control">{{ $course->section_4_step_3_description ? $course->section_4_step_3_description : old('section_4_step_3_description') }}</textarea>
                                        <span class="text-danger" id="section_4_step_3_description_msg"></span>
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
                                            name="section_5_title" value="{{ $course->section_5_title ? $course->section_5_title : old('section_5_title') }}"
                                            placeholder="Section 5 Title">
                                        <span class="text-danger" id="section_5_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 5 Description*</label>
                                        <textarea name="section_5_description" id="section_5_description" cols="30" rows="10"
                                            placeholder="Section 5 Description" class="form-control">{{ $course->section_5_description ? $course->section_5_description : old('section_5_description') }}</textarea>
                                        <span class="text-danger" id="section_5_description_msg"></span>
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
                                            name="seo_title"
                                            value="{{ $course->seo_title ? $course->seo_title : old('seo_title') }}"
                                            placeholder="Meta Title">
                                        <span class="text-danger" id="seo_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Meta Keywords</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="seo_keywords"
                                            value="{{ $course->seo_keywords ? $course->seo_keywords : old('seo_keywords') }}"
                                            placeholder="Meta Keywords">
                                        <span class="text-danger" id="seo_keywords_msg"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Meta Description</label>
                                        <textarea name="seo_description" id="seo_description" cols="30" rows="10" placeholder="Meta Description"
                                            class="form-control">{{ $course->seo_description ? $course->seo_description : old('seo_description') }}</textarea>
                                        <span class="text-danger" id="seo_description_msg"></span>
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
    <script>
        $(document).ready(function() {
            // Add More functionality
            $(document).on("click", ".add-more", function() {
                var count = $("#add-more .col-xl-5").length;
                var html = `<div class="col-xl-5 col-md-5 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Job Opportunity Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="job_opportunity_title[]" value="{{ old('job_opportunity_title') }}"
                                            placeholder="Job Opportunity Title">
                                        <span class="text-danger" id="job_opportunity_title_${count}"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Job Opportunity Description*</label>
                                        <input type="text" class="form-control" name="job_opportunity_description[]"
                                             value="{{ old('job_opportunity_description') }}"
                                            placeholder="Job Opportunity Description">
                                        <span class="text-danger" id="job_opportunity_description_${count}"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 mt-4">
                                <div class="btn-1">
                                    <button type="button" class="remove"><i class="ph ph-minus"></i> Remove</button>
                                </div>
                            </div>`;

                $("#add-more").append(html);
            });
            $(document).on("click", ".remove", function() {
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().remove();

            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var program_type_id = $('#program_type_id').val();
            if (program_type_id) {
                $.ajax({
                    url: "{{ route('get.course.types') }}",
                    type: "POST",
                    data: {
                        program_type_id: program_type_id,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function(data) {
                        // console.log(data);
                        var course_type_id = '{{ $course->course_type_id }}';
                        var course_types = data.course_types;
                        $('#course_type_id').empty();
                        $('#course_type_id').append(
                            '<option value="">Select Course Type</option>');
                        $.each(course_types, function(key, value) {
                            $('#course_type_id').append('<option value="' + value.id + '" ' + (
                                    course_type_id == value.id ? 'selected' : '') + '>' +
                                value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#course_type_id').empty();
            }

            $('#program_type_id').on('change', function() {
                var program_type_id = $(this).val();
                if (program_type_id) {
                    $.ajax({
                        url: "{{ route('get.course.types') }}",
                        type: "POST",
                        data: {
                            program_type_id: program_type_id,
                            _token: "{{ csrf_token() }}"
                        },
                        dataType: "json",
                        success: function(data) {
                            // console.log(data);
                            var course_types = data.course_types;
                            $('#course_type_id').empty();
                            $('#course_type_id').append(
                                '<option value="">Select Course Type</option>');
                            $.each(course_types, function(key, value) {
                                $('#course_type_id').append('<option value="' + value
                                    .id + '">' + value.name +
                                    '</option>');
                            });
                        }
                    });
                } else {
                    $('#course_type_id').empty();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#edit-form').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                var method = form.attr('method');
                $.ajax({
                    type: method,
                    url: url,
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        window.location.href = "{{ route('courses.index') }}";
                    },
                    error: function(xhr) {
                        $('.text-danger').html('');
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            if (key.includes('.')) {
                                var fieldName = key.split('.')[0];
                                // Display errors for array fields
                                var num = key.match(/\d+/)[0];
                                $('#' + fieldName + '_' + num).html(value[0]);
                            } else {
                                // after text danger span
                                $('#' + key + '_msg').html(value[0]);
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
