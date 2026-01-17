@if(isset($getBanner))
    @include('widget.banner.banner-widget', ['size' => 'sm'])
@else
    @include('widget.banner.banner', ['banner' => 'forum', 'value' => 'user','size' => 'sm'])
@endif
<div class="card mb-3" @include('elements.string-aos', ['pageAos' => 'forum', 'itemAos'=>'user'])>
    <div class="card-body">
        @forelse($onlineUsers as $id => $user)
            @if($id !== 0)
                ,
            @endif
            <a href="{{ route('forum.users.show', $user) }}">
                {{ $user->name }}
            </a>
        @empty
            {{ trans('forum::messages.online.none') }}
        @endforelse
    </div>
</div>
