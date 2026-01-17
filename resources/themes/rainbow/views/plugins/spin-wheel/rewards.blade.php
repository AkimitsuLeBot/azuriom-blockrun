@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'spinWheel', 'value' => 'spin_rewards'])
@endif

<div class="table-responsive my-4"@include('elements.string-aos')>
    <ul class="table--custom">
        <li class="table-header">
            <div class="col px-3">{{ trans('spin-wheel::messages.tables.rewards.cols.reward') }}</div>
            @if(displayPercentage())
                <div class="col px-3">{{ trans('spin-wheel::messages.tables.rewards.cols.chances') }}</div>
            @endif
        </li>

        @if(count($rewards) == 0)
            <li class="table-row">
                <div class="col px-3" scope="row">{{ trans('spin-wheel::messages.tables.rewards.row.empty') }}</div>
            </li>
        @else
            @foreach($rewards as $reward)
                <li class="table-row">
                    <div class="col px-3" scope="row">{{ $reward->name }}</div>
                    @if(displayPercentage())
                        <div class="col px-3" scope="row">{{ $reward->chances }} %</div>
                    @endif
                </li>
            @endforeach
        @endif
    </ul>
</div>
