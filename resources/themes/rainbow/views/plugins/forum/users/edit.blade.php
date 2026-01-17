@extends('layouts.app')

@section('title', trans('forum::messages.profile.edit'))

@section('content')

    @php($page_current = 'forum_profileEdit')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('forum.items.forum-user-edit') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="forum">
            @include('elements.session-alerts')

            @include('forum::elements.nav')
            @include('plugins.forum.users.edit-widget')
        </div>
    @endif
@endsection
