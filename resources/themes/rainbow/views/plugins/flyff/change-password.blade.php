@extends('layouts.app')

@section('title', 'Flyff reset password')

@section('content')
    @php($page_current = 'flyff_resetPassword')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="{{$page_current}}">
            @include('elements.session-alerts')
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @include('plugins.flyff.change-password-widget')
                </div>
            </div>
        </div>
    @endif
@endsection
