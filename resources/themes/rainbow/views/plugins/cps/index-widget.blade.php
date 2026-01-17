@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'cps', 'value' => 'cps'])
@endif

<div class="cps" @include('elements.string-aos', ['pageAos' => 'cpsP', 'itemAos'=>'cpsP'])>
            <p>{{ trans('cps::messages.description') }}</p>

            <div class="clicBox hide" id="clicBox" onclick="updateClick()">
                <p class="btn btn-primary py-2 px-4">{{ trans('cps::messages.click') }}</p>
            </div>

            <div class="clicBox " id="clicStart" onclick="start()">
                <p>{{ trans('cps::messages.clickToStart') }}</p>
            </div>

            <p id="clicNumber">{{ trans('cps::messages.numberOfClick') }} 0</p>
            <p id="timer">{{ trans('cps::messages.numberOfTime') }} 10</p>
            <p id="cpsP"></p>
</div>

