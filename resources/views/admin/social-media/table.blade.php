@if (count($social_media) > 0)
@foreach ($social_media as $key => $media)
    <tr>
        <td> {{ ($social_media->currentPage()-1) * $social_media->perPage() + $loop->index + 1 }}</td>
        <td>{{ $media->university_name}}</td>
        <td>{{ $media->user_name}}</td>
        <td><a href="{{ $media->link}}" target="_blank">{{ $media->link}}</a></td>
        <td>
            <i class="{{ $media->icon }}"></i>
        </td>
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit Customer" href="{{ route('social-media.edit', $media->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete Customer" data-route="{{ route('social-media.delete', $media->id) }}"
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
            {!! $social_media->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="6" class="text-center">No Social Media Found</td>
</tr>
@endif

