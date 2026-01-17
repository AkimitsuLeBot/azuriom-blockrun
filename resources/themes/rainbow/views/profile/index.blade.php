@extends('layouts.app')

@section('title', trans('messages.profile.title'))

@section('content')

    @php($page_current = 'account')
    @include('components.backgrounds-builder',['page_current'=> $page_current])
    @if(theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="{{$page_current}}">
            @include('elements.session-alerts')
            @include('profile.index-widget')
        </div>
    @endif
@endsection

