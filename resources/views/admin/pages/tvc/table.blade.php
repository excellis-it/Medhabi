@if (count($tvcs) > 0)
@foreach ($tvcs as $key => $tvc)
    <tr>
        <td> {{ ($tvcs->currentPage()-1) * $tvcs->perPage() + $loop->index + 1 }}</td>
        <td>{{ $tvc->title}}</td>
        <td><a href="{{ $tvc->url}}" target="_blank">{{ $tvc->url}}</a></td>
        <td><a href="{{ Storage::url($tvc->thumbnail) }}" target="_blank"><img src="{{ Storage::url($tvc->thumbnail) }}" alt="{{ $tvc->title }}"
            style="width: 30%; height: 100px;"></a></td>
        </td>
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit Customer" href="{{ route('tvc.edit', $tvc->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete Customer" data-route="{{ route('tvc.delete', $tvc->id) }}"
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
            {!! $tvcs->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="5" class="text-center">No TVC Found</td>
</tr>
@endif

