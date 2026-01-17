@extends('layouts.app')

@section('title', trans('auth.passwords.reset'))

@section('content')

    @php($page_current = 'passwordReset')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config($page_current.'.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="auth--password-reset">
            @include('elements.session-alerts')
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    @include('auth.passwords.reset-widget')
                </div>
            </div>
        </div>
    @endif
@endsection
