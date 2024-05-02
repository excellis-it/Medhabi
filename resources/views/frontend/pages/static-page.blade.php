@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    {{ env('APP_NAME') }} - {{ $page['title'] ?? 'title'}}
@endsection
@push('styles')
@endpush

@section('content')
@if (isset($page['content']) && !empty($page['content']))
{!! html_entity_decode($page['content']) !!}
@else
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    No content found!
                </div>
            </div>
        </div>
    </div>
@endif
@endsection

@push('scripts')
@endpush
