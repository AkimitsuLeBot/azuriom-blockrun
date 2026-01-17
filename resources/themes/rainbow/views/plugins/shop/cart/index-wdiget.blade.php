@include('widget.banner.banner-widget')

@if($cart->isEmpty())
    <div class="alert alert-warning" role="alert">
        <i class="bi bi-exclamation-circle"></i> {{ trans('shop::messages.cart.empty') }}
    </div>

    <a href="{{ route('shop.home') }}" class="btn btn-primary">
        <i class="bi bi-arrow-left"></i> {{ trans('shop::messages.cart.back') }}
    </a>
@endif
@if(! $cart->isEmpty())

    @if(plugins()->isEnabled('flyff'))
        <div class="row mb-4">
            @php
                $characters = flyff_user(auth()->user())->characters;
            @endphp
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('flyff.cart.update_character') }}" method="POST"
                              class="form-inline row align-items-end">
                            @csrf
                            <div class="col-9">
                                <label class="form-label" for="inlineFormCustomSelectPref">Choose
                                    character
                                    : </label>
                                <select name="character" class="form-control"
                                        id="inlineFormCustomSelectPref">
                                    @foreach ($characters as $character)
                                        <option @if((int)$character->m_idPlayer === session('m_idPlayer') ) selected
                                                @endif value="{{$character->m_idPlayer}}_{{$character->serverindex}}">{{$character->m_szName}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <button type="submit" class="btn btn-warning btn-sm">
                                    <i class="bi bi-check-lg"></i> {{ trans('messages.actions.update') }}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <form action="{{ route('shop.cart.update') }}"
          method="POST" @include('elements.string-aos', ['pageAos' => 'shop', 'itemAos'=>'cart'])>
        @csrf

        <div class="table-responsive">
            <ul class="table--custom cart-items">
                <li class="table-header">
                    <div class="col px-3 col-5">{{ trans('messages.fields.name') }}</div>
                    <div class="col px-3 col-2">{{ trans('shop::messages.fields.price') }}</div>
                    <div class="col px-3 col-2">{{ trans('shop::messages.fields.total') }}</div>
                    <div class="col px-3 col-1">{{ trans('shop::messages.fields.quantity') }}</div>
                    <div class="col px-3 col-2 text-center">{{ trans('messages.fields.action') }}</div>
                </li>
                @foreach($cart->content() as $cartItem)
                    <li class="table-row">
                        <div class="col px-3 col-5" scope="row">{{ $cartItem->name() }}</div>
                        <div class="col px-3 col-2">{{ shop_format_amount($cartItem->price()) }}</div>
                        <div class="col px-3 col-2">{{ shop_format_amount($cartItem->total()) }}</div>
                        <div class="col px-3 col-1">
                            <input type="number" min="0" max="{{ $cartItem->maxQuantity() }}" size="5"
                                   autocomplete="off"
                                   class="form-control form-control-sm d-inline-block"
                                   name="quantities[{{ $cartItem->itemId }}]" value="{{ $cartItem->quantity }}"
                                   aria-label="{{ trans('shop::messages.fields.quantity') }}" required
                                   @if(!$cartItem->hasQuantity()) readonly @endif>
                        </div>
                        <div class="col px-3 col-2 text-center">
                            <a href="{{ route('shop.cart.remove', $cartItem->id) }}"
                               class="text-danger px-0" title="{{ trans('messages.actions.delete') }}">
                                <i class="bi bi-trash-fill"></i>
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <p class="text-end mb-4">
            <button type="submit" class="btn btn-primary btn-sm">
                {{ trans('messages.actions.update') }}
            </button>
        </p>
    </form>

    <div class="row">
        <div class="col-md-4">
            <h5>{{ trans('shop::messages.coupons.add') }}</h5>

            <form action="{{ route('shop.cart.coupons.add') }}" method="POST">
                @csrf

                <div class="input-group mb-3 @error('code') has-validation @enderror">
                    <input type="text" class="form-control @error('code') is-invalid @enderror"
                           placeholder="{{ trans('shop::messages.fields.code') }}" id="code" name="code"
                           value="{{ old('code') }}">

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-plus-lg"></i> {{ trans('messages.actions.add') }}
                    </button>

                    @error('code')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </form>
        </div>

        @if(! $cart->coupons()->isEmpty())
            <div class="offset-md-2 col-md-6">
                <h5>{{ trans('shop::messages.coupons.title') }}</h5>

                <div class="table-responsive">
                    <ul class="table--custom coupons">
                        <li class="table-header">
                            <div class="col px-3 col-5">{{ trans('messages.fields.name') }}</div>
                            <div class="col px-3 col-5">{{ trans('shop::messages.fields.discount') }}</div>
                            <div class="col px-3 col-2">{{ trans('messages.fields.action') }}</div>
                        </li>
                        @foreach($cart->coupons() as $coupon)
                            <li class="table-row">
                                <div class="col px-3 col-5" scope="row">{{ $coupon->code }}</div>
                                <div class="col px-3 col-5">{{ $coupon->discount }}%</div>
                                <div class="col px-3 col-2">
                                    <form action="{{ route('shop.cart.coupons.remove', $coupon) }}" method="POST"
                                          class="d-inline-block">
                                        @csrf

                                        <button type="submit" class="text-danger bg-transparent border-0"
                                                title="{{ trans('messages.actions.delete') }}">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>

    <h5 class="text-end">
        {{ trans('shop::messages.cart.total', ['total' => shop_format_amount($cart->total())]) }}
    </h5>

    <div class="row">
        <div class="col-md-4">
            <h5>{{ trans('shop::messages.giftcards.add') }}</h5>

            <form action="{{ route('shop.cart.giftcards.add') }}" method="POST">
                @csrf

                <div class="input-group mb-3 @error('code') has-validation @enderror">
                    <input type="text" class="form-control @error('code') is-invalid @enderror"
                           placeholder="{{ trans('shop::messages.fields.code') }}" id="code" name="code"
                           value="{{ old('code') }}">

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-plus-lg"></i> {{ trans('messages.actions.add') }}
                    </button>

                    @error('code')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </form>
        </div>

        @if(! $cart->giftcards()->isEmpty())
            <div class="offset-md-2 col-md-6">
                <h5>{{ trans('shop::messages.giftcards.title') }}</h5>

                <div class="table-responsive">
                    <ul class="table--custom cart-items">
                        <li class="table-header">
                            <div class="col px-3 col-6">{{ trans('messages.fields.name') }}</div>
                            <div class="col px-3 col-3">{{ trans('shop::messages.fields.discount') }}</div>
                            <div class="col px-3 col-3">{{ trans('messages.fields.action') }}</div>
                        </li>
                        @foreach($cart->giftcards() as $giftcard)
                            <li class="table-row">
                                <div class="col px-3 col-6" role="cell">{{ $giftcard->code }}</div>
                                <div class="col px-3 col-3">{{ shop_format_amount($giftcard->balance) }}</div>
                                <div class="col px-3 col-3">
                                    <form action="{{ route('shop.cart.giftcards.remove', $giftcard) }}"
                                          method="POST" class="d-inline-block">
                                        @csrf

                                        <button type="submit" class="btn btn-sm btn-danger"
                                                title="{{ trans('messages.actions.delete') }}">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <h5 class="text-end">
                    {{ trans('shop::messages.cart.payable_total', ['total' => shop_format_amount($cart->payableTotal())]) }}
                </h5>
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('shop.home') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> {{ trans('shop::messages.cart.back') }}
            </a>

            <form method="POST" action="{{ route('shop.cart.clear') }}" class="d-inline-block ms-3">
                @csrf

                <button type="submit" class="btn btn-danger">
                    <i class="bi bi-trash"></i> {{ trans('shop::messages.cart.clear') }}
                </button>
            </form>
        </div>

        <div
            class="col-md-6 text-end" @include('elements.string-aos', ['pageAos' => 'shop', 'itemAos'=>'addCoupons'])>

            @if(!use_site_money() && theme_config($getItem.'.nameCgv') && theme_config($getItem.'.linnkCgv'))
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" name="quote-request-cgu" class="form-check-input"
                           id="customControlValidationCgv" required>
                    <label class="form-check-label" for="customControlValidationCgv">
                        {{trans('theme::theme.acceptTerms')}}
                        <a class="fw-bold"  href="{{theme_config($getItem.'.linnkCgv')}}"
                           target="_blank">{{theme_config($getItem.'.nameCgv')}}</a>
                    </label>
                </div>
            @endif

            @if(use_site_money())
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#confirmBuyModal">
                    {{ trans('shop::messages.buy') }}
                </button>
            @else
                <a href="{{ route('shop.payments.payment') }}" id="ctaLinkBuy" class="btn btn-primary">
                    <i class="bi bi-cart-check"></i> {{ trans('shop::messages.cart.checkout') }}
                </a>
            @endif
        </div>
    </div>
@endif


@if(use_site_money())
    <div class="modal fade" id="confirmBuyModal" tabindex="-1" role="dialog" aria-labelledby="confirmBuyLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="confirmBuyLabel">{{ trans('shop::messages.cart.confirm.title') }}</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    {{ trans('shop::messages.cart.confirm.price', ['price' => shop_format_amount($cart->total())]) }}
                </div>

                <div class="modal-footer">

                    <form method="POST" class="w-100" id="verifCgv" action="{{ route('shop.cart.payment') }}">
                        @csrf
                        @if(!use_site_money() && theme_config($getItem.'.nameCgv') && theme_config($getItem.'.linnkCgv'))
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" name="quote-request-cgu" class="form-check-input"
                                       id="customControlValidationCgv" required>
                                <label class="form-check-label" for="customControlValidationCgv">
                                    {{trans('theme::theme.acceptTerms')}}
                                    <a class="fw-bold" href="{{theme_config($getItem.'.linnkCgv')}}"
                                       target="_blank">{{theme_config($getItem.'.nameCgv')}}</a>
                                </label>
                            </div>
                        @endif
                        <button class="btn btn-primary" type="submit">
                            {{ trans('shop::messages.cart.pay') }}
                        </button>
                    </form>
                    <button class="btn btn-secondary" type="button"
                            data-bs-dismiss="modal">{{ trans('messages.actions.cancel') }}</button>
                </div>
            </div>
        </div>
    </div>
@endif
