@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'coinFlip', 'value' => 'coinFlip_infos'])
@endif
<div class="card mb-4" @include('elements.string-aos')>
    <div class="card-body">@lang('coin-flip::messages.infos.content')</div>
</div>
