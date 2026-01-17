<a href="{{ route('posts.show', $post) }}" title="{{ $post->title }}" aria-labelledby="{{ $post->title }}"
   class="post-preview card mb-3 shadow-lg">
    @if($post->hasImage())
        <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}"
             class="card-img">
    @endif
    <div class="card-img-overlay text-center">
        <h3 class="card-title">{{ $post->title }}</h3>
        <p class="card-text">
            <small>{{ format_date($post->published_at) }}</small>
        </p>
    </div>
</a>
