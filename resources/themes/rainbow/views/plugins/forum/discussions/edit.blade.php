@extends('layouts.app')

@section('title', trans('forum::messages.discussions.edit'))

@include('forum::elements.markdown-editor', [
    'imagesUploadUrl' => route('forum.posts.attachments.store', $firstPost),
])

@section('content')

    @php($page_current = 'forum_discussionsEdit')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('forum.items.forum-discussions-edit') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="forum">
            @include('elements.session-alerts')
            @include('forum::elements.nav')
            @include('plugins.forum.discussions.edit-widget')
        </div>
    @endif
@endsection
