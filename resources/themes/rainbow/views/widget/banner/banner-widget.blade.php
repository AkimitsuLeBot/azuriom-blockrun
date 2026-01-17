@if(!theme_config($getBanner.'.hidden'))
    <div
        class="banner {{theme_config($getBanner.'.size') === 'sm' ? 'banner-sm': (isset($size) && !theme_config($getBanner.'.size') && $size  === "sm" ? 'banner-sm':'')}}" @include('elements.string-aos-banner')>
        @if(theme_config($getBanner.'.image'))
            <div class="banner-icon {{theme_config($getBanner.'.hidden-bg') ?'no-bg' :''}}">
                <img src="{{image_url(theme_config($getBanner.'.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div
            class="banner-title d-block pe-4 text-{{theme_config($getBanner.'.position') ?? 'start'}} {{!theme_config($getBanner.'.image') ? 'no-image': ''}}">
            @php
                $balise = theme_config($getBanner.'.balise') ?? 'h2';
                $title = theme_config($getBanner.'.title');
                $keyTitle = key(theme_config($page_current.'.row.'.$row.'.widget.'.$id)) ?? '';
            @endphp

            @if($keyTitle === "login")
                <{{$balise}}>{{$title ?: trans('auth.login') }}</{{$balise}}>
        @endif

        @if($keyTitle === "login_home")
                <{{$balise}}>{{$title ?: trans('auth.login') }}</{{$balise}}>
            @endif

            @if($keyTitle === "account")
                <{{$balise}}>{{$title ??  trans('messages.profile.title')}}</{{$balise}}>
            @endif

            @if($keyTitle === "f2a")
                <{{$balise}}>{{$title ?? trans('auth.login')}}</{{$balise}}>
            @endif

            @if($keyTitle === "accountF2a")
                <{{$balise}}>{{$title ??  trans('messages.profile.2fa.title')}}</{{$balise}}>
            @endif

            @if($keyTitle === "top_buyer")
                <{{$balise}}>{{$title ?: trans('theme::theme.widget.top_buyer.title') }}</{{$balise}}>
            @endif

            @if($keyTitle === "stats")
                <{{$balise}}>{{$title ?: trans('theme::widget.stats.title') }}</{{$balise}}>
            @endif

            @if($keyTitle === "top_product")
                <{{$balise}}>{{$title ?: trans('theme::theme.widget.top_product.title') }}</{{$balise}}>
            @endif

            @if($keyTitle === "top_vote")
                <{{$balise}}>{{$title ?: trans('theme::theme.widget.top_vote.title') }}</{{$balise}}>
            @endif

            @if($keyTitle === "widget_staff")
                <{{$balise}}>{{$title ?: trans('theme::theme.widget.widget_staff.title') }}</{{$balise}}>
            @endif

            @if($keyTitle === "widget_changelog")
                <{{$balise}}>{{$title ?: trans('changelog::messages.title') }}</{{$balise}}>
            @endif

            @if($keyTitle === "articles_home")
                <{{$balise}}>{{$title ?: trans('messages.posts.posts')}}</{{$balise}}>
            @endif

            @if($keyTitle === "banner")
                <{{$balise}}>{{$title ?: trans('theme::theme.widget.banner.title')}}</{{$balise}}>
            @endif

            @if($keyTitle === "server")
                <{{$balise}}>{{$title ?: trans('messages.servers') }}</{{$balise}}>
            @endif

            @if($keyTitle === "social_networks")
                <{{$balise}}>{{$title ?: trans('theme::theme.widget.social_networks.title') }}</{{$balise}}>
            @endif

            @if($keyTitle === "twitter")
                <{{$balise}}>{{$title ?: 'Twitter'}}</{{$balise}}>
            @endif

            @if($keyTitle === "discord")
                <{{$balise}}>{{$title ?: 'Discord'}}</{{$balise}}>
            @endif

            @if($keyTitle === "register")
                <{{$balise}}>{{$title ?: trans('auth.register')}}</{{$balise}}>
            @endif

            @if($keyTitle === "passwordReset" || $keyTitle === "passwordEmail" || $keyTitle === "passwordConfirm")
                <{{$balise}}>{{$title ?: trans('auth.passwords.reset')}}</{{$balise}}>
            @endif

            @if($keyTitle === "faq")
                <{{$balise}}>{{$title ?: trans('faq::messages.title') }}</{{$balise}}>
            @endif

            @if($keyTitle === "litebans")
                <{{$balise}}>{{$title ?? trans('litebans::messages.title')}}</{{$balise}}>
            @endif

            @if( $keyTitle === "vote")
                <{{$balise}}>{{$title ?? trans('vote::messages.sections.vote')}}</{{$balise}}>
            @endif

            @if($keyTitle === "vote_recompenses")
                <{{$balise}}>{{$title ?: trans('vote::messages.sections.rewards') }}</{{$balise}}>
            @endif

            @if($keyTitle === "vote_classement")
                <{{$balise}}>{{$title ?: trans('vote::messages.sections.top') }}</{{$balise}}>
            @endif

            @if($keyTitle === "support_index")
                <{{$balise}}>{{$title ?? trans('support::messages.title')}}</{{$balise}}>
            @endif

            @if($keyTitle === "support_create")
                <{{$balise}}>{{$title ?? trans('support::messages.tickets.open')}}</{{$balise}}>
            @endif

            @if($keyTitle === "support_show")
                <{{$balise}}>{{$title ?? $ticket->subject}}</{{$balise}}>
            @endif

            @if($keyTitle === "wiki_index")
                <{{$balise}}>{{$title ?? trans('wiki::messages.title')}}</{{$balise}}>
            @endif

            @if($keyTitle === "wiki_show")
                <{{$balise}}>{{$title ? $title.' '.$category: $category}}</{{$balise}}>
            @endif

            @if($keyTitle === "changelog")
                <{{$balise}}>{{$title ?? $changelogTitle}}</{{$balise}}>
            @endif

            @if($keyTitle === "forum_index")
                <{{$balise}}>{{$title ?? trans('forum::messages.title')}}</{{$balise}}>
            @endif

            @if($keyTitle === "forum_message")
                <{{$balise}}>{{$title ?? trans('forum::messages.latest.title')}}</{{$balise}}>
            @endif

            @if($keyTitle === "forum_stati")
                <{{$balise}}>{{$title ?? trans('forum::messages.stats.title')}}</{{$balise}}>
            @endif

            @if($keyTitle === "forum_user_online")
                <{{$balise}}>{{$title ?? trans('forum::messages.online.title')}}</{{$balise}}>
            @endif

            @if($keyTitle === "forum_show")
                <{{$balise}}>{{$title ?? $forum->name}}</{{$balise}}>
            @endif

            @if($keyTitle === "forum_profileEdit")
                <{{$balise}}>{{$title ?? trans('forum::messages.discussions.edit')}}</{{$balise}}>
            @endif

            @if($keyTitle === "forum_discussionsPostsEdit")
                <{{$balise}}>{{$title ?? trans('forum::messages.posts.edit')}}</{{$balise}}>
            @endif

            @if($keyTitle === "forum_discussionsCreate")
                <{{$balise}}>{{$title ?? trans('forum::messages.discussions.create')}}</{{$balise}}>
            @endif

            @if($keyTitle === "forum_discussionsEdit")
                <{{$balise}}>{{$title ?? trans('forum::messages.discussions.edit')}}</{{$balise}}>
            @endif

            @if($keyTitle === "forum_discussionsShow")
                <div class="d-flex flex-wrap justify-content-between align-items-center w-100">
                    <{{$balise}} class
                    ="mb-0">{{ $discussion->title }}</{{$balise}}>
                <span class="fs-5 px-3">{{ trans_choice('forum::messages.discussions.views', $discussion->views) }}</span>
                </div>
            @endif

            @if($keyTitle === "shop_shop")
                <{{$balise}}>{{$title ?? trans('shop::messages.title')}}</{{$balise}}>
            @endif

            @if($keyTitle === "shop_cart")
                <{{$balise}}>{{$title ?? trans('shop::messages.cart.title')}}</{{$balise}}>
            @endif

            @if($keyTitle === "shop_filter")
                <{{$balise}}>{{$title ?? 'Filtre'}}</{{$balise}}>
            @endif

            @if($keyTitle === "shop_goal")
                <{{$balise}}>{{$title ?? trans('shop::messages.goal.title') }}</{{$balise}}>
            @endif

            @if($keyTitle === "shop_goal_show")
                <{{$balise}}>{{$title ?? trans('shop::messages.goal.title') }}</{{$balise}}>
            @endif

            @if($keyTitle === "shop_recent")
                <{{$balise}}>{{$title ?? trans('shop::messages.recent.title') }}</{{$balise}}>
            @endif

            @if($keyTitle === "shop_top")
                <{{$balise}}>{{$title ?? trans('shop::messages.top.title') }}</{{$balise}}>
            @endif

            @if($keyTitle === "shop_shop_profile")
                <{{$balise}}>{{$title ?? 'Compte'}}</{{$balise}}>
            @endif

            @if($keyTitle === "shop_coupons")
                <{{$balise}}>{{$title ?? trans('shop::messages.coupons.title')}}</{{$balise}}>
            @endif

            @if($keyTitle === "shop_add_coupons")
                <{{$balise}}>{{$title ?? trans('shop::messages.coupons.add')}}</{{$balise}}>
            @endif

            @if($keyTitle === "shop_payments")
                <{{$balise}}>{{$title ?? trans('shop::messages.payment.title')}}</{{$balise}}>
            @endif

            @if($keyTitle === "shop_offersSelect")
                <{{$balise}}>{{$title ?? trans('shop::messages.offers.gateway')}}</{{$balise}}>
            @endif

            @if($keyTitle === "shop_offersBuy")
                <{{$balise}}>{{$title ?? trans('shop::messages.offers.amount')}}</{{$balise}}>
            @endif

            @if($keyTitle === "shop_profile")
                <{{$balise}}>{{$title ?? trans('shop::messages.profile.payments')}}</{{$balise}}>
            @endif

            @if($keyTitle === "pages")
                <{{$balise}}>{{$page->title}}</{{$balise}}>
            @endif

            @if($keyTitle === "article_show")
                <{{$balise}}>{{$post->title}}</{{$balise}}>
            @endif

            @if($keyTitle === "articles_index")
                <div class="d-flex align-items-end">
                    <{{$balise}}>{{$title ?? trans('messages.posts.posts')}}</{{$balise}}>
                    <small class="mx-3 text-sm">
                        {{trans('theme::theme.post.numberItems')}} {{count($posts)}}
                    </small>
                </div>
        @endif

        @if($keyTitle === "skinApi")
            <{{$balise}}>{{$title ?? trans('skin-api::messages.change')}}</{{$balise}}>
        @endif

        @if($keyTitle === "staff")
            <{{$balise}}>{{$title ?? trans('staff::messages.title')}}</{{$balise}}>
        @endif

        @if($keyTitle === "advancedBan")
            <div class="col">
                <{{$balise}}>{{$title ?? trans('advancedban::messages.title')}}</{{$balise}}>
            </div>
        @endif

        @if($keyTitle === "cps")
            <{{$balise}}>{{$title ?? trans('cps::messages.title')}}</{{$balise}}>
        @endif

        @if($keyTitle === "paysafecardmanual")
            <{{$balise}}>{{$title ?? trans('paysafecardmanual::messages.title')}}</{{$balise}}>
        @endif

        @if($keyTitle === "jirai_changelogs")
            <{{$balise}} class="d-flex flex-row justify-content-between w-100">
            {{$title ?? trans('jirai::messages.changelog')}}
            @auth
                @can('jirai.changelog.post')
                    <a href="{{ route('jirai.changelogs.create') }}"
                       class="btn btn-primary me-3">{{ trans('jirai::messages.new') }}</a>
                @endcan
            @endauth
            </{{$balise}}>
        @endif

        @if($keyTitle === "jirai_bugs")
            <{{$balise}} class="d-flex flex-row justify-content-between w-100">
            {{$title ?? trans('jirai::messages.bugs')}}
            @auth
                @can('jirai.issue.post')
                    <a href="{{ route('jirai.issues.create') }}?type=bugs"
                       class="btn btn-primary me-3">{{ trans('jirai::messages.new') }}</a>
                @endauth
            @endcan
            </{{$balise}}>
        @endif

        @if($keyTitle === "jirai_suggestions")
            <{{$balise}} class="d-flex flex-row justify-content-between w-100">
            {{$title ?? trans('jirai::messages.suggestions')}}
                @auth
                    @can('jirai.issue.post')
                        <a href="{{ route('jirai.issues.create') }}?type=suggestion"
                           class="btn btn-primary me-3">{{ trans('jirai::messages.new') }}</a>
                    @endauth
                @endcan
            </{{$balise}}>
        @endif

        @if($keyTitle === "spin_spin")
        <{{$balise}}>{{$title ?? trans('spin-wheel::admin.plugin.name')}}</{{$balise}}>
        @endif
        @if($keyTitle === "spin_rewards")
        <{{$balise}}>{{$title ?? trans('spin-wheel::messages.tables.rewards.title')}}</{{$balise}}>
        @endif
        @if($keyTitle === "spin_lastsPlayers")
        <{{$balise}}>{{$title ?? trans('spin-wheel::messages.tables.players.title')}}</{{$balise}}>
        @endif
        @if($keyTitle === "coinFlip_pileorface")
        <{{$balise}}>{{$title ?? trans('coin-flip::admin.plugin.name')}}</{{$balise}}>
        @endif
        @if($keyTitle === "coinFlip_infos")
        <{{$balise}}>{{$title ?? trans('coin-flip::messages.infos.title')}}</{{$balise}}>
        @endif
        @if($keyTitle === "coinFlip_lastsPlayers")
        <{{$balise}}>{{$title ?? trans('coin-flip::messages.fields.last-players')}}</{{$balise}}>
        @endif

        @if($keyTitle === "tebex_package")
        <{{$balise}}>{{$title ?? setting("tebex.shop.title", trans("tebex::messages.shop")) }}</{{$balise}}>
         @endif
        @if($keyTitle === "tebex_category")
        <{{$balise}}>{{$title ?? trans('theme::widget.tebex_category.title') }}</{{$balise}}>
         @endif
        @if($keyTitle === "maintenance")
        <{{$balise}}>{{$title ?? trans('messages.maintenance.title') }}</{{$balise}}>
         @endif
    </div>
</div>
@endif
