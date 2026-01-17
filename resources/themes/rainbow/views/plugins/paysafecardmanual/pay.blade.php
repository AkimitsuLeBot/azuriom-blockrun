@extends('layouts.app')

@section('title', trans('paysafecardmanual::messages.title'))

@section('content')

    @php($page_current = 'paysafecardmanual')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('paysafecardmanual.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="shops">
            @include('elements.session-alerts')
            @include('plugins.paysafecardmanual.pay-widget')
        </div>
    @endif
@endsection
