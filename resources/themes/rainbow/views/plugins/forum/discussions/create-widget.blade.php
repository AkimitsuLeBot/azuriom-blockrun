@if(isset($getBanner))
    @include('widget.banner.banner-widget')
@else
    @include('widget.banner.banner', ['banner' => 'forum', 'value' => 'forum-discussions-create'])
@endif

<div class="card">
    <div class="card-body">
        <form action="{{ route('forum.forum.discussions.store', $forum->slug) }}"
              method="POST" @include('elements.string-aos', ['pageAos' => 'forum', 'itemAos'=>'forum-discussions-create'])>

            <input type="hidden" name="pending_id" value="{{ $pendingId }}">

            @include('forum::discussions._form')

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> {{ trans('messages.actions.save') }}
            </button>
        </form>
    </div>
</div>
