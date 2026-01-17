@extends('layouts.app')

@section('title', trans('auth.register'))

@section('content')

    @php($page_current = 'register')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('register.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="auth--register">
            @include('elements.session-alerts')
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    @include('auth.register-widget')
                </div>
            </div>
        </div>
    @endif
@endsection
