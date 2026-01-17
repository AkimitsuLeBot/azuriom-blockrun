@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'coinFlip', 'value' => 'coinFlip_pileorface'])
@endif
<div class="card mb-3" @include('elements.string-aos')>
    <div class="card-header">
        {{ trans('coin-flip::messages.sold') . Auth::user()->money ." ". money_name()}}
    </div>
    <div class="card-body">
        <div class="coin" id="coin">
            <div class="heads">
                <img src="{{ plugin_asset('coin-flip', 'img/heads.svg') }}">
            </div>
            <div class="tails">
                <img src="{{ plugin_asset('coin-flip', 'img/tails.svg') }}">
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary" id="flip-button">{{ trans('coin-flip::messages.play') }}</button>
        </div>
    </div>
</div>
