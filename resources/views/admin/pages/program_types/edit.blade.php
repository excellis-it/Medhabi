@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Update Program Types Page
@endsection
@push('styles')
@endpush
@section('head')
    Update Program-Types Page
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('program-types-cms.update', $programtypescms->id) }}" method="post"
                    enctype="multipart/form-data">
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
                                        <label for="floatingInputValue">Menu Name*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="name"
                                            value="{{ $programtypescms->name ? $programtypescms->name : old('name') }}"
                                            placeholder="Menu Name*">
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
                                        <label for="floatingInputValue">Program Type*</label>
                                        <select class="form-select" name="program_type_id" id="floatingSelectGrid"
                                            aria-label="Floating label select example">
                                            <option selected>Select Program Type</option>
                                            @foreach ($programtypes as $program_type)
                                                <option value="{{ $program_type->id }}"
                                                    {{ $programtypescms->program_type_id == $program_type->id ? 'selected' : '' }}>
                                                    {{ $program_type->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('program_type_id'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('program_type_id') }}</div>
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
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="banner_title"
                                            value="{{ isset($programtypescms['banner_title']) ? $programtypescms['banner_title'] : old('banner_title') }}"
                                            placeholder="Banner Title*">
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
                                            value="{{ isset($programtypescms['banner_image']) ? $programtypescms['banner_image'] : old('banner_image') }}"
                                            placeholder="Banner Image">
                                        @if ($errors->has('banner_image'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('banner_image') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Banner Description*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="banner_description"
                                            value="{{ isset($programtypescms['banner_description']) ? $programtypescms['banner_description'] : old('banner_description') }}"
                                            placeholder="Banner Description*">
                                        @if ($errors->has('banner_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('banner_description') }}</div>
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
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 1 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_1_title"
                                            value="{{ $programtypescms->section_1_title ? $programtypescms->section_1_title : old('section_1_title') }}"
                                            placeholder="Section 1 Title">
                                        @if ($errors->has('section_1_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_1_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 1 Image</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="section_1_image"
                                            value="{{ isset($programtypescms['section_1_image']) ? $programtypescms['section_1_image'] : old('section_1_image') }}"
                                            placeholder="Section 1 Image">
                                        @if ($errors->has('section_1_image'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_1_image') }}</div>
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
                                            placeholder="Section 1 Description" class="form-control">{{ $programtypescms->section_1_description ? $programtypescms->section_1_description : old('section_1_description') }}</textarea>
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
                                            name="section_2_title"
                                            value="{{ $programtypescms->section_2_title ? $programtypescms->section_2_title : old('section_2_title') }}"
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
                                            placeholder="Section 2 Description" class="form-control">{{ $programtypescms->section_2_description ? $programtypescms->section_2_description : old('section_2_description') }}</textarea>
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
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 3 Title</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_3_title"
                                            value="{{ $programtypescms->section_3_title ? $programtypescms->section_3_title : old('section_3_title.0') }}"
                                            placeholder="Section 3 Title">
                                        @if ($errors->has('section_3_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_3_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 3 Description</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_3_description"
                                            value="{{ $programtypescms->section_3_description ? $programtypescms->section_3_description : old('section_3_description') }}"
                                            placeholder="Section 3 Description">
                                        @if ($errors->has('section_3_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_3_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="add_more">
                            @if (isset($programtypescms->bachelorDurations) && count($programtypescms->bachelorDurations) > 0)
                                @foreach ($programtypescms->bachelorDurations as $key => $bachelorDuration)
                                    <div class="col-xl-3 col-md-3">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                {{-- meta title --}}
                                                <label for="floatingInputValue">Section 3 Slider Title</label>
                                                <input type="text" class="form-control" id="floatingInputValue"
                                                    name="section_3_slider_title[]"
                                                    value="{{ $bachelorDuration->duration_title }}"
                                                    placeholder="Section 3 Slider Title">
                                                @if ($errors->has('section_3_slider_title'))
                                                    <div class="error" style="color:red;">
                                                        {{ $errors->first('section_3_slider_title') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                {{-- banner_title --}}
                                                <label for="floatingInputValue">Section 3 Slider Image</label>
                                                <input type="file" class="form-control" id="floatingInputValue"
                                                    name="section_3_slider_image[]">
                                                    <input type="hidden" name="section_3_slider_image_id[]" value="{{ $bachelorDuration->id }}">
                                                @if ($errors->has('section_3_slider_image'))
                                                    <div class="error" style="color:red;">
                                                        {{ $errors->first('section_3_slider_image') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-4">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                {{-- meta description --}}
                                                <label for="floatingInputValue">Section 3 Slider Description</label>
                                                <input type="text" class="form-control" id="floatingInputValue"
                                                    name="section_3_slider_description[]"
                                                    value="{{ $bachelorDuration->duration_desc }}"
                                                    placeholder="Section 3 Slider Description">
                                                @if ($errors->has('section_3_slider_description'))
                                                    <div class="error" style="color:red;">
                                                        {{ $errors->first('section_3_slider_description') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @if ($key > 0)
                                        <div class="col-xl-2">
                                            <div class="btn-1">
                                                <button type="button" class="remove"><i class="ph ph-minus"></i>
                                                    </button>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-xl-2">
                                            <div class="btn-1">
                                                <button type="button" class="add-more"><i class="ph ph-plus"></i> </button>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="col-xl-3 col-md-3">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            {{-- meta title --}}
                                            <label for="floatingInputValue">Section 3 Slider Title</label>
                                            <input type="text" class="form-control" id="floatingInputValue"
                                                name="section_3_slider_title[]" value=""
                                                placeholder="Section 3 Slider Title">
                                            @if ($errors->has('section_3_slider_title'))
                                                <div class="error" style="color:red;">
                                                    {{ $errors->first('section_3_slider_title') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            {{-- banner_title --}}
                                            <label for="floatingInputValue">Section 3 Slider Image</label>
                                            <input type="file" class="form-control" id="floatingInputValue"
                                                name="section_3_slider_image[]">
                                            @if ($errors->has('section_3_slider_image'))
                                                <div class="error" style="color:red;">
                                                    {{ $errors->first('section_3_slider_image') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-4">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            {{-- meta description --}}
                                            <label for="floatingInputValue">Section 3 Slider Description</label>
                                            <input type="text" class="form-control" id="floatingInputValue"
                                                name="section_3_slider_description[]" value=""
                                                placeholder="Section 3 Slider Description">
                                            @if ($errors->has('section_3_slider_description'))
                                                <div class="error" style="color:red;">
                                                    {{ $errors->first('section_3_slider_description') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="btn-1">
                                        <button type="button" class="add-more"><i class="ph ph-plus "></i>
                                        </button>
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
                                            value="{{ $programtypescms->section_4_title ? $programtypescms->section_4_title : old('section_4_title') }}"
                                            placeholder="Section 4 Title">
                                        @if ($errors->has('section_4_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_4_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Section 4 Description*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_4_description"
                                            value="{{ $programtypescms->section_4_description ? $programtypescms->section_4_description : old('section_4_description') }}"
                                            placeholder="Section 4 Description*">
                                        @if ($errors->has('section_4_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_4_description') }}</div>
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
                                            name="seo_title"
                                            value="{{ $programtypescms->seo_title ? $programtypescms->seo_title : old('seo_title') }}"
                                            placeholder="Meta Title">
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
                                            name="seo_keywords"
                                            value="{{ $programtypescms->seo_keywords ? $programtypescms->seo_keywords : old('seo_keywords') }}"
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
                                            class="form-control">{{ $programtypescms->seo_description ? $programtypescms->seo_description : old('seo_description') }}</textarea>
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
    <script>
        $(document).ready(function() {
        $('.add-more').click(function() {
            var html = `
            <div class="col-xl-3 col-md-3">
                <div class="form-group-div">
                    <div class="form-group">
                        <label for="floatingInputValue">Section 3 Slider Title</label>
                        <input type="text" class="form-control" id="floatingInputValue"
                            name="section_3_slider_title[]"
                            placeholder="Section 3 Slider Title">

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group-div">
                    <div class="form-group">

                        <label for="floatingInputValue">Section 3 Slider Image</label>
                        <input type="file" class="form-control" id="floatingInputValue"
                            name="section_3_slider_image[]">

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="form-group-div">
                    <div class="form-group">
                        <label for="floatingInputValue">Section 3 Slider Description</label>
                        <input type="text" class="form-control" id="floatingInputValue"
                            name="section_3_slider_description[]"
                            placeholder="Section 3 Slider Description">
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="btn-1">
                    <button type="button" class="remove"><i class="ph ph-minus"></i> </button>
                </div>
            </div>`;
            $("#add_more").append(html);
            });

            // Remove functionality
            $(document).on("click", ".remove", function() {
               $(this).parent().parent().prev().remove();
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().remove();

            });
    });
    </script>
@endpush