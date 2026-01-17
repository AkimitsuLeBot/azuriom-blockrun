@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)

@section('content')

    @php($page_current = 'pages')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config($page_current.'.items') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="page">
            @include('elements.session-alerts')
            @include('pages.pages-widget')
        </div>

    @endif
@endsection
