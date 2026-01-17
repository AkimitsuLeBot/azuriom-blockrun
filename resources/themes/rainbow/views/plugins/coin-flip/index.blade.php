@extends('layouts.app')

@section('title', trans('coin-flip::admin.plugin.name'))

@section('content')

    @php($page_current = 'coinFlip')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('coinFlip.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container pb-5" id="{{$page_current}}">
            <div class="row">
                <div class="col-md-6">
                    @include('plugins.coin-flip.pileorface')
                </div>
                <div class="col-md-6">
                    @include('plugins.coin-flip.infos')
                    @include('plugins.coin-flip.lasts_players')
                </div>
            </div>
        </div>
    @endif

@endsection


@push('styles')
    <link rel="stylesheet" href="{{ plugin_asset('coin-flip', 'css/style.css') }}">
@endpush

@include('coin-flip::elements.scripts')
