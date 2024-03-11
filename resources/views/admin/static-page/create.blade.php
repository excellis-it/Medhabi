@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Create Static Page
@endsection
@push('styles')
@endpush
@section('head')
    Create Static Page
@endsection

@section('content')
@php
    use App\Helpers\Helper;
@endphp
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('static-pages.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="sales-report-card-wrap">
                        <div class="form-head">
                            <h4>Static Page Details</h4>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- name --}}
                                        <label for="floatingInputValue">Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="title"
                                            value="{{ old('title') }}" placeholder="Page Title*">
                                        @if ($errors->has('title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- menu --}}
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Menu*</label>
                                        <select name="menu_id" id="menu_id" class="form-control">
                                            <option value="">Select</option>
                                            {!! Helper::generateMenuOptions() !!}
                                        </select>
                                        @if ($errors->has('menu_id'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('menu_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- link --}}
                                        <label for="floatingInputValue">Content*</label>
                                        <textarea class="form-control" id="editor1" name="content"
                                            placeholder="Details*">{{ old('content') }}</textarea>
                                        @if ($errors->has('content'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('content') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-12">
                            <div class="btn-1">
                                <button type="submit">Create Page</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@push('scripts')

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
    CKEDITOR.on('instanceReady', function(evt) {
        var editor = evt.editor;

        editor.on('change', function(e) {
            var contentSpace = editor.ui.space('contents');
            var ckeditorFrameCollection = contentSpace.$.getElementsByTagName('iframe');
            var ckeditorFrame = ckeditorFrameCollection[0];
            var innerDoc = ckeditorFrame.contentDocument;
            var innerDocTextAreaHeight = $(innerDoc.body).height();
            console.log(innerDocTextAreaHeight);
        });
    });
</script>
@endpush
