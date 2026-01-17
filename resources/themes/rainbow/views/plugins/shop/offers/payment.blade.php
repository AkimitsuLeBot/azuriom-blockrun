@extends('layouts.app')

@section('title', trans('shop::messages.offers.gateway'))

@section('content')

    @php($page_current = 'shop_offersSelect')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('shop.items.method-payment') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="shops--select">
            @include('elements.session-alerts')
            @include('plugins.shop.offers.payment-widget')
        </div>
    @endif
@endsection
