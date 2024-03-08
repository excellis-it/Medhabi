@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Edit Static Page
@endsection
@push('styles')
@endpush
@section('head')
    Edit Static Page
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('update.static-pages') }}" method="post" enctype="multipart/form-data">
                    
                    @csrf
                    <div class="sales-report-card-wrap">
                        <div class="form-head">
                            <h4>Static Page Details</h4>
                        </div>

                        <input type="hidden" name="id" value="{{ $static_page->id }}" >

                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- name --}}
                                        <label for="floatingInputValue">Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="title"
                                            value="{{ $static_page->title }}" placeholder="Page Title*">
                                        @if ($errors->has('title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('title') }}</div>
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
                                            placeholder="Details*">{{ $static_page->content }}</textarea>
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
                                <button type="submit">Update Page Details</button>
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
