@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Create School Page
@endsection
@push('styles')
@endpush
@section('head')
    Create School Page
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('schools.store') }}" method="post" enctype="multipart/form-data">
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
                                        <label for="floatingInputValue">Menu Name*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="name"
                                            value="{{ old('name') }}" placeholder="Menu Name*">
                                        @if ($errors->has('name'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- courses --}}
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Courses*</label>
                                        <select class="form-select select2 courses_select" name="course_id[]" id="course_id" multiple>
                                            <option value="">Select Course</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}" @if (in_array($course->id, old('course_id', []))) selected @endif>
                                                    {{ $course->name }} </option>
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
                                            value="{{ old('banner_title') }}" placeholder="Banner Title*">
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
                                        <label for="floatingInputValue">Banner Image*</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="banner_image"
                                            value="{{ old('banner_image') }}"
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
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 1 Description*</label>
                                        <textarea name="section_1_description" id="section_1_description" cols="30" rows="10"
                                            placeholder="Section 1 Description" class="form-control">{{ old('section_1_description') }}</textarea>
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
                                        <label for="floatingInputValue">Section 2 URL*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_2_url" value="{{ old('section_2_url') }}"
                                            placeholder="Section 2 URL">
                                        @if ($errors->has('section_2_url'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_2_url') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Section 2 Image*</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="section_2_image">
                                        @if ($errors->has('section_2_image'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_2_image') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Medhavi Edge</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="medhavi_edge_title" value="{{ old('medhavi_edge_title') }}"
                                            placeholder="Title">
                                        @if ($errors->has('medhavi_edge_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('medhavi_edge_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row count-class-medhavi-edge" id="add-more-medhavi-edge">
                            {{-- school_medhavi_edges_image --}}
                            <div class="col-xl-3 col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">School Medhavi Edge Image</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="school_medhavi_edges_image[]"

                                            placeholder="School Medhavi Edge Image">
                                        <span class="text-danger" id="school_medhavi_edges_image_0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">School Medhavi Edge Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="school_medhavi_edges_title[]" required

                                            placeholder="School Medhavi Edge Title">
                                        <span class="text-danger" id="school_medhavi_edges_title_0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">School Medhavi Edge Description*</label>
                                        <input type="text" class="form-control"
                                            name="school_medhavi_edges_description[]" required

                                            placeholder="School Medhavi Edge Description">
                                        <span class="text-danger" id="school_medhavi_edges_description_0"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 mt-4">
                                <div class="btn-1">
                                    <button type="button" class="add-more-medhavi-edge"><i class="ph ph-plus"></i> Add
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Program Levels</h4>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue"> Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="program_levels_title" value="{{ old('program_levels_title') }}"
                                            placeholder="Title">
                                        @if ($errors->has('program_levels_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('program_levels_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- program_levels_description --}}
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Description*</label>
                                        <textarea name="program_levels_description" id="program_levels_description" cols="30" rows="10"
                                            placeholder="Description" class="form-control">{{ old('program_levels_description') }}</textarea>
                                        @if ($errors->has('program_levels_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('program_levels_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Expert Speak</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="expert_speak_title" value="{{ old('expert_speak_title') }}"
                                            placeholder="Title">
                                        @if ($errors->has('expert_speak_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('expert_speak_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Gallery</h4>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue"> Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="gallery_title" value="{{ old('gallery_title') }}"
                                            placeholder="Title">
                                        @if ($errors->has('gallery_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('gallery_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- program_levels_description --}}
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Description*</label>
                                        <textarea name="gallery_description" id="gallery_description" cols="30" rows="10"
                                            placeholder="Description" class="form-control">{{ old('gallery_description') }}</textarea>
                                        @if ($errors->has('gallery_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('gallery_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Our Partnership</h4>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue"> Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="our_partners_title" value="{{ old('our_partners_title') }}"
                                            placeholder="Title">
                                        @if ($errors->has('our_partners_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('our_partners_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- program_levels_description --}}
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Description*</label>
                                        <textarea name="our_partners_description" id="our_partners_description" cols="30" rows="10"
                                            placeholder="Description" class="form-control">{{ old('our_partners_description') }}</textarea>
                                        @if ($errors->has('our_partners_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('our_partners_description') }}</div>
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
                                            name="seo_title" value="{{ old('seo_title') }}" placeholder="Meta Title">
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
                                            name="seo_keywords" value="{{ old('seo_keywords') }}"
                                            placeholder="Meta Keywords">
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
                                            class="form-control">{{ old('seo_description') }}</textarea>
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
         $(".select2").select2({
            placeholder: "Select a Course",
            allowClear: true,
        });
    </script>
      <script>
        $(document).ready(function() {
            // Add More functionality
            $(document).on("click", ".add-more-medhavi-edge", function() {
                var count = $("#add-more-medhavi-edge .col-xl-3").length;
                var html = `  <div class="col-xl-3 col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">School Medhavi Edges Image</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="school_medhavi_edges_image[]"
                                            placeholder="School Medhavi Edges Image">
                                        <span class="text-danger" id="school_medhavi_edges_image_${count}"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">School Medhavi Edges Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" required
                                            name="school_medhavi_edges_title[]"
                                            placeholder="School Medhavi Edges Title">
                                        <span class="text-danger" id="school_medhavi_edges_title_${count}"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">School Medhavi Edges Description*</label>
                                        <input type="text" class="form-control" name="school_medhavi_edges_description[]" required

                                            placeholder="School Medhavi Edges Description">
                                        <span class="text-danger" id="school_medhavi_edges_description_${count}"></span>
                                    </div>
                                </div>
                            </div>
                        <div class="col-xl-2 mt-4">
                            <div class="btn-1">
                                <button type="button" class="remove-academic"><i class="ph ph-minus"></i> Remove</button>
                            </div>
                        </div>`;

                $("#add-more-medhavi-edge").append(html);
            });
            $(document).on("click", ".remove-academic", function() {
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().remove();

            });
        });
    </script>
@endpush
