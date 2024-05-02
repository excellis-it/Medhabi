@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Create School Galary 
@endsection
@push('styles')
@endpush
@section('head')
    Create School Galary
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('galaries.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="sales-report-card-wrap">
            
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- name --}}
                                        <label for="floatingInputValue">Title*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="title"
                                            value="{{ old('title') }}" placeholder="Menu Title*">
                                        @if ($errors->has('title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="sales-report-card-wrap">
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- banner_title --}}
                                        <label for="floatingInputValue">Gallery Image* (image should be 50 MB or less)</label>
                                        <input type="file" class="form-control" id="galary-image"
                                            name="image"
                                            value="{{ old('image') }}"
                                            placeholder="Image" >
                                        @if ($errors->has('image'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('image') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        
                                        <img src="" id="galary-image-preview" style="width: 180px; height: 150px;display:none;" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="sales-report-card-wrap mt-5">
                        <div class="row">
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
        window.onload = function() {
           
            // galary-image preview
            document.getElementById("galary-image").addEventListener("change", function(){
                document.getElementById("galary-image-preview").style.display = "block";
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById("galary-image-preview").setAttribute('src', e.target.result);
                };
                reader.readAsDataURL(this.files[0]);
            });
        };
    </script>
@endpush
