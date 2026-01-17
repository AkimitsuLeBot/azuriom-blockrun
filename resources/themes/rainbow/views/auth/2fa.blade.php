@extends('layouts.app')

@section('title', trans('auth.login'))

@section('content')
    @php($page_current = 'f2a')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="auth--2fa">
            @include('elements.session-alerts')
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @include('auth.2fa-widget')
                </div>
            </div>
        </div>
    @endif
@endsection
