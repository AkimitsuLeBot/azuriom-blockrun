@extends('layouts.app')

@section('title', trans('flyff::messages.guilds').' - '. $guild->m_szGuild )

@section('content')

    @php($page_current = 'flyff_guildsShow')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="{{$page_current}}">
            @include('elements.session-alerts')
            @include('plugins.flyff.guilds.show-widget')
        </div>
    @endif
@endsection
