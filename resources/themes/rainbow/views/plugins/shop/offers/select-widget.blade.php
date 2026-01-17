@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner', ['banner' => 'shop', 'value' => 'select-payment'])
@endif
<div class="row gy-3">
    @forelse($offers as $offer)
        <div class="col-md-3">
            <div class="card">
                <a href="{{ route('shop.offers.pay', [$offer->id, $gateway->type]) }}" class="payment-method">
                    <div class="card-body text-center">
                        @if($offer->hasImage())
                            <img src="{{ $offer->imageUrl() }}" alt="{{ $offer->name }}" class="img-fluid">
                        @endif
                        <h3>{{ $offer->name }}</h3>
                        <h4>{{ $offer->price }} {{ currency_display() }}</h4>
                    </div>
                </a>
            </div>
        </div>
    @empty
        <div class="col">
            <div class="alert alert-warning" role="alert">
                <i class="bi bi-exclamation-circle"></i> {{ trans('shop::messages.offers.empty') }}
            </div>
        </div>
    @endforelse
        @if(isset($getItem) && theme_config($getItem.'.nameCgv') && theme_config($getItem.'.linkCgv'))
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" name="quote-request-cgu" class="form-check-input"
                       id="customControlValidationCgv" required>
                <label class="form-check-label" for="customControlValidationCgv">
                    {{trans('theme::theme.acceptTerms')}}
                    <a class="fw-bold" href="{{theme_config($getItem.'.linkCgv')}}"
                       target="_blank">{{theme_config($getItem.'.nameCgv')}}</a>
                </label>
            </div>
        @endif
</div>

<form method="POST" id="submitForm">
    @csrf
</form>
