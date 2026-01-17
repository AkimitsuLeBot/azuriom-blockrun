@extends('layouts.app')

@section('title', trans('shop::messages.title'))

@section('content')

    @php($page_current = 'shop_index')
    @include('components.backgrounds-builder',['page_current'=> $page_current])


    @if(!theme_config('shop.items.shop') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> 'shop_index'])
    @else
        <div class="container content main-page">
            @include('elements.session-alerts')
            <div class="row">
                <div class="col-lg-9">
                    @include('widget.banner.banner', ['banner' => 'shop', 'value' => 'shop'])
                    <div class="card">
                        <div class="card-body">
                            {{ $welcome }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    @include('plugins.shop.categories.sidebar')
                </div>
            </div>
        </div>
    @endif
@endsection
