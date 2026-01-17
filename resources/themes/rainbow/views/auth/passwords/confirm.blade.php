@extends('layouts.app')

@section('title', trans('auth.passwords.confirm'))

@section('content')

    @php($page_current = 'passwordConfirm')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config($page_current.'.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="auth--password-confirm">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @include('auth.passwords.confirm-widget')
                </div>
            </div>
        </div>

    @endif
@endsection
