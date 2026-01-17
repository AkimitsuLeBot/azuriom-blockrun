
@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'spinWheel', 'value' => 'spin_spin'])
@endif

@if(setting('spin.freeSpin') && $freeSpin !== 'false')
    @if($freeSpin == 'true')
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="mx-2">@lang('spin-wheel::messages.freeSpin.available')</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif( $freeSpin !== false)
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <span class="mx-2">{{ trans('spin-wheel::messages.freeSpin.notAvailable') }}</span> <strong>{{ $freeSpin }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endif

@if(Auth::user() && !Auth::user()->hasPermission('spin-wheel.user'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ trans('spin-wheel::admin.permission.denied') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="card mb-3" @include('elements.string-aos')>
    <div class="card-header">
        @auth
            <p class="fw-bold fs-5 mb-0">{{ trans('spin-wheel::admin.infos.sold') }} {{ Auth::user()->money }} {{ money_name() }}</p>
        @endauth
    </div>
    <div class="card-body">
        @if(count($rewards) == 0)
        <div class="d-flex">
            <span class="mx-auto">{{ trans('spin-wheel::messages.tables.rewards.row.empty') }}</span>
        </div>
        @else
            <div class="d-flex">
                <canvas id="canvas" class="mx-auto" width="434" height="500" ></canvas>
            </div>
            <div class="text-center">
                @auth
                    @if(Auth::user()->hasPermission('spin-wheel.user'))
                        <button id="spin" class='btn btn-primary' onClick="check();">{{ trans('spin-wheel::messages.wheel.spin') }}</button>
                    @endif
                @else
                    <a href="{{ route('login') }}" class='btn btn-primary'>{{ trans('spin-wheel::messages.wheel.guest') }}</a>
                @endauth
            </div>
        @endif
    </div>
</div>
