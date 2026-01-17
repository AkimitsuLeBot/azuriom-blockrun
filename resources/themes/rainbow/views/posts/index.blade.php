@extends('layouts.app')

@section('title', trans('messages.posts.posts'))

@section('content')

    @php($page_current = 'articles_index')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('articles.items.allArticle') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="posts-all">
            @include('elements.session-alerts')

            @include('posts.index-widget')
        </div>
    @endif

@endsection
