@if(!theme_config($banner.'.banner.'.$value.'.hidden'))
    <div
        @include('elements.data-config-trigger',['key' => $banner,'value'=>$value]) class="banner {{theme_config($banner.'.banner.'.$value.'.size') === 'sm' ? 'banner-sm': (isset($size) && $size === "sm" ? 'banner-sm':'')}}" @include('elements.string-aos-banner',['bannerAos' => $banner, 'value' => $value])>
        @if(theme_config($banner.'.banner.'.$value.'.image'))
            <div class="banner-icon {{theme_config($banner.'.banner.'.$value.'.hidden-bg') ?'no-bg' :''}}">
                <img src="{{image_url(theme_config($banner.'.banner.'.$value.'.image'))}}"
                     alt="banner-icon">
            </div>
        @endif
        <div class="banner-title {{!theme_config($banner.'.banner.'.$value.'.image') ? 'no-image': ''}}">
            @if(!theme_config($banner.'.banner.'.$value.'.hidden'))

                @if($banner === "home" && $value === "login")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?: trans('auth.login') }}</h2>
                @endif

                @if($banner === "home" &&  $value === "article")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?: trans('messages.posts.posts')}}</h2>
                @endif

                @if($banner === "home" &&  $value === "discord")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?: 'Discord'}}</h2>
                @endif

                @if($banner === "login" &&  $value === "login")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?: trans('auth.login')}}</h2>
                @endif

                @if($banner === "f2a" &&  $value === "f2a")
                    <h2>{{ trans('auth.login') }}</h2>
                @endif

                @if($banner === "login_home" &&  $value === "login_home")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?: trans('auth.login')}}</h2>
                @endif

                @if($banner === "register" &&  $value === "register")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?: trans('auth.register')}}</h2>
                @endif

                @if($banner === "passwordReset" &&  $value === "passwordReset")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?: trans('auth.passwords.reset')}}</h2>
                @endif

                @if($banner === "passwordEmail" &&  $value === "passwordEmail")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?: trans('auth.passwords.reset')}}</h2>
                @endif

                @if($banner === "passwordConfirm" &&  $value === "passwordConfirm")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?: trans('auth.passwords.reset')}}</h2>
                @endif

                @if($banner === "account" &&  $value === "account")
                    <h1>{{ trans('messages.profile.title') }}</h1>
                @endif

                @if($banner === "account" &&  $value === "f2a")
                    <h1>{{ trans('messages.profile.2fa.title') }}</h1>
                @endif

                @if($banner === "faq" &&  $value === "faq")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?: trans('faq::messages.title') }}</h1>
                @endif

                @if($banner === "liteBans" &&  $value === "litebans")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('litebans::messages.title')}}</h1>
                @endif

                @if($banner === "vote" &&  $value === "vote")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('vote::messages.sections.vote')}}</h1>
                @endif

                @if($banner === "support" &&  $value === "support")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('support::messages.title')}}</h1>
                @endif

                @if($banner === "support" &&  $value === "support-create")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('support::messages.tickets.open')}}</h1>
                @endif

                @if($banner === "support" &&  $value === "support-show")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? $ticket->subject}}</h1>
                @endif

                @if($banner === "wiki" &&  $value === "wiki")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('wiki::messages.title')}}</h1>
                @endif

                @if($banner === "wiki" &&  $value === "wiki-show")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ? theme_config($banner.'.banner.'.$value.'.title').' '.$category: $category}}</h1>
                @endif

                @if($banner === "changelog" &&  $value === "changelog")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? $changelogTitle}}</h1>
                @endif

                @if($banner === "forum" &&  $value === "forum")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('forum::messages.title')}}</h1>
                @endif

                @if($banner === "forum" &&  $value === "message")
                    <h3><i class="bi bi-chat-fill fa-fw me-2"></i> {{trans('forum::messages.latest.title')}}</h3>
                @endif

                @if($banner === "forum" &&  $value === "stati")
                    <h3><i class="bi bi-bar-chart-fill fa-fw me-2"></i> {{trans('forum::messages.stats.title')}}</h3>
                @endif

                @if($banner === "forum" &&  $value === "user")
                    <h3><i class="bi bi-people-fill fa-fw me-2"></i>{{trans('forum::messages.online.title')}}</h3>
                @endif

                @if($banner === "forum" &&  $value === "forum-show")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? $forum->name}}</h1>
                @endif

                @if($banner === "forum" &&  $value === "forum-user-edit")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('forum::messages.discussions.edit')}}</h1>
                @endif

                @if($banner === "forum" &&  $value === "forum-posts-edit")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('forum::messages.posts.edit')}}</h1>
                @endif

                @if($banner === "forum" &&  $value === "forum-discussions-create")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('forum::messages.discussions.create')}}</h1>
                @endif

                @if($banner === "forum" &&  $value === "forum-discussions-edit")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('forum::messages.discussions.edit')}}</h1>
                @endif

                @if($banner === "forum" &&  $value === "forum-discussions-show")
                    <div class="d-flex flex-wrap justify-content-between align-items-center w-100">
                        <h1 class="mb-0">{{ $discussion->title }}</h1>
                        <span
                            class="fs-5 px-3">{{ trans_choice('forum::messages.discussions.views', $discussion->views) }}</span>
                    </div>
                @endif

                @if($banner === "shop" &&  $value === "shop")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('shop::messages.title')}}</h1>
                @endif

                @if($banner === "shop" &&  $value === "cart")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('shop::messages.cart.title')}}</h2>
                @endif

                @if($banner === "shop" &&  $value === "filter")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?? 'Filtre'}}</h2>
                @endif

                @if($banner === "shop" &&  $value === "goal")
                    <h2>{{trans('shop::messages.goal.title')}}</h2>
                @endif

                @if($banner === "shop" &&  $value === "recent")
                    <h2>{{trans('shop::messages.recent.title')}}</h2>
                @endif

                @if($banner === "shop" &&  $value === "top")
                    <h2>{{trans('shop::messages.top.title')}}</h2>
                @endif

                @if($banner === "shop" &&  $value === "profile")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?? 'Compte'}}</h2>
                @endif

                @if($banner === "shop" &&  $value === "coupons")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('shop::messages.coupons.title')}}</h2>
                @endif

                @if($banner === "shop" &&  $value === "addCoupons")
                    <h2>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('shop::messages.coupons.add')}}</h2>
                @endif

                @if($banner === "shop" &&  $value === "payment")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('shop::messages.payment.title')}}</h1>
                @endif

                @if($banner === "shop" &&  $value === "method-payment")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('shop::messages.offers.gateway')}}</h1>
                @endif

                @if($banner === "shop" &&  $value === "select-payment")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('shop::messages.offers.amount')}}</h1>
                @endif

                @if($banner === "shop" && $value === "buy")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') !== null ? trans('shop::messages.profile.payments')  : 'Mes achats'}}</h1>
                @endif

                @if($banner === "pages" && $value === "page")
                    <h1>{{$page->title}}</h1>
                @endif

                @if($banner === "articles" && $value === "article")
                    <h1>{{$post->title}}</h1>
                @endif

                @if($banner === "articles" && $value === "allArticle")
                    <div class="d-flex align-items-end">
                        <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('messages.posts.posts')}}</h1>
                        <small class="mx-3 text-sm">
                            {{trans('theme::theme.post.numberItems')}} {{count($posts)}}
                        </small>
                    </div>
                @endif

                @if($banner === "skinApi" && $value === "skin")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('skin-api::messages.change')}}</h1>
                @endif

                @if($banner === "staff" && $value === "staff")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('staff::messages.title')}}</h1>
                @endif

                @if($banner === "advancedBan" && $value === "advancedBan")
                    <div class="col">
                        <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('advancedban::messages.title')}}</h1>
                    </div>
                @endif

                @if($banner === "cps" && $value === "cps")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('cps::messages.title')}}</h1>
                @endif

                @if($banner === "paysafecardmanual" && $value === "paysafecardmanual")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? trans('paysafecardmanual::messages.title')}}</h1>
                @endif

                @if($banner === "jirai" && $value === "changelog")
                    <h2 class="d-flex flex-row justify-content-between w-100">
                        {{theme_config($banner.'.banner.'.$value.'.title') ?? trans('jirai::messages.changelog')}}
                        @auth
                            @can('jirai.changelog.post')
                                <a href="{{ route('jirai.changelogs.create') }}"
                                   class="btn btn-primary me-3">{{ trans('jirai::messages.new') }}</a>
                            @endcan
                        @endauth
                    </h2>
                @endif

                @if($banner === "jirai" && $value === "bugs")
                    <h2 class="d-flex flex-row justify-content-between w-100">
                        {{theme_config($banner.'.banner.'.$value.'.title') ?? trans('jirai::messages.bugs')}}
                        @auth
                            @can('jirai.issue.post')
                                <a href="{{ route('jirai.issues.create') }}?type=bugs"
                                   class="btn btn-primary me-3">{{ trans('jirai::messages.new') }}</a>
                            @endauth
                        @endcan
                    </h2>
                @endif

                @if($banner === "jirai" && $value === "suggestions")
                    <h2 class="d-flex flex-row justify-content-between w-100">
                        {{theme_config($banner.'.banner.'.$value.'.title') ?? trans('jirai::messages.suggestions')}}
                        @auth
                            @can('jirai.issue.post')
                                <a href="{{ route('jirai.issues.create') }}?type=suggestion"
                                   class="btn btn-primary me-3">{{ trans('jirai::messages.new') }}</a>
                            @endauth
                        @endcan
                    </h2>
                @endif

                @if($banner === "gallery" && $value === "gallery")
                    <h1>{{theme_config($banner.'.banner.'.$value.'.title') ?? $category->name}}</h1>
                @endif


                @if($banner === "spinWheel" &&  $value === "spin_spin")
                    <h1>{{ trans('spin-wheel::admin.plugin.name') }}</h1>
                @endif
                @if($banner === "spinWheel" &&  $value === "spin_rewards")
                    <h2>{{ trans('spin-wheel::messages.tables.rewards.title') }}</h2>
                @endif
                @if($banner === "spinWheel" &&  $value === "spin_lastsPlayers")
                    <h2>{{ trans('spin-wheel::messages.tables.players.title') }}</h2>
                @endif
                @if($banner === "account" &&  $value === "delete")
                    <h1>{{ trans('messages.profile.delete.title') }}</h1>
                @endif

                @if($banner === "coinFlip" &&  $value === "coinFlip_pileorface")
                    <h1>{{ trans('coin-flip::admin.plugin.name') }}</h1>
                @endif
                @if($banner === "coinFlip" &&  $value === "coinFlip_infos")
                    <h2>{{ trans('coin-flip::messages.infos.title') }}</h2>
                @endif
                @if($banner === "coinFlip" &&  $value === "coinFlip_lastsPlayers")
                    <h2>{{ trans('coin-flip::messages.fields.last-players') }}</h2>
                @endif

                @if($banner === "tebex" &&  $value === "tebex_package")
                        <h1>{{ setting("tebex.shop.title", trans("tebex::messages.shop") )}}</h1>
                @endif

                @if($banner === "tebex" &&  $value === "tebex_category")
                        <h2>{{ trans('theme::widget.tebex_category.title') }}</h2>
                @endif

                @if($banner === "maintenance" &&  $value === "maintenance")
                        <h2>{{ trans('messages.maintenance.title') }}</h2>
                @endif


            @endif
        </div>
    </div>
@endif
