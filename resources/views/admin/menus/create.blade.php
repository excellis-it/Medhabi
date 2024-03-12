@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Create Menu
@endsection
@push('styles')
@endpush
@section('head')
    Create Menu
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('menus.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="sales-report-card-wrap">
                        <div class="form-head">
                            <h4>Menu Details</h4>
                        </div>

                        <div class="row justify-content-between">
                            {{-- type --}}
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Type*</label>
                                        <select name="type" id="type" class="form-control">
                                            <option value="">Select</option>
                                            <option value="header">Header</option>
                                            <option value="footer">Footer</option>
                                        </select>
                                        @if ($errors->has('type'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('type') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                             {{-- Parent Menu list --}}
                             <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Parent Menu</label>
                                        <select name="parent_id" id="parent_id" class="form-control">

                                        </select>
                                        @if ($errors->has('parent_id'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('parent_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- name --}}
                                        <label for="floatingInputValue">Name*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="name"
                                            value="{{ old('name') }}" placeholder="Name*">
                                        @if ($errors->has('name'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- is_custom_link --}}
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Is Custom Link</label>
                                        <select name="is_custom_link" id="is_custom_link" class="form-control">
                                            <option value="">Select</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                        @if ($errors->has('is_custom_link'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('is_custom_link') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- slug  --}}
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Url</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="slug"
                                            value="{{ old('slug') }}" placeholder="Url">
                                        @if ($errors->has('slug'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('slug') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            {{-- status --}}
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Status*</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="">Select</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('status') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="btn-1">
                                <button type="submit">Create Menu</button>
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
            $('#type').on('change', function() {
                if (this.value == 'footer') {
                    var html = '';
                    html += '<option value="">None (Parent Menu)</option>';
                    html += '{!! App\Helpers\Helper::getFooterMenuOptions() !!}';
                    $('#parent_id').html(html);
                } else {
                    var html = '';
                    html += '<option value="">None (Parent Menu)</option>';
                    html += '{!! App\Helpers\Helper::generateHeaderMenuOptions() !!}';

                    $('#parent_id').html(html);
                }
            });
        });
    </script>
@endpush
