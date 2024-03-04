@if (count($events) > 0)
@foreach ($events as $key => $event)
    <tr>
        <td> {{ ($events->currentPage()-1) * $events->perPage() + $loop->index + 1 }}</td>
        <td>{{ $event->title}}</td>
        <td>{{ $event->address}}</td>
        <td><a href="{{ $event->url}}" target="_blank">{{ $event->url}}</a></td>
        <td>
            {{ $event->start_date }}
        </td>
        <td>
            {{ $event->end_date }}
        </td>
        <td>
            <div class="edit-1 d-flex align-items-center justify-content-center">
                <a title="Edit Customer" href="{{ route('events.edit', $event->id) }}">
                    <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span>
                </a>
                <a title="Delete Customer" data-route="{{ route('events.delete', $event->id) }}"
                    href="javascript:void(0);" id="delete">
                    <span class="trash-icon"><i class="ph ph-trash"></i></span>
                </a>
            </div>
        </td>
    </tr>
@endforeach
<tr style="box-shadow: none;">
    <td colspan="7">
        <div class="d-flex justify-content-center">
            {!! $events->links() !!}
        </div>
    </td>
</tr>
@else
<tr>
    <td colspan="7" class="text-center">No Event Found</td>
</tr>
@endif

