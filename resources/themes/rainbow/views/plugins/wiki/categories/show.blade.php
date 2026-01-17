@extends('layouts.app')

@section('title', $category->name)

@section('content')

    @php($page_current = 'wiki_show')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('wiki.items.wiki-show') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="wiki">
            @include('elements.session-alerts')
            @include('plugins.wiki.categories.show-widget')
        </div>
    @endif
@endsection
