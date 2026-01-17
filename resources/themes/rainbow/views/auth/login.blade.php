@extends('layouts.app')

@section('title', trans('auth.login'))

@section('content')

    @php($page_current = 'login')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('login.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="auth--login">
            @include('elements.session-alerts')
            <div class="row justify-content-center flex-column align-items-center">
                <div class="col-lg-8 col-md-10">
                    @include('auth.login-widget')
                </div>
            </div>
        </div>
    @endif
@endsection
