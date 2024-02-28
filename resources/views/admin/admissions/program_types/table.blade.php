@if (count($programtypes) > 0)
@foreach ($programtypes as $key => $programtype)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $programtype->name }}</td>
        
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit" href="{{ route('programTypes.edit', $programtype->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete" data-route="{{ route('programTypes.delete', $programtype->id) }}"
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
            {!! $programtypes->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="8" class="text-center">No Program Types Found</td>
</tr>
@endif
