@if (count($galaries) > 0)
@foreach ($galaries as $key => $galary)
    <tr>
        <td>{{ ($galaries->currentPage()-1) * $galaries->perPage() + $loop->index + 1 }}</td>
        <td>{{ $galary->title ?? 'N/A' }}</td>
       
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit Galary" href="{{ route('galaries.edit', $galary->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete Galary" data-route="{{ route('galaries.delete', $galary->id) }}"
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
            {!! $galaries->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="4" class="text-center">No Galary Found</td>
</tr>
@endif
