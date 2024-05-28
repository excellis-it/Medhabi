@if (count($newses) > 0)
@foreach ($newses as $key => $news)
    <tr>
        <td> {{ ($newses->currentPage()-1) * $newses->perPage() + $loop->index + 1 }}</td>
        <td>{{ $news->name }}</td>
        <td>{{ $news->slug }}</td>
        <td>{{ Str::words($news->short_description, $words = 20, $end = '...') }}
        </td>
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit Customer" href="{{ route('newses.edit', $news->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete Customer" data-route="{{ route('newses.delete', $news->id) }}"
                    href="javascript:void(0);" id="delete">
                    <span class="trash-icon"><i class="ph ph-trash"></i></span>
                </a>
            </div>
        </td>
    </tr>
@endforeach
<tr style="box-shadow: none;">
    <td colspan="5">
        <div class="d-flex justify-content-center">
            {!! $newses->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="5" class="text-center">No News Found</td>
</tr>
@endif
