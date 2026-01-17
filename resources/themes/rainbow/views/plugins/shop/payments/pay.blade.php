    ²@extends('layouts.app')

@section('title', trans('shop::messages.payment.title'))

@push('footer-scripts')
    <script>
        document.querySelectorAll('.payment-method').forEach(function (el) {
            el.addEventListener('click', function (ev) {
                ev.preventDefault();

                const form = document.getElementById('submitForm');
                form.action = el.href;
                form.submit();
            });
        });
    </script>
@endpush

@section('content')

    @php($page_current = 'shop_payments')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('shop.items.payment') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="shops">
            @include('elements.session-alerts')
            @include('plugins.shop.payments.pay-widget')
        </div>
    @endif
@endsection
