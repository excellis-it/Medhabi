@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Achievement and Key Milestones
@endsection
@push('styles')
@endpush
@section('head')
    Achievement and Key Milestones
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('achievement-and-key-milestones.store') }}" method="post"
                    id="achievement-key-milestones" enctype="multipart/form-data">
                    @csrf
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Achievements Section</h4>
                        </div>
                        <div class="row count-class" id="add-more">
                            @if (count($achievements) > 0)
                                @foreach ($achievements as $key => $achievement)
                                    <div class="col-xl-5 col-md-5 mt-4">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                {{-- meta title --}}
                                                <label for="floatingInputValue">Achievement Title</label>
                                                <input type="text" class="form-control" name="title[]"
                                                    value="{{ $achievement['title'] }}" placeholder="Achievement Title">
                                                <span class="text-danger title_error.{{ $key }}"
                                                    id="title_error_{{ $key }}"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 mt-4">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                {{-- banner_title --}}
                                                <label for="floatingInputValue">Achievement Short Description*</label>
                                                <input type="text" class="form-control" name="description[]"
                                                    value="{{ $achievement['description'] }}"
                                                    placeholder="Achievement Short Description">
                                                <span class="text-danger description_error.{{ $key }}"
                                                    id="description_error_{{ $key }}"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($key == 0)
                                        <div class="col-xl-2 mt-4 mb-4">
                                            <div class="btn-1">
                                                <button type="button" class="add-more"><i class="ph ph-plus"></i> </button>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-xl-2 mt-4 mb-4">
                                            <div class="btn-1">
                                                <button type="button" class="remove"><i class="ph ph-minus"></i> </button>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="col-xl-5 col-md-5 mt-4">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            {{-- meta title --}}
                                            <label for="floatingInputValue">Achievement Title*</label>
                                            <input type="text" class="form-control" name="title[]" value=""
                                                placeholder="Achievement Title">
                                            <span class="text-danger title_error.0" id="title_error_0"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 mt-4">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            {{-- banner_title --}}
                                            <label for="floatingInputValue">Achievement Short Description*</label>
                                            <input type="text" class="form-control" name="description[]" value=""
                                                placeholder="Achievement Short Description">
                                            <span class="text-danger description_error.0" id="description_error_0"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 mt-4 mb-4">
                                    <div class="btn-1">
                                        <button type="button" class="add-more"><i class="ph ph-plus"></i> </button>
                                    </div>
                                </div>
                            @endif

                        </div>

                    </div>
                    <div class="sales-report-card-wrap mt-5">
                        <div class="form-head">
                            <h4>Key Milestone Section</h4>
                        </div>
                        <div class="row count-class-key" id="add-more-key">
                            @if (count($key_milestones) > 0)
                                @foreach ($key_milestones as $key => $item)
                                    <div class="col-xl-3 col-md-3 mt-4">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                {{-- meta title --}}
                                                <label for="floatingInputValue">Key Milestone Image</label>
                                                <input type="file" class="form-control" name="key_milestone_image[]"
                                                    value="" placeholder="Key Milestone Image">
                                                <input type="hidden" name="key_milestone_image_id[]"
                                                    value="{{ $item['id'] }}">
                                                <span class="text-danger key_milestone_image_error.{{ $key }}"
                                                    id="key_milestone_image_error_{{ $key }}"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                {{-- meta title --}}
                                                <label for="floatingInputValue">Key Milestone Title*</label>
                                                <input type="text" class="form-control" name="key_milestone_title[]"
                                                    value="{{ $item['title'] }}" placeholder="Key Milestone Title">
                                                <span class="text-danger key_milestone_title_error.{{ $key }}"
                                                    id="key_milestone_title_error_{{ $key }}"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-4">
                                        <div class="form-group-div">
                                            <div class="form-group">
                                                {{-- banner_title --}}
                                                <label for="floatingInputValue">Key Milestone Short Description*</label>
                                                <input type="text" class="form-control"
                                                    name="key_milestone_description[]" value="{{ $item['description'] }}"
                                                    placeholder="Key Milestone Short Description">
                                                <span
                                                    class="text-danger key_milestone_description_error.{{ $key }}"
                                                    id="key_milestone_description_error_{{ $key }}"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($key == 0)
                                        <div class="col-xl-2 mt-4 mb-4">
                                            <div class="btn-1">
                                                <button type="button" class="add-more-key"><i class="ph ph-plus "></i>
                                                </button>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-xl-2 mt-4 mb-4">
                                            <div class="btn-1">
                                                <button type="button" class="remove-key"><i class="ph ph-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="col-xl-3 col-md-3 mt-4">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            {{-- meta title --}}
                                            <label for="floatingInputValue">Key Milestone Image</label>
                                            <input type="file" class="form-control" name="key_milestone_image[]"
                                                value="" placeholder="Key Milestone Image">
                                            <span class="text-danger key_milestone_image_error.0"
                                                id="key_milestone_image_error_0"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-4">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            {{-- meta title --}}
                                            <label for="floatingInputValue">Key Milestone Title*</label>
                                            <input type="text" class="form-control" name="key_milestone_title[]"
                                                value="" placeholder="Key Milestone Title">
                                            <span class="text-danger key_milestone_title_error.0"
                                                id="key_milestone_title_error_0"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-4">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            {{-- banner_title --}}
                                            <label for="floatingInputValue">Key Milestone Short Description*</label>
                                            <input type="text" class="form-control" name="key_milestone_description[]"
                                                value="" placeholder="Key Milestone Short Description">
                                            <span class="text-danger key_milestone_description_error.0"
                                                id="key_milestone_description_error_0"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 mt-4 mb-4">
                                    <div class="btn-1">
                                        <button type="button" class="add-more-key"><i class="ph ph-plus"></i> </button>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="btn-1">
                                    <button type="submit">Update Achievement and Key Milestones</button>
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
                var count = $(".count-class .col-xl-5").length;

                var html = '<div class="col-xl-5 col-md-5 mt-4">' +
                    '<div class="form-group-div">' +
                    '<div class="form-group">' +
                    '<label for="floatingInputValue">Achievement Title</label>' +
                    '<input type="text" class="form-control" name="title[]" value="" placeholder="Achievement Title">' +
                    '<span class="text-danger title_error_' + count + '" id="title_error_' + count +
                    '"></span>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-md-5 mt-4">' +
                    '<div class="form-group-div">' +
                    '<div class="form-group">' +
                    '<label for="floatingInputValue">Achievement Short Description*</label>' +
                    '<input type="text" class="form-control" name="description[]" value="" placeholder="Achievement Short Description">' +
                    '<span class="text-danger description_error_' + count +
                    '" id="description_error_' + count + '"></span>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-xl-2 mt-4 mb-4">' +
                    '<div class="btn-1">' +
                    '<button type="button" class="remove"><i class="ph ph-minus"></i></button>' +
                    '</div>' +
                    '</div>';

                $(".count-class").append(html);
            });

            // Remove functionality
            $(document).on("click", ".remove", function() {
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().remove();
            });

        });
    </script>
    <script>
        $(document).ready(function() {
            // Add More functionality for key milestones
            $(document).on("click", ".add-more-key", function() {
                var count = $(".count-class-key .col-xl-3").length;

                var newRow =
                    '<div class="col-xl-3 col-md-3 mt-4">' +
                    '<div class="form-group-div">' +
                    '<div class="form-group">' +
                    '<label for="floatingInputValue">Key Milestone Image</label>' +
                    '<input type="file" class="form-control" name="key_milestone_image[]" value="" placeholder="Key Milestone Image">' +
                    '<input type="hidden" name="key_milestone_image_id[]" value="">' +
                    '<span class="text-danger key_milestone_image_error_' + count +
                    '" id="key_milestone_image_error_' + count + '"></span>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-md-3 mt-4">' +
                    '<div class="form-group-div">' +
                    '<div class="form-group">' +
                    '<label for="floatingInputValue">Key Milestone Title*</label>' +
                    '<input type="text" class="form-control" name="key_milestone_title[]" value="" placeholder="Key Milestone Title">' +
                    '<span class="text-danger key_milestone_title_error_' + count +
                    '" id="key_milestone_title_error_' + count + '"></span>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-md-4 mt-4">' +
                    '<div class="form-group-div">' +
                    '<div class="form-group">' +
                    '<label for="floatingInputValue">Key Milestone Short Description*</label>' +
                    '<input type="text" class="form-control" name="key_milestone_description[]" value="" placeholder="Key Milestone Short Description">' +
                    '<span class="text-danger key_milestone_description_error_' + count +
                    '" id="key_milestone_description_error_' + count + '"></span>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-xl-2 mt-4 mb-4">' +
                    '<div class="btn-1">' +
                    '<button type="button" class="remove-key"><i class="ph ph-minus"></i></button>' +
                    '</div>' +
                    '</div>';

                $(".count-class-key").append(newRow);
            });

            // Remove functionality for key milestones
            $(document).on("click", ".remove-key", function() {
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().prev().remove();
                $(this).parent().parent().remove();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#achievement-key-milestones').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);
                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        window.location.reload();
                        toastr.success(
                            'Achievement and Key Milestones details added successfully');
                    },
                    error: function(xhr) {
                        // Handle errors (e.g., display validation errors)
                        // Clear any old errors
                        $('.text-danger').html('');
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            if (key.includes('.')) {
                                // Handle array validation errors
                                var fieldName = key.split('.');
                                var fieldName = fieldName[0];
                                // Display errors for array fields
                                var num = key.match(/\d+/)[0];
                                console.log(value[0]);
                                // console.log( $('#' + fieldName+ '_error.' + num).html(value[0]));
                                $('#' + fieldName + '_error_' + num).html(value[0]);
                            } else {
                                // Display errors for non-array fields
                                $('.' + key + '_error').html(value[0]);
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
