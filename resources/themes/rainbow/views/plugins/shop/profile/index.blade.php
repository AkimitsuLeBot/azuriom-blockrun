@extends('layouts.app')

@section('title', trans('shop::messages.profile.payments'))

@section('content')

    @php($page_current = 'shop_profile')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('shop.items.profile') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page">
            @include('elements.session-alerts')
            @include('plugins.shop.profile.index-widget')
        </div>
    @endif
@endsection
