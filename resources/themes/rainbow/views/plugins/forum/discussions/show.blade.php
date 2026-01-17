@extends('layouts.app')

@section('title', $discussion->title)

@push('meta')
    <meta property="og:article:author:username" content="{{ $discussion->author->name }}">
    <meta property="og:article:published_time" content="{{ $discussion->created_at->toIso8601String() }}">
    <meta property="og:article:modified_time" content="{{ $discussion->updated_at->toIso8601String() }}">
@endpush

@section('content')

    @php($page_current = 'forum_discussionsShow')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('forum.items.forum-discussions-show') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="forum">
            @include('elements.session-alerts')
            @include('forum::elements.nav')
            @include('plugins.forum.discussions.show-widget')
        </div>
    @endif
@endsection
