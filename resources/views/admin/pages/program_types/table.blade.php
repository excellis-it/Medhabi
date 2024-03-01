@if (count($programtypescms) > 0)
@foreach ($programtypescms as $key => $programtypecms)
    <tr>
        <td>{{ ($programtypescms->currentPage()-1) * $programtypescms->perPage() + $loop->index + 1 }}</td>
        <td>{{ $programtypecms->name ?? 'N/A' }}</td>
        <td>{{ $programtypecms->slug ?? 'N/A' }}
        </td>
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit Customer" href="{{ route('program-types-cms.edit', $programtypecms->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete Customer" data-route="{{ route('program-types-cms.delete', $programtypecms->id) }}"
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
            {!! $programtypescms->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="4" class="text-center">No School Found</td>
</tr>
@endif
