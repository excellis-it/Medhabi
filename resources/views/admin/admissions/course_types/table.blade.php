@if (count($courseTypes) > 0)
@foreach ($courseTypes as $key => $courseType)
    <tr>
        <td> {{ ($courseTypes->currentPage()-1) * $courseTypes->perPage() + $loop->index + 1 }}</td>
        <td>{{ $courseType->programtype->name }}</td>
        <td>{{ $courseType->name }}</td>

        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit" href="{{ route('course-types.edit', $courseType->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete" data-route="{{ route('course-types.delete', $courseType->id) }}"
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
            {!! $courseTypes->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="8" class="text-center">No Course Types Found</td>
</tr>
@endif
