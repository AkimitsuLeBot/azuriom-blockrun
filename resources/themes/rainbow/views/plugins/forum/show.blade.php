@extends('layouts.app')

@section('title', $forum->name)

@section('content')

    @php($page_current = 'forum_show')
    @include('components.backgrounds-builder',['page_current'=> $page_current])

    @if(!theme_config('forum.items.forum-show') && theme_config($page_current.'.row'))
        @include('components.components-builder',['page_current'=> $page_current])
    @else
        <div class="container content main-page" id="forum">
            @include('elements.session-alerts')

            @include('widget.banner.banner', ['banner' => 'forum', 'value' => 'forum-show', 'forum' => $forum])

            @include('forum::elements.nav')

            @if(! $forum->forums->isEmpty())
                <div class="card mb-4" @include('elements.string-aos', ['pageAos' => 'forum', 'itemAos'=>'forum-show'])>
                    <div class="list-group list-group-flush">
                        @foreach($forum->forums as $subForum)
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-xl-1 col-md-2 col-2 text-center">
                                        <i class="{{ $subForum->icon ?? 'bi bi-chat-fill' }} fs-4 forum-big-icon"></i>
                                    </div>

                                    <div class="col-xl-8 col-md-7 col-10 ps-md-0">
                                        <h3 class="h5">
                                            <a href="{{ route('forum.show', $subForum->slug) }}">{{ $subForum->name }}</a>
                                        </h3>

                                        {{ $subForum->description ?? ''}}
                                    </div>

                                    <div class="col-xl-3 col-md-3 d-none d-md-block">
                                        {{ trans_choice('forum::messages.forums.discussions', $subForum->discussions_count) }}
                                        <br>
                                        {{ trans_choice('forum::messages.discussions.posts', $subForum->posts_count) }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="card mb-3" @include('elements.string-aos', ['pageAos' => 'forum', 'itemAos'=>'forum-show'])>
                <div class="card-header">{{ trans('forum::messages.discussions.title') }}</div>
                <div class="list-group list-group-flush">
                    @foreach($forum->discussions as $discussion)
                        <div class="list-group-item">
                            <div class="row">
                                <div class="col-2 col-md-1 text-center d-flex align-items-center justify-content-center">
                                    <img src="{{ $discussion->author->getAvatar(45) }}" width="45" alt="{{ $discussion->author->name }}" class="img-fluid mx-auto rounded" style="max-width: 80px">
                                </div>

                                <div class="col-8 col-md-5 ps-md-0">
                                    <a href="{{ route('forum.discussions.show', $discussion) }}">
                                        @foreach($discussion->tags as $tag)
                                            <span class="badge"
                                                  style="{{ $tag->getBadgeStyle() }}">{{ $tag->name }}</span>
                                        @endforeach
                                        {{ $discussion->title }}
                                    </a>
                                    <br>
                                    <small>
                                        <a href="{{ route('forum.users.show', $discussion->author) }}">{{ $discussion->author->name }}</a>,
                                        {{ format_date($discussion->created_at, true) }}
                                    </small>
                                </div>

                                <div class="col-2">
                                    @if($discussion->is_pinned || $discussion->is_locked)
                                        <div class="float-md-right">
                                            @if($discussion->is_pinned)
                                                <i class="bi bi-pin-fill fs-4 text-primary"
                                                   title="{{ trans('forum::messages.discussions.pinned') }}"
                                                   data-bs-toggle="tooltip"></i>
                                            @endif

                                            @if($discussion->is_locked)
                                                <i class="bi bi-lock-fill fs-4 text-warning"
                                                   title="{{ trans('forum::messages.discussions.locked') }}"
                                                   data-bs-toggle="tooltip"></i>
                                            @endif
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-2 d-none d-md-block">
                                    {{ trans_choice('forum::messages.discussions.posts', $discussion->posts_count) }}
                                </div>

                                <div class="col-md-2 d-none d-md-block">
                                    @if(! $discussion->posts->isEmpty())
                                        <small>
                                            <a href="{{ route('forum.users.show', $discussion->posts->first()->author) }}">
                                                {{ $discussion->posts->first()->author->name }}
                                            </a>,
                                            {{ format_date($discussion->posts->first()->created_at) }}
                                        </small>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{ $forum->discussions->links() }}

            @if($forum->is_locked)
                <div class="alert alert-warning" role="alert">
                    <i class="bi bi-lock-fill"></i> {{ trans('forum::messages.forums.locked') }}
                </div>
            @endif

            @if(! $forum->is_locked || optional(auth()->user())->isAdmin())
                @can('create', \Azuriom\Plugin\Forum\Models\Discussion::class)
                    <a href="{{ route('forum.forum.discussions.create', $forum->slug) }}"
                       class="btn btn-primary" @include('elements.string-aos', ['pageAos' => 'forum', 'itemAos'=>'forum'])>
                        <i class="bi bi-plus-lg"></i>
                        {{ trans('messages.actions.create') }}
                    </a>
                @endcan
            @endif
        </div>
    @endif
@endsection
