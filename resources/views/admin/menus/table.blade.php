@php
    use App\Helpers\Helper;
@endphp
@if (count($menus) > 0)
@foreach ($menus as $key => $menu)
    <tr>
        <td>{{ ($menus->currentPage()-1) * $menus->perPage() + $loop->index + 1 }}</td>
        <td>{{ $menu->name }}</td>
        <td>
            @if ( $menu->parent_id == 0 )
                {{ 'Parent' }}
            @else
                {{-- show the sub menue nth --}}
               {!! Helper::getParent($menu->id) !!}

            @endif
        </td>
        <td>
            {{ $menu->slug ?? 'N/A' }}
        </td>
        <td>
            {{ ($menu->type == 'footer') ? 'Footer' : 'Header' }}
        </td>
        <td>
            {{ ($menu->status == 0) ? 'Inactive' : 'Active' }}
        </td>
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit Customer" href="{{ route('menus.edit', $menu->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                @if ($menu->is_delete == 0)
                <a title="Delete Customer" data-route="{{ route('menus.delete', $menu->id) }}"
                    href="javascript:void(0);" id="delete">
                    <span class="trash-icon"><i class="ph ph-trash"></i></span>
                </a>
                @endif
            </div>
        </td>
    </tr>
@endforeach
<tr style="box-shadow: none;">
    <td colspan="7">
        <div class="d-flex justify-content-center">
            {!! $menus->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="7" class="text-center">No menu Found</td>
</tr>
@endif
