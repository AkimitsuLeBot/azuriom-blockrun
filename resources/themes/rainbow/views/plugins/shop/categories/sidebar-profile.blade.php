@auth
    @if(isset($getBanner))
        @include('widget.banner.banner-widget')
    @endif
    <div class="d-grid gap-2 mb-4" @include('elements.string-aos')>
        <img class="img-fluid mx-auto" src="{{auth()->user()->getAvatar(125)}}" width="125"
             alt="{{auth()->user()->name}}">
        @if(use_site_money())
            <p class="text-center mb-0 fw-bold">
                {{ trans('shop::messages.profile.money', ['balance' => format_money(auth()->user()->money)]) }}
            </p>

            <a href="{{ route('shop.offers.select') }}" class="btn btn-primary btn-block">
                {{ trans('shop::messages.cart.credit') }}
            </a>
        @endif

        <a href="{{ route('shop.cart.index') }}" class="btn btn-primary btn-block">
            <i class="bi bi-cart"></i> {{ trans('shop::messages.cart.title') }}
        </a>
    </div>
@endauth
