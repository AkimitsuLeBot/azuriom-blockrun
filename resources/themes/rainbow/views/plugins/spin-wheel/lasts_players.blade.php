@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'spinWheel', 'value' => 'spin_lastsPlayers'])
@endif

<div class="table-responsive my-4"@include('elements.string-aos')>
    <ul class="table--custom">
        <li class="table-header">
            <div class="col px-3">#</div>
            <div class="col px-3">{{ trans('spin-wheel::messages.tables.players.cols.player') }}</div>
            <div class="col px-3">{{ trans('spin-wheel::messages.tables.players.cols.reward') }}</div>
        </li>

        @if(count($laps) == 0)
            <li class="table-row">
                <div class="col px-3" scope="row">{{ trans('spin-wheel::messages.tables.players.row.empty') }}</div>
            </li>
        @else
            @foreach($laps as $lap)
                <li class="table-row">
                    <div class="col px-3" scope="row">{{ $lap->id }}</div>
                    <div class="col px-3" scope="row">{{ $lap->name }}</div>
                    <div class="col px-3" scope="row">{{ $lap->reward_name }}</div>
                </li>
            @endforeach
        @endif
    </ul>
</div>
