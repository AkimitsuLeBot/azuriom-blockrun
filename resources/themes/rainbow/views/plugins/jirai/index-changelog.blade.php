@include('widget.banner.banner-widget')
<div
    class="card shadow-sm mb-4" @include('elements.string-aos', ['pageAos' => 'jirai', 'itemAos'=>'changelog'])>
    <div class="card-body">
        @foreach($changelogs as $changelog)
            <div class="card m-2 p-2 text-decoration-none d-flex flex-column">
                <a class="m-2" href="{{ route('jirai.changelogs.show', $changelog) }}">
                    <h3>{{ $changelog->description }}</h3>
                </a>
                <small style="color: grey">
                    #{{ $changelog->id }} @lang('messages.posts.posted', ['user' => e($changelog->user->name), 'date' => format_date($changelog->created_at, true)])
                </small>
            </div>
        @endforeach
        {{ $changelogs->withQueryString()->links() }}
    </div>
</div>

