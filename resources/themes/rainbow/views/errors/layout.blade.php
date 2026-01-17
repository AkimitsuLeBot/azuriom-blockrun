@extends('layouts.app')

@section('content')


    @php($page_current = 'error')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="errors">
            @include('elements.session-alerts')
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @include('errors.layout-widget')
                </div>
            </div>
        </div>
    @endif
@endsection
