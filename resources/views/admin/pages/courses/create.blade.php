@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Create Course Page
@endsection
@push('styles')
@endpush
@section('head')
    Create Course Page
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data" id="create-form">
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
                                                        @if (old('program_type_id') == $program_type->id) selected @endif>
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
                                            value="{{ old('name') }}" placeholder="Page Name*">
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
                                            name="banner_title" value="{{ old('banner_title') }}"
                                            placeholder="Banner Title*">
                                        <span class="text-danger" id="banner_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Banner Image</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="banner_image" value="{{ old('banner_image') }}"
                                            placeholder="Banner Image">
                                        <span class="text-danger" id="banner_image_msg"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- section_1_description --}}
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Section 1</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- section_1_title --}}
                                        <label for="floatingInputValue">Section 1 Description*</label>
                                        <textarea name="section_1_description" id="section_1_description" cols="30" rows="10"
                                            placeholder="Section 1 Description" class="form-control">{{ old('section_1_description') }}</textarea>
                                        <span class="text-danger" id="section_1_description_msg"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Duration</h4>
                        </div>

                        <div class="row">
                            {{-- duration_title --}}
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Duration Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="duration_title" value="{{ old('duration_title') }}"
                                            placeholder="Duration Title">
                                        <span class="text-danger" id="duration_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Duration Description*</label>
                                        <textarea name="duration_description" id="duration_description" cols="30" rows="10"
                                            placeholder="Duration Description" class="form-control">{{ old('duration_description') }}</textarea>
                                        <span class="text-danger" id="duration_description_msg"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Eligibility</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Eligibility Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="eligibility_title" value="{{ old('eligibility_title') }}"
                                            placeholder="Eligibility Title">
                                        <span class="text-danger" id="eligibility_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Industry Learning</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Industry Learning Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="industry_led_learning_title"
                                            value="{{ old('industry_led_learning_title') }}"
                                            placeholder="Industry Learning Title">
                                        <span class="text-danger" id="industry_led_learning_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- duration_description --}}
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Industry Learning Description*</label>
                                        <textarea name="industry_led_learning_description" id="industry_led_learning_description" cols="30"
                                            rows="10" placeholder="Industry Learning Description" class="form-control">{{ old('industry_led_learning_description') }}</textarea>
                                        <span class="text-danger" id="industry_led_learning_description_msg"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row count-class" id="add-more">
                            {{-- industry_led_learning_category_image --}}
                            <div class="col-xl-3 col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Industry Learning Category Image</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="industry_led_learning_category_image[]"
                                            value="{{ old('industry_led_learning_category_image') }}"
                                            placeholder="Industry Learning Category Image">
                                        <span class="text-danger" id="industry_led_learning_category_image_0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Industry Learning Category Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="industry_led_learning_category_title[]"
                                            value="{{ old('industry_led_learning_category_title') }}"
                                            placeholder="Industry Learning Category Title">
                                        <span class="text-danger" id="industry_led_learning_category_title_0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Industry Learning Category Description*</label>
                                        <input type="text" class="form-control"
                                            name="industry_led_learning_category_description[]"
                                            value="{{ old('industry_led_learning_category_description') }}"
                                            placeholder="Industry Learning Category Description">
                                        <span class="text-danger"
                                            id="industry_led_learning_category_description_0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 mt-4">
                                <div class="btn-1">
                                    <button type="button" class="add-more"><i class="ph ph-plus"></i> Add
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Academic Framework
                            </h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Academic Framework Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="academic_framework_title" value="{{ old('academic_framework_title') }}"
                                            placeholder="Academic Framework Title">
                                        <span class="text-danger" id="academic_framework_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- academic_framework_description --}}
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Academic Framework Description*</label>
                                        <textarea name="academic_framework_description" id="academic_framework_description" cols="30" rows="10"
                                            placeholder="Academic Framework Description" class="form-control">{{ old('academic_framework_description') }}</textarea>
                                        <span class="text-danger" id="academic_framework_description_msg"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row count-class-academic" id="add-more-academic">
                            {{-- academic_framework_category_image --}}
                            <div class="col-xl-3 col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Academic Framework Category Image</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="academic_framework_category_image[]"
                                            value="{{ old('academic_framework_category_image') }}"
                                            placeholder="Academic Framework Category Image">
                                        <span class="text-danger" id="academic_framework_category_image_0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Academic Framework Category Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="academic_framework_category_title[]"
                                            value="{{ old('academic_framework_category_title') }}"
                                            placeholder="Academic Framework Category Title">
                                        <span class="text-danger" id="academic_framework_category_title_0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Academic Framework Category Description*</label>
                                        <input type="text" class="form-control"
                                            name="academic_framework_category_description[]"
                                            value="{{ old('academic_framework_category_description') }}"
                                            placeholder="Academic Framework Category Description">
                                        <span class="text-danger" id="academic_framework_category_description_0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 mt-4">
                                <div class="btn-1">
                                    <button type="button" class="add-more-academic"><i class="ph ph-plus"></i> Add
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Programme Outcome
                            </h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Programme Outcome Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="programme_outcomes_title" value="{{ old('programme_outcomes_title') }}"
                                            placeholder="Programme Outcome Title">
                                        <span class="text-danger" id="programme_outcomes_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row count-class-programme" id="add-more-programme">
                            {{-- programme_category_image --}}
                            <div class="col-xl-3 col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Programme Outcome Category Type</label>
                                        <select class="form-select" name="programme_category_type[]">
                                            <option value="programme_specific_outcome">Programme Specific Outcome</option>
                                            <option value="generic_programme_outcome">Generic Programme Outcome</option>
                                        </select>
                                        <span class="text-danger" id="programme_category_type_0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Programme Outcome Category Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="programme_category_title[]"
                                            value="{{ old('programme_category_title') }}"
                                            placeholder="Programme Outcome Category Title">
                                        <span class="text-danger" id="programme_category_title_0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Programme Outcome Category Description*</label>
                                        <textarea type="text" class="form-control"
                                            name="programme_category_description[]"
                                            placeholder="Programme Outcome Category Description">{{ old('programme_category_description') }}</textarea>
                                        <span class="text-danger" id="programme_category_description_0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 mt-4">
                                <div class="btn-1">
                                    <button type="button" class="add-more-programme"><i class="ph ph-plus"></i> Add
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Learning by Doing</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- learning_by_doing_title --}}
                                        <label for="floatingInputValue">Learning by Doing Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="learning_by_doing_title" value="{{ old('learning_by_doing_title') }}"
                                            placeholder="Learning by Doing Title">
                                        <span class="text-danger" id="learning_by_doing_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- learning_by_doing_image upload (multiple) --}}
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Learning by Doing Image (multiple)</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="learning_by_doing_image[]" value="{{ old('learning_by_doing_image') }}"
                                            placeholder="Learning by Doing Image" multiple>
                                        <span class="text-danger" id="learning_by_doing_image_msg"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Industry Partners</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Industry Partners Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="industry_partners_title" value="{{ old('industry_partners_title') }}"
                                            placeholder="Industry Partners Title">
                                        <span class="text-danger" id="industry_partners_title_msg"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Programs to Explore
                            </h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Programs to Explore
                                            Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="programs_to_explore_title"
                                            value="{{ old('programs_to_explore_title') }}"
                                            placeholder="Programs to Explore Title">
                                        <span class="text-danger" id="programs_to_explore_title_msg"></span>
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
                                            name="seo_title" value="{{ old('seo_title') }}" placeholder="Meta Title">
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
                                            name="seo_keywords" value="{{ old('seo_keywords') }}"
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
                                            class="form-control">{{ old('seo_description') }}</textarea>
                                        <span class="text-danger" id="seo_description_msg"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- button --}}
                            <div class="col-xl-12">
                                <div class="btn-1">
                                    <button type="submit">Create</button>
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
                var count = $("#add-more .col-xl-3").length;
                var html = ` <div class="col-xl-3 col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Industry Learning Category Image</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="industry_led_learning_category_image[]" value="{{ old('industry_led_learning_category_image') }}"
                                            placeholder="Industry Learning Category Image">
                                        <span class="text-danger" id="industry_led_learning_category_image_${count}"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Industry Learning Category Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="industry_led_learning_category_title[]" value="{{ old('industry_led_learning_category_title') }}"
                                            placeholder="Industry Learning Category Title">
                                        <span class="text-danger" id="industry_led_learning_category_title_${count}"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Industry Learning Category Description*</label>
                                        <input type="text" class="form-control" name="industry_led_learning_category_description[]"
                                             value="{{ old('industry_led_learning_category_description') }}"
                                            placeholder="Industry Learning Category Description">
                                        <span class="text-danger" id="industry_led_learning_category_description_${count}"></span>
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
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().remove();

            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Add More functionality
            $(document).on("click", ".add-more-academic", function() {
                var count = $("#add-more-academic .col-xl-3").length;
                var html = `  <div class="col-xl-3 col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Academic Framework Category Image</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="academic_framework_category_image[]" value="{{ old('academic_framework_category_image') }}"
                                            placeholder="Academic Framework Category Image">
                                        <span class="text-danger" id="academic_framework_category_image_${count}"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Academic Framework Category Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="academic_framework_category_title[]" value="{{ old('academic_framework_category_title') }}"
                                            placeholder="Academic Framework Category Title">
                                        <span class="text-danger" id="academic_framework_category_title_${count}"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Academic Framework Category Description*</label>
                                        <input type="text" class="form-control" name="academic_framework_category_description[]"
                                             value="{{ old('academic_framework_category_description') }}"
                                            placeholder="Academic Framework Category Description">
                                        <span class="text-danger" id="academic_framework_category_description_${count}"></span>
                                    </div>
                                </div>
                            </div>
                        <div class="col-xl-2 mt-4">
                            <div class="btn-1">
                                <button type="button" class="remove-academic"><i class="ph ph-minus"></i> Remove</button>
                            </div>
                        </div>`;

                $("#add-more-academic").append(html);
            });
            $(document).on("click", ".remove-academic", function() {
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().remove();

            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Add More functionality
            $(document).on("click", ".add-more-programme", function() {
                var count = $("#add-more-programme .col-xl-3").length;
                var html = `  <div class="col-xl-3 col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Programme Outcome Category Type</label>
                                       <select class="form-select" name="programme_category_type[]">
                                            <option value="programme_specific_outcome">Programme Specific Outcome</option>
                                            <option value="generic_programme_outcome">Generic Programme Outcome</option>
                                        </select>
                                        <span class="text-danger" id="programme_category_type_${count}"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Programme Outcome Category Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="programme_category_title[]"
                                            value="{{ old('programme_category_title') }}"
                                            placeholder="Programme Outcome Category Title">
                                        <span class="text-danger" id="programme_category_title_${count}"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Programme Outcome Category Description*</label>
                                        <textarea type="text" class="form-control"
                                            name="programme_category_description[]"
                                            placeholder="Programme Outcome Category Description"></textarea>
                                        <span class="text-danger" id="programme_category_description_${count}"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 mt-4">
                                <div class="btn-1">
                                    <button type="button" class="remove-programme"><i class="ph ph-minus"></i> Remove</button>
                                </div>
                            </div>`;

                $("#add-more-programme").append(html);
            });
            $(document).on("click", ".remove-programme", function() {
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().remove();

            });
        });
    </script>
    <script>
        $(document).ready(function() {
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
            $('#create-form').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                $.ajax({
                    type: "POST",
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

                        // Find the first input field with an error
                        // var firstErrorInput = form.find('.text-danger').first().prevAll(
                        //     'input:first');
                        // if (firstErrorInput.length > 0) {
                        //     // Scroll to the first input field with an error
                        //     firstErrorInput.focus();
                        //     $('html, body').animate({
                        //         scrollTop: firstErrorInput.offset().top - 50
                        //     }, 500);
                        // }
                    }
                });
            });
        });
    </script>
@endpush
