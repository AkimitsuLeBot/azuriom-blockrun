@extends('layouts.app')

@section('title', trans('support::messages.tickets.open'))

@section('content')

    @php($page_current = 'support_index')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('support.items.support-categories') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="support">
            @include('elements.session-alerts')
            @include('plugins.support.tickets.categories-widget')
        </div>
    @endif
@endsection
