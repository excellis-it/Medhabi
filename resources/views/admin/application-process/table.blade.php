@if (count($applicationProcess) > 0)
@foreach ($applicationProcess as $key => $application)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $application->name }}</td>
        <td>{{ $application->description }}</td>
        <td>
            <img src="{{ asset('storage/' . $application->process_image) }}" alt="Process Image" width="100px"
                height="100px">
        </td>
        <td>{{ $application->process_desc }}</td>

        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit" href="{{ route('application-process.edit', $application->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete" data-route="{{ route('application-process.delete', $application->id) }}"
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
            {!! $applicationProcess->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="8" class="text-center">No Application Process Content Found</td>
</tr>
@endif
