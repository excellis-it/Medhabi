@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Edit Blog Details
@endsection
@push('styles')
@endpush
@section('head')
    Edit Blog Details
@endsection
@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <div class="sales-report-card-wrap">
                    <div class="form-head">
                        <h4>Blog Details</h4>
                    </div>
                    <form action="{{ route('blogs.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row justify-content-between">

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- name --}}
                                        <label for="name">Name*</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $blog->name }}" placeholder="Name*">
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
                                        {{-- name --}}
                                        <label for="floatingInputValue">Short Description*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="short_description" value="{{$blog->short_description ?? ''}}"
                                            value="{{ old('short_description') }}" placeholder="Short Description*">
                                        @if ($errors->has('short_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('short_description') }}</div>
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
                                            <option value="1" {{ $blog['status'] == 1 ? 'selected' : '' }}>Active
                                            </option>
                                            <option value="0" {{ $blog['status'] == 0 ? 'selected' : '' }}>Inactive
                                            </option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('status') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- image --}}
                                        <label for="floatingInputValue">Image*</label>
                                        <input type="file" class="form-control" id="floatingInputValue" name="image"
                                            value="{{ old('image') }}" placeholder="Image*">
                                        @if ($errors->has('image'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('image') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                       {{-- description --}}
                                        <label for="floatingInputValue">Description*</label>
                                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"
                                            class="form-control">{{ $blog['description'] }}</textarea>
                                        @if ($errors->has('description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="sales-report-card-wrap mt-5">
                    <div class="form-head">
                        <h4>SEO Tools</h4>
                    </div>

                    <div class="row">
                        {{-- slug --}}
                        <div class="col-xl-4 col-md-4">
                            <div class="form-group-div">
                                <div class="form-group">
                                    {{-- meta title --}}
                                    <label for="slug">Slug*</label>
                                    <input type="text" class="form-control" id="slug" name="slug"
                                    value="{{ $blog['slug'] ? $blog['slug'] : old('slug') }}" placeholder="Slug">
                                    @if ($errors->has('slug'))
                                        <div class="error" style="color:red;">
                                            {{ $errors->first('slug') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4">
                            <div class="form-group-div">
                                <div class="form-group">
                                    {{-- meta title --}}
                                    <label for="floatingInputValue">Meta Title</label>
                                    <input type="text" class="form-control" id="floatingInputValue" name="meta_title"
                                    value="{{ $blog['meta_title'] ? $blog['meta_title'] : old('meta_title') }}" placeholder="Meta Title">
                                    @if ($errors->has('meta_title'))
                                        <div class="error" style="color:red;">
                                            {{ $errors->first('meta_title') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4">
                            <div class="form-group-div">
                                <div class="form-group">
                                    {{-- meta keyword --}}
                                    <label for="floatingInputValue">Meta Keyword</label>
                                    <input type="text" class="form-control" id="floatingInputValue" name="meta_keyword"
                                        value="{{ $blog['meta_keyword'] ? $blog['meta_keyword'] : old('meta_keyword') }}" placeholder="Meta Keyword">
                                    @if ($errors->has('meta_keyword'))
                                        <div class="error" style="color:red;">
                                            {{ $errors->first('meta_keyword') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <div class="form-group-div">
                                <div class="form-group">
                                    {{-- meta description --}}
                                    <label for="floatingInputValue">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" cols="30" rows="10" placeholder="Meta Description"
                                        class="form-control">{{ $blog['meta_description'] }}</textarea>
                                    @if ($errors->has('meta_description'))
                                        <div class="error" style="color:red;">
                                            {{ $errors->first('meta_description') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="btn-1">
                                <button type="submit">Update Blog Details</button>
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
<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector("#description"));
    </script>
     <script>
        $(document).ready(function() {
            $('#name').on('keyup', function() {
                var name = $(this).val();
                var slug = name.toLowerCase().replace(/\s+/g,
                '-'); // Convert to lowercase and replace spaces with hyphens
                $('#slug').val(slug); // Update the value of the slug input field
            });
        });
    </script>
@endpush
