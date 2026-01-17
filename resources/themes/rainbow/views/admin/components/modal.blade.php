@php
    $collapseCompoents=[
        ['name' => trans('theme::lang.articles.title'),
        'id' => 'articles_index',
        'components' => [
            ['title' => trans('theme::widget.articles_index.title'), 'component'=>'articles_index'],
            ]
        ],

        ['name' => trans('theme::lang.articles.title'),
        'id' => 'article_show',
        'components' => [
            ['title' => trans('theme::widget.article_show.title'), 'component'=>'article_show'],
            ]
        ],

        ['name' => trans('theme::lang.pages.title'),
        'id' => 'pages',
        'components' => [
            ['title' =>  trans('theme::widget.pages.title'), 'component'=>'pages'],
            ]
        ],

        ['name' => trans('theme::lang.login.title'),
        'id' => 'login',
        'components' => [
            ['title' => trans('theme::widget.login.title'), 'component'=>'login'],
            ]
        ],

        ['name' => trans('theme::lang.menus.identification.f2a'),
        'id' => 'f2a',
        'components' => [
            ['title' => trans('theme::widget.login.title'), 'component'=>'f2a'],
            ]
        ],

        ['name' => trans('theme::lang.register.title'),
        'id' => 'register',
        'components' => [
            ['title' => trans('theme::widget.register.title'), 'component'=>'register'],
            ]
        ],

        ['name' => trans('theme::lang.passwordReset.title'),
        'id' => 'passwordReset',
        'components' => [
            ['title' => trans('theme::widget.passwordReset.title'), 'component'=>'passwordReset'],
            ]
        ],

        ['name' => trans('theme::lang.menus.identification.passwordEmail'),
        'id' => 'passwordEmail',
        'components' => [
            ['title' => trans('theme::widget.passwordEmail.title'), 'component'=>'passwordEmail'],
            ]
        ],

        ['name' => trans('theme::lang.menus.identification.passwordConfirm'),
        'id' => 'passwordConfirm',
        'components' => [
            ['title' => trans('theme::widget.passwordConfirm.title'), 'component'=>'passwordConfirm'],
            ]
        ],

        ['name' => trans('theme::lang.menus.identification.account'),
        'id' => 'account',
        'components' => [
            ['title' => trans('theme::widget.account.title'), 'component'=>'account'],
            ]
        ],

        ['name' => trans('theme::lang.menus.identification.accountF2a'),
        'id' => 'accountF2a',
        'components' => [
            ['title' => trans('theme::widget.accountF2a.title'), 'component'=>'accountF2a'],
            ]
        ],

        ['name' => trans('theme::lang.menus.identification.error'),
        'id' => 'error',
        'components' => [
            ['title' => trans('theme::widget.error.title'), 'component'=>'error'],
            ]
        ],

        ['name' => trans('theme::lang.menus.identification.maintenance'),
        'id' => 'maintenance',
        'components' => [
            ['title' => trans('theme::widget.maintenance.title'), 'component'=>'maintenance'],
            ]
        ],

        ['name' => trans('theme::lang.advancedBan.title'),
        'id' => 'advancedBan',
        'components' => [
            ['title' => trans('theme::widget.advancedBan.title'), 'component'=>'advancedBan'],
            ]
        ],

        ['name' => trans('theme::lang.changelog.title'),
        'id' => 'changelog',
        'components' => [
            ['title' => trans('theme::widget.changelog.title'), 'component'=>'changelog'],
            ]
        ],

        ['name' => trans('theme::lang.coinFlip.title'),
        'id' => 'coinFlip',
        'components' => [
            ['title' => trans('theme::widget.coinFlip_pileorface.title'), 'component'=>'coinFlip_pileorface'],
            ['title' => trans('theme::widget.coinFlip_infos.title'), 'component'=>'coinFlip_infos'],
            ['title' => trans('theme::widget.coinFlip_lastsPlayers.title'), 'component'=>'coinFlip_lastsPlayers'],
            ]
        ],

        ['name' => trans('theme::lang.cps.title'),
        'id' => 'cps',
        'components' => [
            ['title' => trans('theme::widget.cps.title'), 'component'=>'cps'],
            ]
        ],

        ['name' => trans('theme::lang.faq.title'),
        'id' => 'faq',
        'components' => [
            ['title' => trans('theme::widget.faq.title'), 'component'=>'faq'],
            ]
        ],

        ['name' => trans('theme::lang.menus.forum.index'),
        'id' => 'forum_index',
        'components' => [
            ['title' => trans('theme::widget.forum_index.title'), 'component'=>'forum_index'],
            ['title' => trans('theme::widget.forum_breadcrumb.title'), 'component'=>'forum_breadcrumb'],
            ['title' => trans('theme::widget.forum_message.title'), 'component'=>'forum_message'],
            ['title' => trans('theme::widget.forum_stati.title'), 'component'=>'forum_stati'],
            ['title' => trans('theme::widget.forum_user.title'), 'component'=>'forum_user'],
            ['title' => trans('theme::widget.forum_user_online.title'), 'component'=>'forum_user_online'],
            ]
        ],

        ['name' => trans('theme::widget.flyff_accounts.title'),
        'id' => 'flyff_accounts',
        'components' => [
            ['title' => trans('theme::widget.flyff_accounts.title'), 'component'=>'flyff_accounts'],
            ]
        ],

        ['name' => trans('theme::widget.flyff_resetPassword.title'),
        'id' => 'flyff_resetPassword',
        'components' => [
            ['title' => trans('theme::widget.flyff_resetPassword.title'), 'component'=>'flyff_resetPassword'],
            ]
        ],

        ['name' => trans('theme::widget.flyff_guilds.title'),
        'id' => 'flyff_guilds',
        'components' => [
            ['title' => trans('theme::widget.flyff_guilds.title'), 'component'=>'flyff_guilds'],
            ]
        ],

        ['name' => trans('theme::widget.flyff_guildsShow.title'),
        'id' => 'flyff_guildsShow',
        'components' => [
            ['title' => trans('theme::widget.flyff_guildsShow.title'), 'component'=>'flyff_guildsShow'],
            ]
        ],

        ['name' => trans('theme::widget.flyff_guildSiege.title'),
        'id' => 'flyff_guildSiege',
        'components' => [
            ['title' => trans('theme::widget.flyff_guildSiege.title'), 'component'=>'flyff_guildSiege'],
            ]
        ],

        ['name' => trans('theme::widget.flyff_guildSiegeShow.title'),
        'id' => 'flyff_guildSiegeShow',
        'components' => [
            ['title' => trans('theme::widget.flyff_guildSiegeShow.title'), 'component'=>'flyff_guildSiegeShow'],
            ]
        ],

        ['name' => trans('theme::widget.flyff_characters.title'),
        'id' => 'flyff_characters',
        'components' => [
            ['title' => trans('theme::widget.flyff_characters.title'), 'component'=>'flyff_characters'],
            ]
        ],

        ['name' => trans('theme::widget.flyff_characterShow.title'),
        'id' => 'flyff_characterShow',
        'components' => [
            ['title' => trans('theme::widget.flyff_characterShow.title'), 'component'=>'flyff_characterShow'],
            ]
        ],

        ['name' => trans('theme::lang.menus.forum.show'),
        'id' => 'forum_show',
        'components' => [
            ['title' => trans('theme::widget.forum_show.title'), 'component'=>'forum_show'],
            ['title' => trans('theme::widget.forum_breadcrumb.title'), 'component'=>'forum_breadcrumb'],
            ]
        ],

        ['name' => trans('theme::lang.menus.forum.profile_edit'),
        'id' => 'forum_profileEdit',
        'components' => [
            ['title' => trans('theme::widget.forum_profileEdit.title'), 'component'=>'forum_profileEdit'],
            ['title' => trans('theme::widget.forum_breadcrumb.title'), 'component'=>'forum_breadcrumb'],
            ]
        ],

        ['name' => trans('theme::lang.menus.forum.profile_show'),
        'id' => 'forum_profileShow',
        'components' => [
            ['title' => trans('theme::widget.forum_profileShow.title'), 'component'=>'forum_profileShow'],
            ['title' => trans('theme::widget.forum_breadcrumb.title'), 'component'=>'forum_breadcrumb'],
            ]
        ],

        ['name' => trans('theme::lang.menus.forum.discussions_posts_edit'),
        'id' => 'forum_discussionsPostsEdit',
        'components' => [
            ['title' => trans('theme::widget.forum_discussionsPostsEdit.title'), 'component'=>'forum_discussionsPostsEdit'],
            ['title' => trans('theme::widget.forum_breadcrumb.title'), 'component'=>'forum_breadcrumb'],
            ]
        ],

        ['name' => trans('theme::lang.menus.forum.discussions_posts_create'),
        'id' => 'forum_discussionsCreate',
        'components' => [
            ['title' => trans('theme::widget.forum_discussionsCreate.title'), 'component'=>'forum_discussionsCreate'],
            ['title' => trans('theme::widget.forum_breadcrumb.title'), 'component'=>'forum_breadcrumb'],
            ]
        ],

        ['name' => trans('theme::lang.menus.forum.discussions_edit'),
        'id' => 'forum_discussionsEdit',
        'components' => [
            ['title' => trans('theme::widget.forum_discussionsEdit.title'), 'component'=>'forum_discussionsEdit'],
            ['title' => trans('theme::widget.forum_breadcrumb.title'), 'component'=>'forum_breadcrumb'],
            ]
        ],

        ['name' => trans('theme::lang.menus.forum.discussions_show'),
        'id' => 'forum_discussionsShow',
        'components' => [
            ['title' => trans('theme::widget.forum_discussionsShow.title'), 'component'=>'forum_discussionsShow'],
            ['title' => trans('theme::widget.forum_breadcrumb.title'), 'component'=>'forum_breadcrumb'],
            ]
        ],

        ['name' => trans('theme::lang.gallery.title'),
        'id' => 'gallery',
        'components' => [
            ['title' => trans('theme::widget.gallery.title'), 'component'=>'gallery'],
            ]
        ],

        ['name' => trans('theme::lang.invoicepro.title'),
        'id' => 'invoicepro',
        'components' => [
            ['title' => trans('theme::widget.invoicepro.title'), 'component'=>'invoicepro'],
            ]
        ],

        ['name' => trans('theme::lang.menus.jirai.index'),
        'id' => 'jirai_index',
        'components' => [
            ['title' => trans('theme::widget.jirai_suggestions.title'), 'component'=>'jirai_suggestions'],
            ['title' => trans('theme::widget.jirai_bugs.title'), 'component'=>'jirai_bugs'],
            ['title' => trans('theme::widget.jirai_changelogs.title'), 'component'=>'jirai_changelogs'],
            ]
        ],

        ['name' => trans('theme::widget.jirai_changelogs_create.title'),
        'id' => 'jirai_changelogs_create',
        'components' => [
            ['title' => trans('theme::widget.jirai_changelogs_create.title'), 'component'=>'jirai_changelogs_create'],
            ]
        ],

        ['name' => trans('theme::widget.jirai_changelogs_edit.title'),
        'id' => 'jirai_changelogs_edit',
        'components' => [
            ['title' => trans('theme::widget.jirai_changelogs_edit.title'), 'component'=>'jirai_changelogs_edit'],
            ]
        ],

        ['name' => trans('theme::widget.jirai_changelogs_show.title'),
        'id' => 'jirai_changelogs_show',
        'components' => [
            ['title' => trans('theme::widget.jirai_changelogs_show.title'), 'component'=>'jirai_changelogs_show'],
            ]
        ],

        ['name' => trans('theme::widget.jirai_issues_create.title'),
        'id' => 'jirai_issues_create',
        'components' => [
            ['title' => trans('theme::widget.jirai_issues_create.title'), 'component'=>'jirai_issues_create'],
            ]
        ],

        ['name' => trans('theme::widget.jirai_issues_edit.title'),
        'id' => 'jirai_issues_edit',
        'components' => [
            ['title' => trans('theme::widget.jirai_issues_edit.title'), 'component'=>'jirai_issues_edit'],
            ]
        ],


        ['name' => trans('theme::widget.jirai_issues_show.title'),
        'id' => 'jirai_issues_show',
        'components' => [
            ['title' => trans('theme::widget.jirai_issues_show.title'), 'component'=>'jirai_issues_show'],
            ]
        ],

        ['name' => trans('theme::widget.jirai_messages_edit.title'),
        'id' => 'jirai_messages_edit',
        'components' => [
            ['title' => trans('theme::widget.jirai_messages_edit.title'), 'component'=>'jirai_messages_edit'],
            ]
        ],

        ['name' => trans('theme::lang.liteBans.title'),
        'id' => 'liteBans',
        'components' => [
            ['title' => trans('theme::widget.liteBans_navbar.title'), 'component'=>'liteBans_navbar'],
            ['title' => trans('theme::widget.liteBans.title'), 'component'=>'liteBans'],
            ]
        ],

        ['name' => trans('theme::lang.paysafecardmanual.title'),
        'id' => 'paysafecardmanual',
        'components' => [
            ['title' => trans('theme::widget.paysafecardmanual.title'), 'component'=>'paysafecardmanual'],
            ]
        ],

        ['name' => trans('theme::lang.menus.shop.index'),
        'id' => 'shop_index',
        'components' => [
            ['title' => trans('theme::widget.shop_shop.title'), 'component'=>'shop_shop'],
            ['title' => trans('theme::widget.shop_filter.title'), 'component'=>'shop_filter'],
            ['title' => trans('theme::widget.shop_shop_profile.title'), 'component'=>'shop_shop_profile'],
            ['title' => trans('theme::widget.shop_goal.title'), 'component'=>'shop_goal'],
            ['title' => trans('theme::widget.shop_recent.title'), 'component'=>'shop_recent'],
//            ['title' => trans('theme::widget.shop_top.title'), 'component'=>'shop_top'],
            ]
        ],

        ['name' => trans('theme::lang.spin_wheel.title'),
        'id' => 'spin_wheel',
        'components' => [
            ['title' => trans('theme::widget.spin_spin.title'), 'component'=>'spin_spin'],
            ['title' => trans('theme::widget.spin_rewards.title'), 'component'=>'spin_rewards'],
            ['title' => trans('theme::widget.spin_lastsPlayers.title'), 'component'=>'spin_lastsPlayers'],
            ]
        ],

        ['name' => trans('theme::lang.menus.shop.cart'),
        'id' => 'shop_cart',
        'components' => [
            ['title' => trans('theme::widget.shop_cart.title'), 'component'=>'shop_cart'],
            ]
        ],

        ['name' => trans('theme::lang.menus.shop.offre_select'),
        'id' => 'shop_offersSelect',
        'components' => [
            ['title' => trans('theme::widget.shop_offersSelect.title'), 'component'=>'shop_offersSelect'],
            ]
        ],

        ['name' => trans('theme::lang.menus.shop.offre_buy'),
        'id' => 'shop_offersBuy',
        'components' => [
            ['title' => trans('theme::widget.shop_offersBuy.title'), 'component'=>'shop_offersBuy'],
            ]
        ],

        ['name' => trans('theme::lang.menus.shop.payments'),
        'id' => 'shop_payments',
        'components' => [
            ['title' => trans('theme::widget.shop_payments.title'), 'component'=>'shop_payments'],
            ]
        ],

        ['name' => trans('theme::lang.menus.shop.my_achats'),
        'id' => 'shop_profile',
        'components' => [
            ['title' => trans('theme::widget.shop_profile.title'), 'component'=>'shop_profile'],
            ]
        ],

        ['name' => trans('theme::lang.staff.title'),
        'id' => 'staff',
        'components' => [
            ['title' => trans('theme::widget.staff.title'), 'component'=>'staff'],
            ]
        ],

        ['name' => trans('theme::lang.skinApi.title'),
        'id' => 'skinApi',
        'components' => [
            ['title' => trans('theme::widget.skinApi.title'), 'component'=>'skinApi'],
            ]
        ],

        ['name' => trans('theme::lang.menus.support.index'),
        'id' => 'support_index',
        'components' => [
            ['title' => trans('theme::widget.support_index.title'), 'component'=>'support_index'],
            ]
        ],

        ['name' => trans('theme::lang.menus.support.show'),
        'id' => 'support_show',
        'components' => [
            ['title' => trans('theme::widget.support_show.title'), 'component'=>'support_show'],
            ]
        ],

        ['name' => trans('theme::lang.menus.support.create'),
        'id' => 'support_create',
        'components' => [
            ['title' => trans('theme::widget.support_create.title'), 'component'=>'support_create'],
            ]
        ],

        ['name' => trans('theme::lang.tebex.title'),
        'id' => 'tebex',
        'components' => [
            ['title' => trans('theme::widget.tebex_package.title'), 'component'=>'tebex_package'],
            ['title' => trans('theme::widget.tebex_category.title'), 'component'=>'tebex_category'],
            ]
        ],

        ['name' => trans('theme::lang.vote.title'),
        'id' => 'vote',
        'components' => [
            ['title' => trans('theme::widget.vote.title'), 'component'=>'vote'],
            ['title' => trans('theme::widget.vote_podium.title'), 'component'=>'vote_podium'],
            ['title' => trans('theme::widget.vote_classement.title'), 'component'=>'vote_classement'],
            ['title' => trans('theme::widget.vote_recompenses.title'), 'component'=>'vote_recompenses'],
            ]
        ],

        ['name' => trans('theme::lang.menus.wiki.index'),
        'id' => 'wiki_index',
        'components' => [
            ['title' => trans('theme::widget.wiki_index.title'), 'component'=>'wiki_index'],
            ]
        ],

        ['name' => trans('theme::lang.menus.wiki.show'),
        'id' => 'wiki_show',
        'components' => [
            ['title' => trans('theme::widget.wiki_show.title'), 'component'=>'wiki_show'],
            ]
        ],

        ['name' => 'Widget',
        'id' => 'Widget',
        'class' => 'active_all',
        'components' => [
			[
			    'title' => trans('theme::lang.modal.utility'),
			    'widgets' => [
                        ['title' => trans('theme::widget.wysiwyg.title'), 'component'=>'wysiwyg'],
                        ['title' => trans('theme::widget.wysiwyg_image.title'), 'component'=>'wysiwyg_image'],
                        ['title' => trans('theme::widget.wysiwyg_video.title'), 'component'=>'wysiwyg_video'],
                        ['title' => trans('theme::widget.articles_home.title'), 'component'=>'articles_home'],
                        ['title' => trans('theme::widget.stats.title'), 'component'=>'stats'],
                        ['title' => trans('theme::widget.banner.title'),'component'=>'banner'],
                        ['title' => trans('theme::widget.login_home.title'), 'component'=>'login_home'],
                        ['title' => trans('theme::widget.server.title'),'component'=>'server'],
                        ['title' => trans('theme::widget.slogan.title'), 'component'=>'slogan'],
                    ]
            ],
			[
			    'title' => trans('theme::lang.modal.plugin'),
			    'widgets' => [
                        ['title' => trans('theme::widget.top_buyer.title'), 'is_enabled' => plugins()->isEnabled('shop'), 'plugin' => 'Shop','component'=>'top_buyer'],
                        ['title' => trans('theme::widget.shop_goal_show.title'), 'is_enabled' => plugins()->isEnabled('shop'), 'plugin' => 'Shop','component'=>'shop_goal_show'],
                        ['title' => trans('theme::widget.top_vote.title'), 'is_enabled' => plugins()->isEnabled('vote'),'plugin' => 'Vote','component'=>'top_vote'],
                        ['title' => trans('theme::widget.top_product.title'), 'is_enabled' => plugins()->isEnabled('shop'),'plugin' => 'Shop','component'=>'top_product'],
                        ['title' => trans('theme::widget.widget_staff.title'), 'is_enabled' => plugins()->isEnabled('staff') ,'plugin' => 'Staff','component'=>'widget_staff'],
                        ['title' => trans('theme::widget.widget_changelog.title'), 'is_enabled' => plugins()->isEnabled('changelog') ,'plugin' => 'Changelog','component'=>'widget_changelog'],
                        ['title' => trans('theme::widget.discord_auth.title'), 'is_enabled' => plugins()->isEnabled('discord-auth'), 'plugin' => 'Discord-auth', 'component'=>'discord_auth'],
                    ]
            ],
			[
			    'title' => trans('theme::lang.modal.social_networks'),
			    'widgets' => [
                        ['title' => trans('theme::widget.twitter.title'), 'component'=>'twitter'],
                        ['title' => trans('theme::widget.discord.title'), 'component'=>'discord'],
                        ['title' => trans('theme::widget.social_networks.title'),'component'=>'social_networks'],
                    ]
            ],
			[
			    'title' => trans('theme::lang.modal.other'),
			    'widgets' => [
                        ['title' => trans('theme::widget.images.title'), 'component'=>'images'],
                        ['title' => trans('theme::widget.button.title'), 'component'=>'button'],
                    ]
            ],

            ]
        ],
    ]
