@extends('layouts.app')

@section('title', 'Guild Siege')

@section('content')
    @php
        $page_current = 'flyff_guildSiege'
    @endphp
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="{{$page_current}}">
            @include('elements.session-alerts')
            @include('plugins.flyff.guild-siege.index-widget')
        </div>
    @endif
@endsection
