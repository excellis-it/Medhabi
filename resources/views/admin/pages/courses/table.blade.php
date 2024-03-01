@if (count($courses) > 0)
@foreach ($courses as $key => $course)
    <tr>
        <td>{{ ($courses->currentPage()-1) * $courses->perPage() + $loop->index + 1 }}</td>
        <td>{{ $course->name ?? 'N/A' }}</td>
        <td>{{ $course->slug ?? 'N/A' }}
        </td>
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit Customer" href="{{ route('courses.edit', $course->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete Customer" data-route="{{ route('courses.delete', $course->id) }}"
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
            {!! $courses->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="4" class="text-center">No Courses Found</td>
</tr>
@endif
