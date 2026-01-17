@extends('layouts.app')

@section('title', trans('shop::messages.offers.amount'))

@section('content')
    @php
        $page_current = 'shop_offersBuy';
        if(theme_config($page_current.'.row') !== null){
            $row = key(theme_config($page_current.'.row'));
            $id = key(theme_config($page_current.'.row.'.$row.'.widget'));
            $key = theme_config($page_current.'.row.'.$row.'.widget.'.$id);
        }
    @endphp
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('shop.items.select-payment') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="shops--select">
            @include('elements.session-alerts')
            @include('plugins.shop.offers.select-widget')
        </div>
    @endif
@endsection
@push('footer-scripts')
    <script>
        document.querySelectorAll('.payment-method').forEach(function (el) {
            el.addEventListener('click', function (ev) {
                ev.preventDefault();

                @if(isset($key[$page_current]['item']) && $key[$page_current]['item']['nameCgv'] && $key[$page_current]['item']['linkCgv'])
                let cgv = document.getElementById('customControlValidationCgv');
                cgv.classList.remove('is-invalid');
                if (cgv.checked) {
                    const form = document.getElementById('submitForm');
                    form.action = el.href;
                    form.submit();
                } else {
                    cgv.classList.add('is-invalid');
                }
                @else
                const form = document.getElementById('submitForm');
                form.action = el.href;
                form.submit();
                @endif

            });
        });
    </script>
@endpush

