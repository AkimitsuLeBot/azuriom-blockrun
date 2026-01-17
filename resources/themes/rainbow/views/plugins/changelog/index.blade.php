@extends('layouts.app')

@section('title', trans('changelog::messages.title'))

@section('content')

    @php($page_current = 'changelog')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config($page_current.'.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="changelog">
            @include('elements.session-alerts')
            <div class="alert alert-warning"
                 role="alert" @include('elements.string-aos', ['pageAos' => 'changelog', 'itemAos'=>'changelog'])>
                {{ trans('changelog::messages.changelog-empty') }}
            </div>
        </div>
    @endif
@endsection
