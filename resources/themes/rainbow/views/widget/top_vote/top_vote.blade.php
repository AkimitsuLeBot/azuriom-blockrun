<article
    class="widget--top_vote mb-5" @include('elements.string-aos')>
    @include('widget.banner.banner-widget')

    @php
        $voters  = Azuriom\Plugin\Vote\Models\Vote::getTopVoters(now()->startOfMonth())->take(theme_config($getItem.'.quantity'));
    @endphp
    @if($voters->count() >= 1)

        @switch(theme_config($getItem.'.selectSkinInterface'))
            @case('list')
                @includeIf('widget.top_vote.list')
                @break
            @case('podium')
                @includeIf('widget.top_vote.podium')
                @break
        @endswitch

    @endif
</article>
