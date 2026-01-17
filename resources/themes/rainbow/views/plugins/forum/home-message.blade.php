@if(isset($getBanner))
    @include('widget.banner.banner-widget', ['size' => 'sm'])
@else
    @include('widget.banner.banner', ['banner' => 'forum', 'value' => 'message', 'size' => 'sm'])
@endif
<div class="card mb-3"@include('elements.string-aos', ['pageAos' => 'forum', 'itemAos'=>'message'])>
    <div class="list-group list-group-flush">
        @foreach($latestPosts as $post)
            <div class="list-group-item">
                <img src="{{$post->author->getAvatar(55)}}" width="55" class="float-start me-2" alt="">
                <div class="ps-2">
                    <a href="{{ route('forum.discussions.show', $post->discussion) }}">
                        {{ $post->discussion->title }}
                    </a>
                    <br>
                    <small>
                        <a href="{{ route('forum.users.show', $post->author) }}">{{ $post->author->name }}</a>,
                        {{ format_date($post->created_at) }}
                    </small>
                </div>
            </div>
        @endforeach
    </div>
</div>
