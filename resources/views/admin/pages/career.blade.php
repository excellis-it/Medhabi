@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Update Content Career Page
@endsection
@push('styles')
@endpush
@section('head')
    Update Content Career Page
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('career.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $career->id ?? '' }}">
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
                                            value="{{ isset($career['banner_title']) ? $career['banner_title'] : old('banner_title') }}"
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
                                            value="{{ isset($career['banner_image']) ? $career['banner_image'] : old('banner_image') }}"
                                            placeholder="Banner Image">
                                        @if ($errors->has('banner_image'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('banner_image') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_description --}}
                                        <label for="floatingInputValue">Banner Description*</label>
                                        <textarea name="banner_description" id="banner_description" placeholder="Description" class="form-control">{{ isset($career['banner_description']) ? $career['banner_description'] : old('banner_description') }}</textarea>
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
                                            value="{{ isset($career['section_1_title']) ? $career['section_1_title'] : old('section_1_title') }}"
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
                                        {{-- meta keyword --}}
                                        <label for="floatingInputValue">Section 1 Url*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_1_url"
                                            value="{{ isset($career['section_1_url']) ? $career['section_1_url'] : old('section_1_url') }}"
                                            placeholder="Section 1 Url">
                                        @if ($errors->has('section_1_url'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_1_url') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Section 1 Image</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="section_1_image"
                                            value="{{ isset($career['section_1_image']) ? $career['section_1_image'] : old('section_1_image') }}"
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
                                        <label for="floatingInputValue">Section 1 Description</label>
                                        <textarea name="section_1_description" id="section_1_description" cols="30" rows="10"
                                            placeholder="Section 1 Description" class="form-control">{{ isset($career['section_1_description']) ? $career['section_1_description'] : old('section_1_description') }}</textarea>
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
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 2 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_2_title"
                                            value="{{ isset($career['section_2_title']) ? $career['section_2_title'] : old('section_2_title') }}"
                                            placeholder="Section 2 Title">
                                        @if ($errors->has('section_2_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_2_title') }}</div>
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
                                            placeholder="Section 2 Description" class="form-control">{{ isset($career['section_2_description']) ? $career['section_2_description'] : old('section_2_description') }}</textarea>
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
                                        <label for="floatingInputValue">Section 3 Title 1*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_3_title_1"
                                            value="{{ isset($career['section_3_title_1']) ? $career['section_3_title_1'] : old('section_3_title_1') }}"
                                            placeholder="Section 3 Title 1">
                                        @if ($errors->has('section_3_title_1'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_3_title_1') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Section 3 Image 1*</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="section_3_image_1" value="{{ $career['section_3_image_1'] ?? '' }}"
                                            placeholder="Section 3 Image 1*">
                                        @if ($errors->has('section_3_image_1'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_3_image_1') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 3 Description 1*</label>
                                        <textarea name="section_3_description_1" id="section_3_description_1" cols="30" rows="10"
                                            placeholder="Section 3 Description 1" class="form-control">{{ isset($career['section_3_description_1']) ? $career['section_3_description_1'] : old('section_3_description_1') }}</textarea>
                                        @if ($errors->has('section_3_description_1'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_3_description_1') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 3 Title 2*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_3_title_2"
                                            value="{{ isset($career['section_3_title_2']) ? $career['section_3_title_2'] : old('section_3_title_2') }}"
                                            placeholder="Section 3 Title 2">
                                        @if ($errors->has('section_3_title_2'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_3_title_2') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Section 3 Image 2*</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="section_3_image_2"
                                            value="{{ isset($career['section_3_image_2']) ? $career['section_3_image_2'] : old('section_3_image_2') }}"
                                            placeholder="Section 3 Image 2*">
                                        @if ($errors->has('section_3_image_2'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_3_image_2') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 3 Description 2*</label>
                                        <textarea name="section_3_description_2" id="section_3_description_2" cols="30" rows="10"
                                            placeholder="Section 3 Description 2" class="form-control">{{ isset($career['section_3_description_2']) ? $career['section_3_description_2'] : old('section_3_description_2') }}</textarea>
                                        @if ($errors->has('section_3_description_2'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_3_description_2') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 3 Title 3*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_3_title_3"
                                            value="{{ isset($career['section_3_title_3']) ? $career['section_3_title_3'] : old('section_3_title_3') }}"
                                            placeholder="Section 3 Title 3">
                                        @if ($errors->has('section_3_title_3'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_3_title_3') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Section 3 Image 3*</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="section_3_image_3"
                                            value="{{ isset($career['section_3_image_3']) ? $career['section_3_image_3'] : old('section_3_image_3') }}"
                                            placeholder="Section 3 Image 3*">
                                        @if ($errors->has('section_3_image_3'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_3_image_3') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 3 Description 3*</label>
                                        <textarea name="section_3_description_3" id="section_3_description_3" cols="30" rows="10"
                                            placeholder="Section 3 Description 3" class="form-control">{{ isset($career['section_3_description_3']) ? $career['section_3_description_3'] : old('section_3_description_3') }}</textarea>
                                        @if ($errors->has('section_3_description_3'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_3_description_3') }}</div>
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
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 4 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_4_title"
                                            value="{{ isset($career['section_4_title']) ? $career['section_4_title'] : old('section_4_title') }}"
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
                                        <label for="floatingInputValue">Section 4 Image</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="section_4_image"
                                            value="{{ isset($career['section_4_image']) ? $career['section_4_image'] : old('section_4_image') }}"
                                            placeholder="Section 4 Image">
                                        @if ($errors->has('section_4_image'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_4_image') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 4 Description</label>
                                        <textarea name="section_4_description" id="section_4_description" cols="30" rows="10"
                                            placeholder="Section 4 Description" class="form-control">{{ isset($career['section_4_description']) ? $career['section_4_description'] : old('section_4_description') }}</textarea>
                                        @if ($errors->has('section_4_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_4_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="add-more">
                            @if (count($careerModules) > 0)
                                @foreach ($careerModules as $key => $item)
                                    <div class="col-xl-4 col-md-4 mt-4">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                {{-- meta title --}}
                                                <label for="floatingInputValue">Section 4 Module Image</label>
                                                <input type="file" class="form-control" name="module_image[]"
                                                    value="" placeholder="Section 4 Module Image">
                                                <input type="hidden" name="module_image_id[]"
                                                    value="{{ $item['id'] }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                {{-- banner_title --}}
                                                <label for="floatingInputValue">Section 4 Module Short Description*</label>
                                                <input type="text" class="form-control" name="module_description[]"
                                                    required value="{{ $item['description'] }}"
                                                    placeholder="Section 4 Module Short Description">
                                            </div>
                                        </div>
                                    </div>
                                    @if ($key > 0)
                                        <div class="col-xl-4">
                                            <div class="btn-1">
                                                <button type="button" class="remove"><i class="ph ph-minus"></i>
                                                    Remove</button>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-xl-4">
                                            <div class="btn-1">
                                                <button type="button" class="add-more"><i class="ph ph-plus"></i> Add
                                                    More</button>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="col-xl-4 col-md-4 mt-4">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            {{-- meta title --}}
                                            <label for="floatingInputValue">Section 4 Module Image</label>
                                            <input type="file" class="form-control" name="module_image[]" required
                                                value="" placeholder="Section 4 Module Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-4">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            {{-- banner_title --}}
                                            <label for="floatingInputValue">Section 4 Module Short Description*</label>
                                            <input type="text" class="form-control" name="module_description[]"
                                                required value="" placeholder="Section 4 Module Short Description">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
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
                            <h4>Section 5</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 5 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_5_title"
                                            value="{{ isset($career['section_5_title']) ? $career['section_5_title'] : old('section_5_title') }}"
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
                                            placeholder="Section 5 Description" class="form-control">{{ isset($career['section_5_description']) ? $career['section_5_description'] : old('section_5_description') }}</textarea>
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
                            <h4>Section 6</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 6 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_6_title"
                                            value="{{ isset($career['section_6_title']) ? $career['section_6_title'] : old('section_6_title') }}"
                                            placeholder="Section 6 Title">
                                        @if ($errors->has('section_6_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_6_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Section 6 Image</label>
                                        <input type="file" class="form-control" id="floatingInputValue"
                                            name="section_6_image"
                                            value="{{ isset($career['section_6_image']) ? $career['section_6_image'] : old('section_6_image') }}"
                                            placeholder="Section 6 Image">
                                        @if ($errors->has('section_6_image'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_6_image') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 6 Description</label>
                                        <textarea name="section_6_description" id="section_6_description" cols="30" rows="10"
                                            placeholder="Section 6 Description" class="form-control">{{ isset($career['section_6_description']) ? $career['section_6_description'] : old('section_6_description') }}</textarea>
                                        @if ($errors->has('section_6_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_6_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Section 7</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 7 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_7_title"
                                            value="{{ isset($career['section_7_title']) ? $career['section_7_title'] : old('section_7_title') }}"
                                            placeholder="Section 7 Title">
                                        @if ($errors->has('section_7_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_7_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 7 Description*</label>
                                        <textarea name="section_7_description" id="section_7_description" cols="30" rows="10"
                                            placeholder="Section 7 Description" class="form-control">{{ isset($career['section_7_description']) ? $career['section_7_description'] : old('section_7_description') }}</textarea>
                                        @if ($errors->has('section_7_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_7_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Section 8</h4>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Section 8 Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="section_8_title"
                                            value="{{ isset($career['section_8_title']) ? $career['section_8_title'] : old('section_8_title') }}"
                                            placeholder="Section 8 Title">
                                        @if ($errors->has('section_8_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_8_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta description --}}
                                        <label for="floatingInputValue">Section 8 Description*</label>
                                        <textarea name="section_8_description" id="section_8_description" cols="30" rows="10"
                                            placeholder="Section 8 Description" class="form-control">{{ isset($career['section_8_description']) ? $career['section_8_description'] : old('section_8_description') }}</textarea>
                                        @if ($errors->has('section_8_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section_8_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="btn-1">
                                    <button type="submit">Update Career Page Page</button>
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
            $(".add-more").click(function() {
                var clone = $(this).closest("#add-more").clone();
                clone.find('input[type="text"]').val('');
                clone.find('.error').remove();
                clone.find('.add-more').removeClass('add-more').addClass('remove').html(
                    '<i class="ph ph-minus"></i> Remove');
                $(this).closest("#add-more").after(clone);
            });

            // Remove functionality
            $(document).on("click", ".remove", function() {
                $(this).closest("#add-more").remove();
            });
        });
    </script>
@endpush
