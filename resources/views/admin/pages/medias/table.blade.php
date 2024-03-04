@if (count($medias) > 0)
@foreach ($medias as $key => $media)
    <tr>
        <td> {{ ($medias->currentPage()-1) * $medias->perPage() + $loop->index + 1 }}</td>
        <td>{{ $media->media_channel_name}}</td>
        <td>{{ $media->news_title}}</td>
        <td><a href="{{ $media->media_channel_url}}" target="_blank">{{ $media->media_channel_url}}</a></td>

        <td><a href="{{ Storage::url($media->media_channel_thumbnail) }}" target="_blank"><img src="{{ Storage::url($media->media_channel_thumbnail) }}" alt="{{ $media->title }}"
            style="width: 30%; height: 100px;"></a></td>
        </td>
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit Customer" href="{{ route('media.edit', $media->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete Customer" data-route="{{ route('media.delete', $media->id) }}"
                    href="javascript:void(0);" id="delete">
                    <span class="trash-icon"><i class="ph ph-trash"></i></span>
                </a>
            </div>
        </td>
    </tr>
@endforeach
<tr style="box-shadow: none;">
    <td colspan="6">
        <div class="d-flex justify-content-center">
            {!! $medias->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="6" class="text-center">No Media and News Found</td>
</tr>
@endif

