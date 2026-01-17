@extends('layouts.app')

@section('title', $user->name)

@section('content')

    @php($page_current = 'forum_profileShow')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(theme_config('forum_profileShow'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page"
             id="forum" @include('elements.string-aos', ['pageAos' => 'forum', 'itemAos'=>'forum'])>
            @include('elements.session-alerts')
            @include('plugins.forum.users.show-widget')
        </div>
    @endif
@endsection
