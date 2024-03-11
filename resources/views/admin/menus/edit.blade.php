@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Update Menu
@endsection
@push('styles')
@endpush
@section('head')
    Update Menu
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('menus.update', $menu->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="sales-report-card-wrap">
                        <div class="form-head">
                            <h4>Menu Details</h4>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- name --}}
                                        <label for="floatingInputValue">Name*</label>
                                        <input type="text" class="form-control" id="floatingInputValue" name="name"
                                            value="{{ ($menu->name) ? $menu->name : old('name') }}" placeholder="Name*">
                                        @if ($errors->has('name'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('name') }}</div>
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
                                            <option value="">None (Parent Menu)</option>
                                            {!! App\Helpers\Helper::generateMenuOptions($parentId = 0, $prefix = '', $menu->parent_id) !!}
                                        </select>
                                        @if ($errors->has('parent_id'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('parent_id') }}</div>
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
                                            <option value="1" {{ ($menu->is_custom_link == 1) ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ ($menu->is_custom_link == 0) ? 'selected' : '' }}>No</option>
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
                                            value="{{ ($menu->slug) ? $menu->slug : old('slug') }}" placeholder="Url">
                                        @if ($errors->has('slug'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('slug') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- type --}}
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Type*</label>
                                        <select name="type" id="type" class="form-control">
                                            <option value="">Select</option>
                                            <option value="header" {{ ($menu->type == 'header') ? 'selected' : '' }}>Header</option>
                                            <option value="footer" {{ ($menu->type == 'footer') ? 'selected' : '' }}>Footer</option>
                                        </select>
                                        @if ($errors->has('type'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('type') }}</div>
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
                                            <option value="1" {{ ($menu->status == 1) ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ ($menu->status == 0) ? 'selected' : '' }}>Inactive</option>
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
                                <button type="submit">Update Menu</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@push('scripts')

@endpush
