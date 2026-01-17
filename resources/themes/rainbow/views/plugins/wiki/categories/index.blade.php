@extends('layouts.app')

@section('title', trans('wiki::messages.title'))

@section('content')

    @php($page_current = 'wiki_index')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('wiki.items.wiki') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="wiki">
            @include('elements.session-alerts')
            @include('plugins.wiki.categories.index-widget')
        </div>
    @endif
@endsection