@endphp
    <!-- Modal Component -->
<div class="modal fade" id="modalComponent" tabindex="-1" role="dialog"
     aria-labelledby="modalComponent" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered  modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title font-weight-bold"
                    id="exampleModalLongTitle">{{trans('theme::lang.modal.block')}}</h2>
                <button type="button" class="close btn btn-outline-danger mx-2" data-bs-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="accordion" id="accordionComponents">
                    @foreach($collapseCompoents as $collapse)
                        <div class="card my-3">
                            <div class="card-header" id="heading{{$collapse['id']}}">
                                <button class="btn btn-block text-start font-weight-bold mb-0 p-0" type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{$collapse['id']}}" aria-expanded="true"
                                        aria-controls="collapse{{$collapse['id']}}">
                                    <h5 class="mb-0 font-weight-bold fs-3">{{$collapse['name']}}</h5>
                                </button>
                            </div>

                            <div id="collapse{{$collapse['id']}}"
                                 class="accordion-collapse collapse collapse_modal {{ $collapse['class'] ?? '' }}"
                                 aria-labelledby="collapse{{$collapse['id']}}" data-bs-parent="#accordionComponents">
                                <div class="card-body">
                                    <div class="row">
                                        @foreach($collapse['components'] as $coll)
                                            @if(isset($coll['component']))
                                                <div class="col-xl-4 col-md-6">
                                                    @if(isset($coll['is_enabled']) && !$coll['is_enabled'])
                                                        <span data-bs-toggle="tooltip" class="d-block fs-1"
                                                              title="{{trans('theme::lang.plugin.requires')}}: ({{$coll['plugin']}})">
                                                @endif
                                                <div
                                                    class="btn js-button-add-component border-0 position-relative p-0 mb-4"
                                                    @if(isset($coll['is_enabled']) && !$coll['is_enabled'] ) style="pointer-events: none"
                                                    @endif
                                                    data-component="{{$coll['component']}}">
                                                    <img class="w-100"
                                                         src="{{theme_asset('image/admin/'.$coll['component'].'.jpg')}}"
                                                         alt="{{$coll['title']}}">
                                                    <button type="button" role="button"
                                                            class="btn btn-success icon-button">+
                                                    </button>
                                                    <div class="overlay-title">{{$coll['title']}}</div>
                                                </div>

                                                @if(isset($coll['is_enabled']) && !$coll['is_enabled'])
                                                    </span>
                                                    @endif
                                                </div>
                                            @else
                                                <div id="accordion_Widgets">
                                                    <div class="card">
                                                        <button class="card-header" id="heading_{{$loop->index}}"
                                                                class="btn btn-block text-start font-weight-bold mb-0 p-0"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapse_{{$loop->index}}"
                                                                aria-expanded="true"
                                                                aria-controls="collapse_{{$loop->index}}">
                                                            <h5 class="mb-0 font-weight-bold fs-3 text-start">{{$coll['title']}}</h5>
                                                        </button>
                                                        <div id="collapse_{{$loop->index}}"
                                                             class="card-body collapse {{$loop->index === 0 ?'show':''}}"
                                                             aria-labelledby="heading_{{$loop->index}}"
                                                             data-bs-parent="#accordion_Widgets">
                                                            <div class="accordion-body">
                                                                <div class="row">
                                                                    @foreach($coll['widgets'] as $collwidget)
                                                                        <div class="col-md-4">
                                                                            @if(isset($collwidget['is_enabled']) && !$collwidget['is_enabled'])
                                                                                <span data-bs-toggle="tooltip"
                                                                                      class="d-block fs-1"
                                                                                      title="{{trans('theme::lang.plugin.requires')}}: ({{$collwidget['plugin']}})">
                                                                            @endif
                                                                            <div
                                                                                class="btn js-button-add-component border-0 position-relative p-0 mb-4"
                                                                                @if(isset($collwidget['is_enabled']) && !$collwidget['is_enabled'] ) style="pointer-events: none"
                                                                                @endif
                                                                                data-component="{{$collwidget['component']}}">
                                                                                <img class="w-100"
                                                                                     src="{{theme_asset('image/admin/'.$collwidget['component'].'.jpg')}}"
                                                                                     alt="{{$collwidget['title']}}">
                                                                                <button type="button" role="button"
                                                                                        class="btn btn-success icon-button">+
                                                                                </button>
                                                                                <div
                                                                                    class="overlay-title">{{$collwidget['title']}}</div>
                                                                            </div>

                                                                            @if(isset($collwidget['is_enabled']) && !$collwidget['is_enabled'])
                                                                                </span>
                                                                            @endif
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Background -->
<div class="modal fade" id="modalBackground" tabindex="-1" role="dialog"
     aria-labelledby="modalBackground" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered  modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLongTitle">{{trans('theme::lang.modal.background')}}</h2>
                <button type="button" class="close btn btn-outline-danger mx-2" data-bs-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="accordion" id="accordionBackgrounds">
                    @includeIf('admin.components.background.background-components')
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Section -->
<div class="modal fade" id="modalSection" tabindex="-1" role="dialog"
     aria-labelledby="modalComponent" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered  modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLongTitle">{{trans('theme::lang.modal.section')}}</h2>
                <button type="button" class="close btn btn-outline-danger mx-2" data-bs-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <h3 class="mt-2">Création d'une section</h3>
                        <hr>
                        {{--                        <small>Voici un tutoriel pour vous aidez: <a href="https://linedev.gitbook.io/rainbow/configuration/sections"></a></small>--}}
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4 position-relative">
                        <button type="button" class="btn js-button-add-section button-add-section position-relative"
                                data-section="simple">
                            <span class="demo-section-simple w-100">
                                <span class="demo-section-col"></span>
                                <span class="demo-section-button"></span>
                            </span>
                            <button type="button" role="button" class="btn btn-success icon-button">+</button>
                            <span class="overlay-title">Simple</span>
                        </button>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4 position-relative">
                        <button type="button" class="btn js-button-add-section button-add-section position-relative"
                                data-section="double">
                            <span class="demo-section-double row g-0">
                                <span class="col-6">
                                    <span class="demo-section-col"></span>
                                    <span class="demo-section-button"></span>
                                </span>
                                <span class="col-6">
                                    <span class="demo-section-col"></span>
                                    <span class="demo-section-button"></span>
                                </span>
                            </span>
                            <button type="button" role="button" class="btn btn-success icon-button">+</button>
                            <span class="overlay-title">Double</span>
                        </button>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4 position-relative">
                        <button type="button" class="btn js-button-add-section button-add-section position-relative"
                                data-section="double8x4">
                            <span class="demo-section-double row g-0">
                                <span class="col-8">
                                    <span class="demo-section-col"></span>
                                    <span class="demo-section-button"></span>
                                </span>
                                <span class="col-4">
                                    <span class="demo-section-col"></span>
                                    <span class="demo-section-button"></span>
                                </span>
                            </span>
                            <button type="button" role="button" class="btn btn-success icon-button">+</button>
                            <span class="overlay-title">Double 8x4</span>
                        </button>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4 position-relative">
                        <button type="button" class="btn js-button-add-section button-add-section position-relative"
                                data-section="double4x8">
                            <span class="demo-section-double row g-0">
                                <span class="col-4">
                                    <span class="demo-section-col"></span>
                                    <span class="demo-section-button"></span>
                                </span>
                                <span class="col-8">
                                    <span class="demo-section-col"></span>
                                    <span class="demo-section-button"></span>
                                </span>
                            </span>
                            <button type="button" role="button" class="btn btn-success icon-button">+</button>
                            <span class="overlay-title">Double 4x8</span>
                        </button>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4 position-relative">
                        <button type="button" class="btn js-button-add-section button-add-section position-relative"
                                data-section="simpleDouble">
                            <span class="demo-section-simple w-100">
                                <span class="demo-section-col"></span>
                                <span class="demo-section-button"></span>
                            </span>
                            <span class="demo-section-double row g-0">
                                <span class="col-6">
                                    <span class="demo-section-col"></span>
                                    <span class="demo-section-button"></span>
                                </span>
                                <span class="col-6">
                                    <span class="demo-section-col"></span>
                                    <span class="demo-section-button"></span>
                                </span>
                            </span>
                            <button type="button" role="button" class="btn btn-success icon-button">+</button>
                            <span class="overlay-title">Simple + Double</span>
                        </button>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4 position-relative">
                        <button type="button" class="btn js-button-add-section button-add-section position-relative"
                                data-section="doubleSimple">
                            <span class="demo-section-double row g-0">
                                <span class="col-6">
                                    <span class="demo-section-col"></span>
                                    <span class="demo-section-button"></span>
                                </span>
                                <span class="col-6">
                                    <span class="demo-section-col"></span>
                                    <span class="demo-section-button"></span>
                                </span>
                            </span>
                            <span class="demo-section-simple w-100">
                                <span class="demo-section-col"></span>
                                <span class="demo-section-button"></span>
                            </span>
                            <button type="button" role="button" class="btn btn-success icon-button">+</button>
                            <span class="overlay-title">Double + Simple</span>
                        </button>
                    </div>
                    <div class="col-12">
                        <h3 class="mt-2">Création dun séparateur</h3>
                        <hr>
                        {{--                        <small>Voici un tutoriel pour vous aidez: <a href=""></a></small>--}}
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4 position-relative">
                        <button type="button" class="btn js-button-add-section button-add-section position-relative"
                                data-section="separator">
                            <span class="demo-section-simple w-100">
                                <span class="demo-section-button"></span>
                            </span>
                            <button type="button" role="button" class="btn btn-success icon-button">+</button>
                            <span class="overlay-title">Separator</span>
                        </button>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4 position-relative">
                        <button type="button" class="btn js-button-add-section button-add-section position-relative"
                                data-section="separatorBg">
                            <span class="demo-section-simple w-100">
                                <span class="demo-section-button"></span>
                            </span>
                            <button type="button" role="button" class="btn btn-success icon-button">+</button>
                            <span class="overlay-title">Separator Image</span>
                        </button>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-4 position-relative">
                        <button type="button" class="btn js-button-add-section button-add-section position-relative"
                                data-section="separatorColor">
                            <span class="demo-section-simple w-100">
                                <span class="demo-section-button"></span>
                            </span>
                            <button type="button" role="button" class="btn btn-success icon-button">+</button>
                            <span class="overlay-title">Separator Color</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
