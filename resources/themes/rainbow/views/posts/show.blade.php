@extends('layouts.app')

@section('title', $post->title)
@section('description', $post->description)
@section('type', 'article')

@push('meta')
    <meta property="og:article:author:username" content="{{ $post->author->name }}">
    <meta property="og:article:published_time" content="{{ $post->published_at->toIso8601String() }}">
    <meta property="og:article:modified_time" content="{{ $post->updated_at->toIso8601String() }}">
@endpush

@section('content')

    @php($page_current = 'article_show')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('articles.items.article') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page post" id="post">
            @include('posts.show-widget')
        </div>
    @endif
@endsection
