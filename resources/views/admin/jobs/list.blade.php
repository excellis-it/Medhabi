@extends('admin.layouts.master')
@section('title')
    All Job Details - {{ env('APP_NAME') }}
@endsection
@push('styles')
    <style>
        .dataTables_filter {
            margin-bottom: 10px !important;
        }
    </style>
@endpush
@section('head')
    All Job Details
@endsection
@section('create_button')
  <a href="{{ route('career.jobs.create') }}" class="btn btn-primary">+ Create New Job</a>
@endsection
@section('content')
    <section id="loading">
        <div id="loading-content"></div>
    </section>
    <div class="main-content">
        <div class="inner_page">

            <div class="card table_sec stuff-list-table">
                <div class="row justify-content-end">
                    <div class="col-md-6">
                        <div class="row g-1 justify-content-end">
                            <div class="col-md-8 pr-0">
                                <div class="search-field prod-search">
                                    <input type="text" name="search" id="search" placeholder="search..." required
                                        class="form-control">
                                    <a href="javascript:void(0)" class="prod-search-icon"><i
                                            class="ph ph-magnifying-glass"></i></a>
                                </div>
                            </div>
                            {{-- <div class="col-md-3 pl-0 ml-2">
                                <button class="btn btn-primary button-search" id="search-button"> <span class=""><i
                                            class="ph ph-magnifying-glass"></i></span> Search</button>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="table-responsive" id="jobs-data">
                    <table class="table table-bordered" class="display">
                        <thead>
                            <tr>
                                <th class="sorting" data-tippy-content="Sort by Id" data-sorting_type="asc"
                                    data-column_name="id" style="cursor: pointer">Id<span id="id_icon"></span>
                                </th>
                                <th class="sorting" data-sorting_type="asc" data-column_name="title" style="cursor: pointer"
                                    data-tippy-content="Sort by Job title">
                                    Job Title<span id="title_icon"></span></th>
                                <th class="sorting" data-sorting_type="asc" data-column_name="eligibility"
                                    style="cursor: pointer" data-tippy-content="Sort by eligibility">
                                    Job Eligibity<span id="eligibility_icon"></span></th>
                                <th class="sorting" data-sorting_type="asc" data-column_name="opening_for"
                                    style="cursor: pointer" data-tippy-content="Sort by opening for">
                                    Job Opening For<span id="opening_for_icon"></span></th>
                                <th class="sorting" data-sorting_type="asc" data-column_name="location"
                                    style="cursor: pointer" data-tippy-content="Sort by location">
                                    Job Location<span id="location_icon"></span></th>
                                <th class="sorting" data-sorting_type="asc" data-column_name="description"
                                    style="cursor: pointer" data-tippy-content="Sort by Description">Job Description<span
                                        id="description_icon"></span></th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            @include('admin.jobs.table')

                        </tbody>
                    </table>
                    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="desc" />
                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).on('click', '#delete', function(e) {
            swal({
                    title: "Are you sure?",
                    text: "To delete this job.",
                    type: "warning",
                    confirmButtonText: "Yes",
                    showCancelButton: true
                })
                .then((result) => {
                    if (result.value) {
                        window.location = $(this).data('route');
                    } else if (result.dismiss === 'cancel') {
                        swal(
                            'Cancelled',
                            'Your stay here :)',
                            'error'
                        )
                    }
                })
        });
    </script>

    <script>
        $(document).ready(function() {

            function clear_icon() {
                $('#id_icon').html('');
                $('#title_icon').html('');
                $('#eligibility_icon').html('');
                $('#description_icon').html('');
                $('#location_icon').html('');
                $('#opening_for_icon').html('');
            }

            function fetch_data(page, sort_type, sort_by, query) {
                $.ajax({
                    url: "{{ route('career.jobs.fetch-data') }}",
                    data: {
                        page: page,
                        sortby: sort_by,
                        sorttype: sort_type,
                        query: query
                    },
                    success: function(data) {
                        $('tbody').html(data.data);
                    }
                });
            }

            $(document).on('keyup', '#search', function() {
                var query = $('#search').val();
                var column_name = $('#hidden_column_name').val();
                var sort_type = $('#hidden_sort_type').val();
                var page = $('#hidden_page').val();
                fetch_data(page, sort_type, column_name, query);
            });

            $(document).on('click', '.sorting', function() {
                var column_name = $(this).data('column_name');
                var order_type = $(this).data('sorting_type');
                var reverse_order = '';
                if (order_type == 'asc') {
                    $(this).data('sorting_type', 'desc');
                    reverse_order = 'desc';
                    clear_icon();
                    $('#' + column_name + '_icon').html(
                        '<span class="ph ph-caret-down"></span>');
                }
                if (order_type == 'desc') {
                    $(this).data('sorting_type', 'asc');
                    reverse_order = 'asc';
                    clear_icon();
                    $('#' + column_name + '_icon').html(
                        '<span class="ph ph-caret-up"></span>');
                }
                $('#hidden_column_name').val(column_name);
                $('#hidden_sort_type').val(reverse_order);
                var page = $('#hidden_page').val();
                var query = $('#search').val();
                fetch_data(page, reverse_order, column_name, query);
            });

            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                $('#hidden_page').val(page);
                var column_name = $('#hidden_column_name').val();
                var sort_type = $('#hidden_sort_type').val();

                var query = $('#search').val();

                $('li').removeClass('active');
                $(this).parent().addClass('active');
                fetch_data(page, sort_type, column_name, query);
            });

        });
    </script>
    <script>
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var job_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('career.jobs.change-status') }}',
                data: {
                    'status': status,
                    'job_id': job_id
                },
                success: function(resp) {
                    console.log(resp.success)
                }
            });
        });
    </script>
    {{-- trippy cdn link --}}
    <script src="https://unpkg.com/popper.js@1"></script>
    <script src="https://unpkg.com/tippy.js@5"></script>
    {{-- trippy --}}
    <script>
        tippy('[data-tippy-content]', {
            allowHTML: true,
            placement: 'bottom',
            theme: 'light-theme',
        });
    </script>
@endpush
