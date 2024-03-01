@if (count($partnerships) > 0)
@foreach ($partnerships as $key => $partnership)
    <tr>
        <td> {{ ($partnerships->currentPage()-1) * $partnerships->perPage() + $loop->index + 1 }}</td>
        <td>{{ $partnership->name }}</td>
        <td><a href="{{ Storage::url($partnership->logo) }}" target="_blank"><img src="{{ Storage::url($partnership->logo) }}" alt="{{ $partnership->name }}"
            style="width: 30%; height: 100px;"></a></td>
        </td>
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit Customer" href="{{ route('our-partnerships.edit', $partnership->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete Customer" data-route="{{ route('our-partnerships.delete', $partnership->id) }}"
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
            {!! $partnerships->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="4" class="text-center">No Partner Found</td>
</tr>
@endif

