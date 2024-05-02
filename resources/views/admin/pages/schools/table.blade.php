@if (count($schools) > 0)
@foreach ($schools as $key => $school)
    <tr>
        <td>{{ ($schools->currentPage()-1) * $schools->perPage() + $loop->index + 1 }}</td>
        <td>{{ $school->name ?? 'N/A' }}</td>
        <td>{{ $school->slug ?? 'N/A' }}
        </td>
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Expert Speak School" href="{{ route('expert-speaks.index',['school_id' => $school->id]) }}">
                    <span class="speak-icon"><i class="ph ph-megaphone"></i></span>
                </a>

                <a title="Gallery School" href="{{ route('galaries.index',['school_id' => $school->id]) }}">
                    <span class="gallery-icon"><i class="ph ph-image-square"></i></span>
                </a>
                <a title="Edit School" href="{{ route('schools.edit', $school->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete School" data-route="{{ route('schools.delete', $school->id) }}"
                    href="javascript:void(0);" id="delete">
                    <span class="trash-icon"><i class="ph ph-trash"></i></span>
                </a>
            </div>
        </td>
    </tr>
@endforeach
<tr style="box-shadow: none;">
    <td colspan="4">
        <div class="d-flex justify-content-center">
            {!! $schools->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="4" class="text-center">No School Found</td>
</tr>
@endif
