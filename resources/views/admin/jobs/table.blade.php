@if (count($jobs) > 0)
@foreach ($jobs as $key => $job)
    <tr>
        <td> {{ ($jobs->currentPage()-1) * $jobs->perPage() + $loop->index + 1 }}</td>
        <td>{{ $job->title }}</td>
        <td>{{ $job->eligibility }}</td>
        <td>{{ $job->opening_for }}</td>
        <td>{{ $job->location }}</td>
        <td>{{ Str::words($job->description, $words = 20, $end = '...') }}
        </td>
        <td>
            <div class="button-switch">
                <input type="checkbox" id="switch-orange" class="switch toggle-class"
                    data-id="{{ $job->id }}" {{ $job->status ? 'checked' : '' }} />
                <label for="switch-orange" class="lbl-off"></label>
                <label for="switch-orange" class="lbl-on"></label>
            </div>
        </td>
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit Customer" href="{{ route('career.jobs.edit', $job->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete Customer" data-route="{{ route('career.jobs.delete', $job->id) }}"
                    href="javascript:void(0);" id="delete">
                    <span class="trash-icon"><i class="ph ph-trash"></i></span>
                </a>
            </div>
        </td>
    </tr>
@endforeach
<tr style="box-shadow: none;">
    <td colspan="8">
        <div class="d-flex justify-content-center">
            {!! $jobs->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="8" class="text-center">No Job Found</td>
</tr>
@endif
