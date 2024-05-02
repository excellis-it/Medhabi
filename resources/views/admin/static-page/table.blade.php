@if (count($static_pages) > 0)
@foreach ($static_pages as $key => $static_page)
    <tr>
        <td>{{ ($static_pages->currentPage()-1) * $static_pages->perPage() + $loop->index + 1 }}</td>
        <td>{{ $static_page->title ?? 'N/A' }}</td>
        <td>{{ $static_page->menu->name ?? 'N/A' }}</td>
        <td>{{ $static_page->menu->slug ?? 'N/A' }}</td>
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit Customer" href="{{ route('static-pages.edit', $static_page->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete Customer" data-route="{{ route('static-pages.delete', $static_page->id) }}"
                    href="javascript:void(0);" id="delete">
                    <span class="trash-icon"><i class="ph ph-trash"></i></span>
                </a>
            </div>
        </td>
    </tr>
@endforeach
<tr style="box-shadow: none;">
    <td colspan="3">
        <div class="d-flex justify-content-center">
            {!! $static_pages->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="3" class="text-center">No Page Found</td>
</tr>
@endif
