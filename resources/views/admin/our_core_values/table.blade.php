@if (count($our_core_values) > 0)
@foreach ($our_core_values as $key => $our_core_value)
    <tr>
        <td>{{ ($our_core_values->currentPage()-1) * $our_core_values->perPage() + $loop->index + 1 }}</td>
        <td>{{ $our_core_value->name }}</td>
        <td>{{ Str::words($our_core_value->description, $words = 20, $end = '...') }}
        </td>
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit Customer" href="{{ route('our-core-values.edit', $our_core_value->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete Customer" data-route="{{ route('our-core-values.delete', $our_core_value->id) }}"
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
            {!! $our_core_values->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="4" class="text-center">No Core Values Found</td>
</tr>
@endif
