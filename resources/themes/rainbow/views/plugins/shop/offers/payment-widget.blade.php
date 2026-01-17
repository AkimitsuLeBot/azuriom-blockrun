@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner', ['banner' => 'shop', 'value' => 'method-payment'])
@endif

<div class="row gy-3" @include('elements.string-aos', ['pageAos' => 'shop', 'itemAos'=>'payment'])>
    @forelse($gateways as $gateway)
        <div class="col-md-3">
            <div class="card">
                <a href="{{ route('shop.offers.buy', $gateway) }}" class="payment-method">
                    <div class="card-body text-center">
                        <img src="{{ $gateway->paymentMethod()->image() }}" style="max-height: 45px" class="img-fluid"
                             alt="{{ $gateway->name }}">
                    </div>
                </a>
            </div>
        </div>
    @empty
        <div class="col">
            <div class="alert alert-warning" role="alert">
                <i class="bi bi-exclamation-circle"></i> {{ trans('shop::messages.payment.empty') }}
            </div>
        </div>
    @endforelse
</div>
