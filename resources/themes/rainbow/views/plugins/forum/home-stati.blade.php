@if(isset($getBanner))
    @include('widget.banner.banner-widget', ['size' => 'sm'])
@else
    @include('widget.banner.banner', ['banner' => 'forum', 'value' => 'stati','size' => 'sm'])
@endif
<div class="card mb-3" @include('elements.string-aos', ['pageAos' => 'forum', 'itemAos'=>'stati'])>
    <div class="card-body">
        <ul class="list-unstyled mb-0">
            <li>{{ trans_choice('forum::messages.stats.discussions', $discussionsCount) }}</li>
            <li>{{ trans_choice('forum::messages.stats.posts', $postsCount) }}</li>
            <li>{{ trans_choice('forum::messages.stats.users', $usersCount) }}</li>
        </ul>
    </div>
</div>
