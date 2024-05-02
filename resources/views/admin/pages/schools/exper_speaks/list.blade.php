@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Update Expert speaks Page
@endsection
@push('styles')
    <style>
        .image-area {
            position: relative;
            width: 15%;
            background: #333;
        }

        .image-area img {
            max-width: 100%;
            height: auto;
        }

        .remove-image {
            display: none;
            position: absolute;
            top: -10px;
            right: -10px;
            border-radius: 10em;
            padding: 2px 6px 3px;
            text-decoration: none;
            font: 700 21px/20px sans-serif;
            background: #555;
            border: 3px solid #fff;
            color: #FFF;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5), inset 0 2px 4px rgba(0, 0, 0, 0.3);
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
            -webkit-transition: background 0.5s;
            transition: background 0.5s;
        }

        .remove-image:hover {
            background: #E54E4E;
            padding: 3px 7px 5px;
            top: -11px;
            right: -11px;
        }

        .remove-image:active {
            background: #E54E4E;
            top: -10px;
            right: -11px;
        }
    </style>
@endpush
@section('head')
    Update Expert speaks Page
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('expert-speaks.store') }}" method="post" enctype="multipart/form-data" id="edit-form">
                    @csrf
                    <input type="hidden" name="school_id" value="{{ $school_id }}">

                    <div class="sales-report-card-wrap mt-5">
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- meta title --}}
                                        <label for="floatingInputValue">Expert Speaker Image</label>
                                        <input type="file" class="form-control" id="floatingInputValue" name="image[]"
                                            value="{{ old('image') }}" multiple>
                                       @if ($errors->has('image'))
                                           <div class="error" style="color:red;">
                                               {{ $errors->first('image') }}</div>

                                       @endif
                                    </div>
                                </div>
                            </div>
                            @if (isset($experSpeaks) && count($experSpeaks) > 0)
                                <div class="row mb-6">
                                    @foreach ($experSpeaks as $experSpeak)
                                        <div class="image-area m-4" id="{{ $experSpeak->id }}">
                                            <img src="{{ Storage::url($experSpeak->image) }}" alt="Preview">
                                            <a class="remove-image" href="javascript:void(0);"
                                                data-id="{{ $experSpeak->id }}" style="display: inline;">&#215;</a>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="btn-1">
                                    <button type="submit">Update</button>
                                    <a
                                        href="{{ route('expert-speaks.index', ['school_id' => $school_id]) }}"><span>Cancel</span></a>
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
            $('.remove-image').click(function() {
                var id = $(this).data('id');
                var token = $("meta[name='csrf-token']").attr("content");
                // show confirm alert
                if (!confirm("Do you really want to delete this image?")) {
                    return false;
                } else {
                    $.ajax({
                        url: "{{ route('expert-speaks.image.delete') }}",
                        type: 'GET',
                        data: {
                            "id": id,
                            "_token": token,
                        },
                        success: function() {
                            toastr.success('Image Deleted Successfully');
                            $('#' + id).remove();
                        }
                    });
                }
            });
        });
    </script>
@endpush
