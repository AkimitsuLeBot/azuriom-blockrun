@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'support', 'value' => 'support'])
@endif


@if($infoText !== null)
    <div class="card mb-4">
        <div class="card-body pb-0">
            {{ $infoText }}
        </div>
    </div>
@endif


<div class="table-responsive" @include('elements.string-aos', ['pageAos' => 'support', 'itemAos'=>'support'])>
    <ul class="table--custom">
        <li class="table-header">
            <div class="col px-3 col-lg-1 col-1">#</div>
            <div class="col px-3 col-lg-5 col-5">{{ trans('support::messages.fields.subject') }}</div>
            <div class="col px-3 col-lg-2 col-4">{{ trans('messages.fields.category') }}</div>
            <div class="col px-3 col-lg-2 col-3">{{ trans('messages.fields.status') }}</div>
            <div class="col px-3 col-lg-2 col-4">{{ trans('messages.fields.date') }}</div>
        </li>
        @foreach($tickets as $ticket)
            <li class="table-row">
                <div class="col px-3 col-lg-1 col-1" scope="row">{{ $ticket->id }}</div>
                <div class="col px-3 col-lg-5 col-5">
                    <a href="{{ route('support.tickets.show', $ticket) }}">{{ $ticket->subject }}<i
                            class="bi bi-eye-fill"></i></a>
                </div>
                <div class="col px-3 col-lg-2 col-4">{{ Str::limit($ticket->category->name,50) }}</div>
                <div class="col px-3 col-lg-2 col-3">
                        <span class="badge bg-{{ $ticket->statusColor() }}">
                                {{ $ticket->statusMessage() }}
                        </span>
                </div>
                <div class="col px-3 col-lg-2 col-4">{{ format_date_compact($ticket->created_at) }}</div>
            </li>
        @endforeach
    </ul>
</div>

<a href="{{ route('support.tickets.create') }}" class="btn btn-success">
    <i class="bi bi-plus-lg"></i> {{ trans('support::messages.actions.create') }}
</a>
