@include('elements.session-alerts')
@if(!$post->isPublished())
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ trans('messages.posts.not-published') }}
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
@endif

@if(isset($getItem))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner', ['banner' => 'articles', 'value' => 'article', 'post' => $post])
@endif

<div class="card shadow-sm my-4" @include('elements.string-aos', ['pageAos' => 'articles', 'itemAos'=>'article'])>
    <div class="card-body">
        @if((isset($getItem) && !theme_config($getItem.'.img-hidden')))
            @if($post->hasImage())
                <img class="img-fluid rounded mx-auto mb-2" src="{{ $post->imageUrl() }}" alt="{{ $post->title }}">
           @endif
        @endif

        <div class="card-text user-htms-content">
            {!! $post->content !!}
        </div>

        <hr>

        <div class="d-flex justify-content-between align-items-center">
            @if((isset($getItem) && !theme_config($getItem.'.follow-hidden')))
                <button type="button" class="btn btn-primary ms-0 me-auto @if($post->isLiked()) active @endif"
                        @guest disabled
                        @endguest data-like-url="{{ route('posts.like', $post) }}">
                    @lang('messages.likes', ['count' => '<span class="likes-count">'.$post->likes->count().'</span>'])
                    <span class="d-none spinner-border spinner-border-sm load-spinner" role="status"></span>
                </button>
            @endif

            <span>{{ trans('messages.posts.posted', ['date' => format_date($post->published_at), 'user' => $post->author->name]) }}</span>
        </div>
    </div>
</div>
@if((isset($getItem) && !theme_config($getItem.'.comment-hidden')))
    <section id="comments">
        @foreach($post->comments as $comment)
            <div class="card mb-3">
                <div class="card-body d-flex">
                    <div class="flex-shrink-0">
                        <img class="me-3 rounded" src="{{ $comment->author->getAvatar() }}"
                             alt="{{ $comment->author->name }}" width="64">
                    </div>
                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="content-body">
                                {{ $comment->parseContent() }}

                                <p class="card-text text-muted">
                                    @lang('messages.comments.author', ['user' => e($comment->author->name), 'date' => format_date($comment->created_at, true)])
                                </p>
                            </div>

                            @can('delete', $comment)
                                <a class="btn btn-danger me-0"
                                   href="{{ route('posts.comments.destroy', [$post, $comment]) }}" data-confirm="delete"
                                   title="{{ trans('messages.actions.delete') }}">
                                    <i class="bi bi-trash"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    @can('create', \Azuriom\Models\Comment::class)
        <div class="card mt-4 shadow-sm">
            <div class="card-header">
                <span class="h5">{{ trans('messages.comments.create') }}</span>
            </div>
            <div class="card-body">
                <form action="{{ route('posts.comments.store', $post) }}" method="POST">
                    @csrf

                    <div class="mb-2">
                        <label class="form-label" for="content">{{ trans('messages.comments.content') }}</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="content"
                                  name="content" rows="4" required></textarea>

                        @error('content')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <button type="submit"
                            class="btn btn-primary"><i class="bi bi-chat"></i> {{ trans('messages.actions.comment') }}
                    </button>
                </form>
            </div>
        </div>
    @endcan

    @guest
        <div class="alert alert-info" role="alert">
            {{ trans('messages.comments.guest') }}
        </div>
    @endguest
@endif

<!-- Delete confirm modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="confirmDeleteLabel">{{ trans('messages.comments.delete') }}</h2>
                <button class="close" type="button" data-dismiss="modal"
                        aria-label="{{ trans('messages.actions.close') }}">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">{{ trans('messages.comments.delete_confirm') }}</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button"
                        data-dismiss="modal">{{ trans('messages.actions.cancel') }}</button>

                <form id="confirmDeleteForm" method="POST">
                    @method('DELETE')
                    @csrf

                    <button class="btn btn-danger" type="submit">{{ trans('messages.actions.delete') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
