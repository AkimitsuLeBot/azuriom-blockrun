@extends('layouts.app')

@section('title', $category->name)


@push('footer-scripts')
    <script>
        document.querySelectorAll('[data-package-url]').forEach(function (el) {
            el.addEventListener('click', function (ev) {
                ev.preventDefault();

                axios.get(el.dataset['packageUrl']).then(function (response) {
                    const itemModal = document.getElementById('itemModal');
                    itemModal.innerHTML = response.data;
                    new bootstrap.Modal(itemModal).show();
                }).catch(function (error) {
                    createAlert('danger', error, true);
                });
            });
        });
    </script>
@endpush

@section('content')

    @php($page_current = 'shop_index')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('shop.items.shop') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> 'shop_index'])
    @else
        <div class="container content main-page" id="{{$page_current}}">
            @include('elements.session-alerts')
            <div class="row" id="shop">
                <div class="col-lg-9">
                    @include('plugins.shop.categories.show-widget')
                </div>
                <div class="col-lg-3">
                    @include('shop::categories.sidebar')
                </div>
            </div>
        </div>
    @endif
    <div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="itemModalLabel"
         aria-hidden="true"></div>
@endsection
