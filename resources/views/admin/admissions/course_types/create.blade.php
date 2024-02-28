@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Create course type
@endsection
@push('styles')
@endpush
@section('head')
    Create course type
@endsection

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card search_bar sales-report-card">
                <form action="{{ route('courseTypes.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="sales-report-card-wrap">
                        <div class="form-head">
                            <h4>Course Types Add</h4>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        {{-- name --}}
                                        <label for="floatingInputValue">ProgramType*</label>
                                        <select name="program_type_id" id="program_type_id" class="form-control">
                                            <option value="">Select Programtype</option>
                                            @foreach ($programTypes as $programtype)
                                                <option value="{{ $programtype->id }}">{{ $programtype->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('program_type_id'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('program_type_id') }}</div>
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
                            
                        <div class="col-xl-12">
                            <div class="btn-1">
                                <button type="submit">Create CourseType</button>
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
