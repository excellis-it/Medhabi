@if (count($blogs) > 0)
@foreach ($blogs as $key => $blog)
    <tr>
        <td> {{ ($blogs->currentPage()-1) * $blogs->perPage() + $loop->index + 1 }}</td>
        <td>{{ $blog->name }}</td>
        <td>{{ $blog->slug }}</td>
        <td>{{ Str::words($blog->short_description, $words = 20, $end = '...') }}
        </td>
        <td>
            <div class="button-switch">
                <input type="checkbox" id="switch-orange" class="switch toggle-class"
                    data-id="{{ $blog->id }}" {{ $blog->status ? 'checked' : '' }} />
                <label for="switch-orange" class="lbl-off"></label>
                <label for="switch-orange" class="lbl-on"></label>
            </div>
        </td>
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit Customer" href="{{ route('blogs.edit', $blog->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete Customer" data-route="{{ route('blogs.delete', $blog->id) }}"
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
            {!! $blogs->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="8" class="text-center">No Blog Found</td>
</tr>
@endif
