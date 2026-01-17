@extends('layouts.app')

@section('title', trans('forum::messages.title'))

@section('content')

    @php($page_current = 'forum_index')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('forum.items.forum') && theme_config('forum_index.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="forum">
            @include('elements.session-alerts')
            @include('forum::elements.nav')
            @include('widget.banner.banner', ['banner' => 'forum', 'value' => 'forum'])

            <div class="row">
                <div class="col-md-9" @include('elements.string-aos', ['pageAos' => 'forum', 'itemAos'=>'forum'])>
                    @foreach($categories as $category)
                        <div class="card mb-3">
                            <div class="card-header">
                                <h2 class="h3">{{ $category->name }}</h2>
                                <small>{{ $category->description }}</small>
                            </div>

                            <div class="list-group list-group-flush">
                                @foreach($category->forums as $forum)
                                    @can('view', $forum)
                                        <div class="list-group-item">
                                            <div class="row">
                                                <div class="col-xl-1 col-md-2 col-2 text-center">
                                                    <i class="{{ $forum->icon ?? 'bi bi-chat-fill' }} fs-4 forum-big-icon"></i>
                                                </div>

                                                <div class="col-xl-8 col-md-7 col-10 ps-md-0">
                                                    <h3 class="h5">
                                                        <a href="{{ route('forum.show', $forum->slug) }}">{{ $forum->name }}</a>
                                                    </h3>

                                                    {{ $forum->description ?? '' }}
                                                </div>

                                                <div class="col-xl-3 col-md-3 d-none d-md-block">
                                                    {{ trans_choice('forum::messages.forums.discussions', $forum->discussions_count) }}
                                                    <br>
                                                    {{ trans_choice('forum::messages.discussions.posts', $forum->posts_count) }}
                                                </div>
                                            </div>
                                        </div>
                                    @endcan
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-md-3">
                    @auth
                        @include('plugins.forum.home-user')
                    @endauth
                    @include('plugins.forum.home-message')
                    @include('plugins.forum.home-stati')
                    @include('plugins.forum.home-user-online')
                </div>
            </div>
        </div>
    @endif
@endsection
