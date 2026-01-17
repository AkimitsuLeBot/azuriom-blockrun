<article class="widget--shop_goal_show mb-5" @include('elements.string-aos')>
    @include('widget.banner.banner-widget')

    @php
        if (! setting('shop.month_goal')) {
                return false;
            }

            $total = \Azuriom\Plugin\Shop\Models\Payment::scopes(['completed', 'withRealMoney'])
                ->where('created_at', '>', now()->startOfMonth())
                ->sum('price');

            $goal = round(($total / setting('shop.month_goal')) * 100, 2);
    @endphp
    @if(setting('shop.month_goal'))
        <div class="card mb-4" @include('elements.string-aos')>
            <div class="card-body">
                <div class="progress mb-1">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                         aria-valuenow="{{ $goal }}" aria-valuemin="0" aria-valuemax="100"
                         style="width: {{ min($goal, 100) }}%"></div>
                </div>

                <p class="card-text text-center">
                    {{ trans_choice('shop::messages.goal.progress', $goal) }}
                </p>
            </div>
        </div>
    @endif
</article>
