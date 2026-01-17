@extends('layouts.app')

@section('title', trans('forum::messages.posts.edit'))

@section('content')

    @php($page_current = 'forum_discussionsPostsEdit')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('forum.items.forum-posts-edit') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container" id="forum">
            @include('forum::elements.nav')
            @include('plugins.forum.posts.edit-widget')
        </div>
    @endif
@endsection
