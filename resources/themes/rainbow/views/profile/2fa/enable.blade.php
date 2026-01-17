@extends('layouts.app')

@section('title', trans('messages.profile.2fa.title'))

@section('content')

    @php($page_current = 'accountF2a')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page profile-2fa" id="{{$page_current}}">
            @include('elements.session-alerts')
            @include('profile.2fa.enable-widget')
        </div>
    @endif
@endsection
