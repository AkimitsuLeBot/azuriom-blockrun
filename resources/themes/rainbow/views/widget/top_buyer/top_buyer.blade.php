<article class="widget--top_buyer mb-5" @include('elements.string-aos')>
    @include('widget.banner.banner-widget')

    @php
        $topBuyer  = \Azuriom\Plugin\Shop\Models\Payment::scopes(['completed'])->with('items')
        ->where('created_at', '>', now()->startOfMonth());
         if (use_site_money()){
            $topBuyer = $topBuyer->where('gateway_type', 'azuriom');
        }else{
            $topBuyer = $topBuyer->where('gateway_type', '!=', 'azuriom');
        }
        $topBuyer = $topBuyer
        ->selectRaw('user_id, SUM(price) as total_price')
        ->orderByDesc('total_price')->groupBy('user_id')
        ->limit(theme_config($getItem.'.quantity'))
        ->pluck('total_price', 'user_id');

    @endphp

    @if($topBuyer->count() >= 1)

        @switch(theme_config($getItem.'.selectSkinInterface'))
            @case('list')
                @includeIf('widget.top_buyer.list')
                @break
            @case('podium')
                @includeIf('widget.top_buyer.podium')
                @break
        @endswitch

    @endif

</article>
