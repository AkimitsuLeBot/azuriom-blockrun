@extends('layouts.app')

@section('title', $category->name ?? $title)

@section('content')


    @php($page_current = 'changelog')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config($page_current.'.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="changelog">
            @include('elements.session-alerts')
            @include('plugins.changelog.show-widget')
        </div>
    @endif
@endsection
