@php
    $getBanner = $page_current.'.row.'.$row.'.widget.'.$id.'.'.$key.'.banner';
    $getItem = $page_current.'.row.'.$row.'.widget.'.$id.'.'.$key.'.item';
@endphp
@switch(key($w))
    @case('articles_home')
        @includeIf('widget.articles.articles')
        @break

    @case('discord')
        @includeIf('widget.discord.discord')
        @break

    @case('images')
        @includeIf('widget.media.images')
        @break

    @case('twitter')
        @includeIf('widget.twitter.twitter')
        @break

    @case('slogan')
        @includeIf('widget.slogan.slogan')
        @break

    @case('banner')
        @includeIf('widget.banner.widget-banner')
        @break

    @case('server')
        @includeIf('widget.server.server')
        @break

    @case('social_networks')
        @includeIf('widget.social_networks.social_networks')
        @break

    @case('shop_goal_show')
        @if(plugins()->isEnabled('shop'))
            @includeIf('widget.shop_goal.shop_goal_show')
        @endif
        @break

    @case('top_buyer')
        @if(plugins()->isEnabled('shop'))
            @includeIf('widget.top_buyer.top_buyer')
        @endif
        @break

    @case('top_product')
        @if(plugins()->isEnabled('shop'))
            @includeIf('widget.top_product.top_product')
        @endif
        @break

    @case('top_vote')
        @if(plugins()->isEnabled('vote'))
            @includeIf('widget.top_vote.top_vote')
        @endif
        @break

    @case('widget_staff')
        @if(plugins()->isEnabled('staff'))
            @includeIf('widget.staff.staff')
        @endif
        @break

    @case('stats')
        @includeIf('widget.stats.stats')
        @break

    @case('button')
        @includeIf('widget.button.button')
        @break

    @case('wysiwyg')
        @includeIf('widget.wysiwyg.wysiwyg')
        @break

    @case('wysiwyg_image')
        @includeIf('widget.wysiwyg.wysiwyg_image')
        @break

    @case('wysiwyg_video')
        @includeIf('widget.wysiwyg.wysiwyg_video')
        @break

    @case('error')
        @includeIf('errors.layout-widget')
        @break

    @case('maintenance')
        @includeIf('maintenance-widget')
        @break


    @case('account')
        @includeIf('profile.index-widget')
        @break

    @case('accountF2a')
        @if(isset($qrCode))
            @includeIf('profile.2fa.enable-widget')
        @else
            @includeIf('profile.2fa.index-widget')
        @endif
        @break

    @case('login_home')
        @guest
            @includeIf('widget.login.login_home')
        @endguest
        @break

    @case('login')
        @guest
            @includeIf('auth.login-widget')
        @endguest
        @break

    @case('f2a')
        @includeIf('auth.2fa-widget')
        @break

    @case('discord_auth')
        @guest
            @includeIf('widget.login.login-discord')
        @endguest
        @break

    @case('register')
        @includeIf('auth.register-widget')
        @break

    @case('passwordReset')
        @includeIf('auth.passwords.reset-widget')
        @break


    @case('passwordEmail')
        @includeIf('auth.passwords.email-widget')
        @break

    @case('passwordConfirm')
        @includeIf('auth.passwords.confirm-widget')
        @break

    @case('pages')
        @includeIf('pages.pages-widget')
        @break

    @case('article_show')
        @includeIf('posts.show-widget')
        @break

    @case('articles_index')
        @includeIf('posts.index-widget')
        @break

    @case('advancedBan')
        @includeIf('plugins.advancedban.index-widget')
        @break

    @case('changelog')
        @includeIf('plugins.changelog.show-widget')
        @break

    @case('widget_changelog')
        @if(plugins()->isEnabled('changelog'))
            @includeIf('widget.changelog.changelog')
        @endif
        @break

    @case('cps')
        @includeIf('plugins.cps.index-widget')
        @break

    @case('faq')
        @includeIf('plugins.faq.index-widget')
        @break

    @case('forum_index')
        @includeIf('plugins.forum.home-widget')
        @break

    @case('forum_show')
        @includeIf('plugins.forum.show-widget')
        @break

    @case('forum_profileEdit')
        @includeIf('plugins.forum.users.edit-widget')
        @break

    @case('forum_profileShow')
        @includeIf('plugins.forum.users.show-widget')
        @break

    @case('forum_discussionsPostsEdit')
        @includeIf('plugins.forum.posts.edit-widget')
        @break

    @case('forum_discussionsCreate')
        @includeIf('plugins.forum.discussions.create-widget')
        @break

    @case('forum_discussionsEdit')
        @includeIf('plugins.forum.discussions.edit-widget')
        @break

    @case('forum_discussionsShow')
        @includeIf('plugins.forum.discussions.show-widget')
        @break

    @case('forum_breadcrumb')
        @includeIf('plugins.forum.elements.nav')
        @break

    @case('forum_message')
        @includeIf('plugins.forum.home-message')
        @break

    @case('forum_stati')
        @includeIf('plugins.forum.home-stati')
        @break

    @case('forum_user')
        @includeIf('plugins.forum.home-user')
        @break

    @case('forum_user_online')
        @includeIf('plugins.forum.home-user-online')
        @break

    @case('flyff_accounts')
        @includeIf('plugins.flyff.index-widget')
        @break

    @case('flyff_resetPassword')
        @includeIf('plugins.flyff.change-password-widget')
        @break

    @case('flyff_guilds')
        @includeIf('plugins.flyff.guilds.index-widget')
        @break

    @case('flyff_guildsShow')
        @includeIf('plugins.flyff.guilds.show-widget')
        @break

    @case('flyff_guildSiege')
        @includeIf('plugins.flyff.guild-siege.index-widget')
        @break

    @case('flyff_guildSiegeShow')
        @includeIf('plugins.flyff.guild-siege.show-widget')
        @break

    @case('flyff_characters')
        @includeIf('plugins.flyff.characters.index-widget')
        @break

    @case('flyff_characterShow')
        @includeIf('plugins.flyff.characters.show-widget')
        @break

    @case('gallery')
        @includeIf('plugins.gallery.index-widget')
        @break

    @case('invoicepro')
        @includeIf('plugins.invoicepro.index-widget')
        @break

    @case('jirai_bugs')
        @includeIf('plugins.jirai.index-bugs')
        @break

    @case('jirai_changelogs')
        @includeIf('plugins.jirai.index-changelog')
        @break

    @case('jirai_suggestions')
        @includeIf('plugins.jirai.index-suggestions')
        @break

    @case('jirai_issues_create')
        @includeIf('plugins.jirai.issue.create-widget')
        @break

    @case('jirai_changelogs_create')
        @includeIf('plugins.jirai.changelog.create-widget')
        @break

    @case('jirai_changelogs_edit')
        @includeIf('plugins.jirai.changelog.edit-widget')
        @break

    @case('jirai_changelogs_show')
        @includeIf('plugins.jirai.changelog.show-widget')
        @break

    @case('jirai_issues_edit')
        @includeIf('plugins.jirai.issue.edit-widget')
        @break

    @case('jirai_issues_show')
        @includeIf('plugins.jirai.issue.show-widget')
        @break

    @case('jirai_messages_edit')
        @includeIf('plugins.jirai.message.edit-widget')
        @break

    @case('paysafecardmanual')
        @includeIf('plugins.paysafecardmanual.pay-widget')
        @break

    @case('skinApi')
        @includeIf('plugins.skin-api.index-widget')
        @break

    @case('liteBans')
        @includeIf('plugins.litebans.index-widget')
        @break

    @case('liteBans_navbar')
        @includeIf('plugins.litebans.elements.navbar-widget')
        @break

    @case('shop_shop')
        @includeIf('plugins.shop.categories.show-widget')
        @break

    @case('shop_filter')
        @includeIf('plugins.shop.categories.sidebar-filter')
        @break

    @case('shop_goal')
        @includeIf('plugins.shop.categories.sidebar-goal')
        @break

    @case('shop_shop_profile')
        @includeIf('plugins.shop.categories.sidebar-profile')
        @break

    @case('shop_recent')
        @includeIf('plugins.shop.categories.sidebar-recent')
        @break

    @case('shop_top')
        @includeIf('plugins.shop.categories.sidebar-top')
        @break

    @case('shop_cart')
        @includeIf('plugins.shop.cart.index-wdiget')
        @break

    @case('shop_offersSelect')
        @includeIf('plugins.shop.offers.payment-widget')
        @break

    @case('shop_offersBuy')
        @includeIf('plugins.shop.offers.select-widget')
        @break

    @case('shop_payments')
        @includeIf('plugins.shop.payments.pay-widget')
        @break

    @case('shop_profile')
        @includeIf('plugins.shop.profile.index-widget')
        @break

    @case('support_index')
        @includeIf('plugins.support.tickets.index-widget')
        @break

    @case('support_show')
        @includeIf('plugins.support.tickets.show-widget')
        @break

    @case('support_create')
        @includeIf('plugins.support.tickets.create-widget')
        @break

    @case('vote')
        @includeIf('plugins.vote.vote')
        @break

    @case('vote_podium')
        @includeIf('plugins.vote.podium')
        @break

    @case('vote_classement')
        @includeIf('plugins.vote.classement')
        @break

    @case('vote_recompenses')
        @includeIf('plugins.vote.recompenses')
        @break

    @case('staff')
        @includeIf('plugins.staff.index-widget')
        @break

    @case('wiki_index')
        @includeIf('plugins.wiki.categories.index-widget')
        @break

    @case('wiki_show')
        @if(isset($category))
            @includeIf('plugins.wiki.categories.show-widget')
        @else
            @includeIf('plugins.wiki.pages.show-widget')
        @endif
        @break

    @case('spin_spin')
        @includeIf('plugins.spin-wheel.spin')
        @break
    @case('spin_rewards')
        @includeIf('plugins.spin-wheel.rewards')
        @break
    @case('spin_lastsPlayers')
        @includeIf('plugins.spin-wheel.lasts_players')
        @break

    @case('coinFlip_pileorface')
        @includeIf('plugins.coin-flip.pileorface')
        @break
    @case('coinFlip_infos')
        @includeIf('plugins.coin-flip.infos')
        @break
    @case('coinFlip_lastsPlayers')
        @includeIf('plugins.coin-flip.lasts_players')
        @break

    @case('tebex_package')
        @includeIf('plugins.tebex.package')
        @break
    @case('tebex_category')
        @includeIf('plugins.tebex.category')
        @break

@endswitch
