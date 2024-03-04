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



                        <div class="row justify-content-between">
                            <div class="col-xl-6 col-md-5 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Process Image*</label>
                                        <input type="file" class="form-control" name="process_image" value=""
                                            placeholder="Process Image">
                                        @if ($errors->has('process_image'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('process_image') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Process Description*</label>
                                        <input type="text" class="form-control" name="process_description"
                                            placeholder="Process Description">
                                        @if ($errors->has('process_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('process_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="btn-1">
                                    <button type="submit">Create Application Process</button>
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
                        <input type="text" class="form-control" name="process_description[]"  value="" placeholder="Process Description">
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
