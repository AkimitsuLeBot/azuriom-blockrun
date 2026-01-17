@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner',['banner' => 'shop', 'value' => 'buy'])
@endif

<div class="table-responsive" @include('elements.string-aos', ['pageAos' => 'shop', 'itemAos'=>'buy'])>
    <ul class="table--custom">
        <li class="table-header">
            <div class="col px-3 col-1">#</div>
            <div class="col px-3 col-1">{{ trans('shop::messages.fields.price') }}</div>
            <div class="col px-3 col-2">{{ trans('messages.fields.type') }}</div>
            <div class="col px-3 col-2">{{ trans('messages.fields.status') }}</div>
            <div class="col px-3 col-3">{{ trans('shop::messages.fields.payment_id') }}</div>
            <div class="col px-3 col-3">{{ trans('messages.fields.date') }}</div>
        </li>
        @foreach($payments as $payment)
            <li class="table-row">
                <div class="col px-3 col-1" scope="row">{{ $payment->id }}</div>
                <div class="col px-3 col-1">{{ $payment->formatPrice() }}</div>
                <div class="col px-3 col-2">{{ $payment->getTypeName() }}</div>
                <div class="col px-3 col-2">
                            <span class="badge bg-{{ $payment->statusColor() }}">
                                {{ trans('shop::admin.payments.status.'.$payment->status) }}
                            </span>
                </div>
                <div class="col px-3 col-3">{{ $payment->transaction_id ?? trans('messages.unknown') }}</div>
                <div class="col px-3 col-3">{{ format_date($payment->created_at)  }}</div>
            </li>
        @endforeach
    </ul>

    @if(! $subscriptions->isEmpty())
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ trans('shop::messages.profile.subscriptions') }}</h2>

                <div class="table-responsive">
                    <ul class="table--custom">
                        <li class="table-header">
                            <div class="col px-3 col-1">#</div>
                            <div class="col px-3 col-1">{{ trans('shop::messages.fields.price') }}</div>
                            @if(! use_site_money())
                                <div class="col px-3 col-1">{{ trans('messages.fields.type') }}</div>
                            @endif
                            <div class="col px-3 col-2">{{ trans('shop::messages.fields.package') }}</div>
                            <div class="col px-3 col-1">{{ trans('messages.fields.status') }}</div>
                            <div class="col px-3 col-2">{{ trans('shop::messages.fields.subscription_id') }}</div>
                            <div class="col px-3 col-{{use_site_money() ? '1': '2'}}">{{ trans('messages.fields.date') }}</div>
                            <div class="col px-3 col-1">{{ trans('shop::messages.fields.renewal_date') }}</div>
                            <div class="col px-3 col-2">{{ trans('messages.fields.action') }}</div>
                        </li>

                        @foreach($subscriptions as $subscription)
                            <li class="table-row">
                                <div class="col px-3 col-1">{{ $subscription->id }}</div>
                                <div class="col px-3 col-1">{{ $subscription->formatPrice() }}</div>
                                @if(! use_site_money())
                                    <div class="col px-3 col-1">{{ $subscription->getTypeName() }}</div>
                                @endif
                                <div class="col px-3 col-2">{{ $subscription->package?->name ?? trans('messages.unknown') }}</div>
                                <div class="col px-3 col-1">
                                    <span class="badge bg-{{ $subscription->statusColor() }}">
                                        {{ trans('shop::admin.subscriptions.status.'.$subscription->status) }}
                                    </span>
                                </div>
                                <div class="col px-3 col-2">{{ $subscription->subscription_id ?? trans('messages.unknown') }}</div>
                                <div class="col px-3 col-{{use_site_money() ? '1': '2'}}">{{ format_date($subscription->created_at) }}</div>
                                <div class="col px-3 col-1">{{ format_date($subscription->ends_at) }}</div>
                                <div class="col px-3 col-2">
                                    @if($subscription->isActive() && ! $subscription->isCanceled())
                                        <form action="{{ route('shop.subscriptions.destroy', $subscription) }}"
                                              method="POST">
                                            @method('DELETE')
                                            @csrf

                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="bi bi-x-circle"></i> {{ trans('messages.actions.cancel') }}
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    @if(use_site_money())
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ trans('shop::messages.giftcards.add') }}</h2>

                <form action="{{ route('shop.giftcards.add') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <input type="text" class="form-control @error('code') is-invalid @enderror"
                               placeholder="{{ trans('shop::messages.fields.code') }}" id="code" name="code"
                               value="{{ old('code', $giftCardCode) }}">

                        @error('code')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">
                        {{ trans('messages.actions.send') }}
                    </button>
                </form>
            </div>
        </div>
    @endif
</div>
