@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'coinFlip', 'value' => 'coinFlip_lastsPlayers'])
@endif
<div class="table-responsive my-4"@include('elements.string-aos')>
    <ul class="table--custom">
        <li class="table-header">
            <div class="col px-3">{{ trans('coin-flip::messages.fields.player') }}</div>
            <div class="col px-3">{{ trans('coin-flip::messages.fields.bet') }}</div>
            <div class="col px-3">{{ trans('coin-flip::messages.fields.result') }}</div>
        </li>
        @if(count($flips) == 0)
            <li class="table-row">
                <div class="col px-3" role="cell">{{ trans('coin-flip::messages.fields.empty') }}</div>
            </li>
        @else
            @foreach($flips as $flip)
                <li class="table-row">
                    <div class="col px-3" role="cell">{{ $flip->player->name }}</div>
                    <div class="col px-3" role="cell">{{ $flip->bet_amount . ' ' . money_name() }}</div>
                    <div class="col px-3" role="cell">
                        @if($flip->result)
                            {{ '+ ' . ($flip->bet_amount * $flip->coef) . ' ' . money_name() }}
                        @else
                            {{ '- ' . $flip->bet_amount . ' ' . money_name() }}
                        @endif
                    </div>
                </li>
            @endforeach
        @endif
    </ul>
</div>
