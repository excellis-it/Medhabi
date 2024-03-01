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
                <form action="{{ route('application-process.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- <input type="hidden" name="id" value="{{ $career->id ?? '' }}"> --}}
                    <div class="sales-report-card-wrap">
                        

                        <div class="row justify-content-between" >
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="title" required placeholder="Add Title">
                                            
                                        @if ($errors->has('title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_description --}}
                                        <label for="floatingInputValue">Description*</label>
                                        <input type="text" class="form-control" id="floatingInputValue"
                                            name="description" required placeholder="Add Description">
                                        @if ($errors->has('description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between" id="add-more">
                        <div class="col-xl-5 col-md-5 mt-4">
                            <div class="form-group-div">
                                <div class="form-group">
                                    {{-- meta title --}}
                                    <label for="floatingInputValue">Process Image*</label>
                                    <input type="file" class="form-control" name="process_image[]"
                                        value="" placeholder="Process Image">
                                    <span class="text-danger process_image_error"
                                        id="process_image_error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 mt-4">
                            <div class="form-group-div">
                                <div class="form-group">
                                    {{-- banner_title --}}
                                    <label for="floatingInputValue">Process Description*</label>
                                    <input type="text" class="form-control"
                                        name="process_desc[]" required
                                        placeholder="Process Description">
                                    <span
                                        class="text-danger process_description_error"
                                        id="process_description_error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 mt-4 mb-4">
                            <div class="btn-1">
                                <button type="button" class="add-more"><i class="ph ph-plus "></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between" >
                        <div class="col-md-5">
                            <div class="form-group-div">
                                <div class="form-group">
                                    {{-- banner_title --}}
                                    <label for="floatingInputValue">Button Text*</label>
                                    <input type="text" class="form-control" id="floatingInputValue"
                                        name="button_text" required placeholder="Add Button Text">
                                        
                                    @if ($errors->has('button_text'))
                                        <div class="error" style="color:red;">
                                            {{ $errors->first('button_text') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="btn-1">
                            <button type="submit">Create Application Process</button>
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
                var html = `
            <div class="col-xl-5 col-md-5 mt-4">
                <div class="form-group-div">
                    <div class="form-group">
                        <label for="floatingInputValue">Process Image</label>
                        <input type="file" class="form-control" name="process_image[]" value="" placeholder="Process Image">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-5 mt-4">
                <div class="form-group-div">
                    <div class="form-group">
                        <label for="floatingInputValue">Process Description*</label>
                        <input type="text" class="form-control" name="process_description[]" required value="" placeholder="Process Description">
                    </div>
                </div>
            </div>
            <div class="col-xl-2 mt-4">
                <div class="btn-1">
                    <button type="button" class="remove"><i class="ph ph-minus"></i> </button>
                </div>
            </div>`;
                $("#add-more").append(html);
            });

            // Remove functionality
            $(document).on("click", ".remove", function() {
               $(this).parent().parent().prev().remove();
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().remove();
                
            });
        });
    </script>
@endpush
