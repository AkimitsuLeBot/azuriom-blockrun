<a href="{{ route('posts.show', $post) }}" title="{{ $post->title }}" aria-labelledby="{{ $post->title }}"
   class="post-preview card mb-3 shadow-lg">
    <div class="row g-0">
        @if($post->hasImage())
            <div class="col-md-4">
                <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}"
                     class="card-img rounded-0 rounded-start">
            </div>
        @endif
        <div class="{{ $post->hasImage() ?"col-md-8": "col-md-12" }}">
            <div class="card-body">
                <h3 class="card-title">{{ $post->title }}</h3>
                <p class="card-text">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                <p class="card-text"><small class="text-muted">{{ trans('messages.posts.posted', ['date' => format_date($post->published_at), 'user' => $post->author->name]) }}</small></p>
            </div>
        </div>
    </div>
</a>
