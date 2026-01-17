@extends('layouts.app')

@section('title', trans('forum::messages.discussions.create'))

@include('forum::elements.markdown-editor', [
    'imagesUploadUrl' => route('forum.posts.attachments.pending', $pendingId),
])

@section('content')

    @php($page_current = 'forum_discussionsCreate')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('forum.items.forum-discussions-create') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="forum">
            @include('elements.session-alerts')
            @include('forum::elements.nav')
            @include('plugins.forum.discussions.create-widget')
        </div>
    @endif
@endsection
