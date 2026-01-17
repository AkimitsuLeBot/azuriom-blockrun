@switch($component)

    @case('articles_index')
    @include('admin.components.articles.articles_index')
    @break

    @case('article_show')
    @include('admin.components.articles.article_show')
    @break

    @case('images')
    @include('admin.components.widget.images')
    @break

    @case('slogan')
    @include('admin.components.widget.slogan')
    @break

    @case('widget_staff')
    @include('admin.components.widget.widget_staff')
    @break

    @case('button')
    @include('admin.components.widget.button')
    @break

    @case('button')
    @include('admin.components.widget.button')
    @break

    @case('wysiwyg')
    @include('admin.components.widget.wysiwyg')
    @break

    @case('wysiwyg_image')
    @include('admin.components.widget.wysiwyg_image')
    @break

    @case('wysiwyg_video')
    @include('admin.components.widget.wysiwyg_video')
    @break

    @case('account')
    @include('admin.components.identification.account')
    @break

    @case('accountF2a')
    @include('admin.components.identification.accountF2a')
    @break

    @case('error')
    @include('admin.components.error.error')
    @break

    @case('maintenance')
    @include('admin.components.maintenance.maintenance')
    @break

    @case('pages')
    @include('admin.components.pages.pages')
    @break

    @case('login')
    @include('admin.components.identification.login')
    @break

    @case('f2a')
    @include('admin.components.identification.f2a')
    @break

    @case('register')
    @include('admin.components.identification.register')
    @break

    @case('passwordReset')
    @include('admin.components.identification.passwordReset')
    @break

    @case('passwordEmail')
    @include('admin.components.identification.passwordEmail')
    @break

    @case('passwordConfirm')
    @include('admin.components.identification.passwordConfirm')
    @break

    @case('discord_auth')
    @include('admin.components.widget.discord_auth')
    @break

    @case('articles_home')
    @include('admin.components.widget.articles_home')
    @break

    @case('discord')
    @include('admin.components.widget.discord')
    @break

    @case('login_home')
    @include('admin.components.widget.login_home')
    @break

    @case('twitter')
    @include('admin.components.widget.twitter')
    @break

    @case('shop_goal_show')
    @include('admin.components.widget.shop_goal_show')
    @break

    @case('top_buyer')
    @include('admin.components.widget.top_buyer')
    @break

    @case('top_vote')
    @include('admin.components.widget.top_vote')
    @break

    @case('top_product')
    @include('admin.components.widget.top_product')
    @break

    @case('stats')
    @include('admin.components.widget.stats')
    @break

    @case('banner')
    @include('admin.components.widget.banner')
    @break

    @case('social_networks')
    @include('admin.components.widget.social_networks')
    @break

    @case('server')
    @include('admin.components.widget.server')
    @break

    @case('advancedBan')
    @include('admin.components.plugins.advancedBan.advancedBan')
    @break

    @case('changelog')
    @include('admin.components.plugins.changelog.changelog')
    @break

    @case('widget_changelog')
    @include('admin.components.widget.widget_changelog')
    @break

    @case('coinFlip_pileorface')
        @include('admin.components.plugins.coinFlip.coinFlip_pileorface')
    @break

    @case('coinFlip_infos')
        @include('admin.components.plugins.coinFlip.coinFlip_infos')
        @break

    @case('coinFlip_lastsPlayers')
        @include('admin.components.plugins.coinFlip.coinFlip_lastsPlayers')
    @break

    @case('cps')
    @include('admin.components.plugins.cps.cps')
    @break

    @case('faq')
    @include('admin.components.plugins.faq.faq')
    @break

    @case('forum_index')
    @include('admin.components.plugins.forum.forum_index')
    @break

    @case('forum_breadcrumb')
    @include('admin.components.plugins.forum.forum_breadcrumb')
    @break

    @case('forum_message')
    @include('admin.components.plugins.forum.forum_message')
    @break

    @case('forum_stati')
    @include('admin.components.plugins.forum.forum_stati')
    @break

    @case('forum_user')
    @include('admin.components.plugins.forum.forum_user')
    @break

    @case('forum_user_online')
    @include('admin.components.plugins.forum.forum_user_online')
    @break

    @case('forum_show')
    @include('admin.components.plugins.forum.forum_show')
    @break

    @case('forum_profileEdit')
    @include('admin.components.plugins.forum.forum_profileEdit')
    @break

    @case('forum_profileShow')
    @include('admin.components.plugins.forum.forum_profileShow')
    @break

    @case('forum_discussionsPostsEdit')
    @include('admin.components.plugins.forum.forum_discussionsPostsEdit')
    @break

    @case('forum_discussionsCreate')
    @include('admin.components.plugins.forum.forum_discussionsCreate')
    @break

    @case('forum_discussionsEdit')
    @include('admin.components.plugins.forum.forum_discussionsEdit')
    @break

    @case('forum_discussionsShow')
    @include('admin.components.plugins.forum.forum_discussionsShow')
    @break

    @case('flyff_accounts')
    @include('admin.components.plugins.flyff.flyff_accounts')
    @break

    @case('flyff_resetPassword')
    @include('admin.components.plugins.flyff.flyff_resetPassword')
    @break

    @case('flyff_guilds')
    @include('admin.components.plugins.flyff.flyff_guilds')
    @break

    @case('flyff_guildsShow')
    @include('admin.components.plugins.flyff.flyff_guildsShow')
    @break

    @case('flyff_guildSiege')
    @include('admin.components.plugins.flyff.flyff_guildSiege')
    @break

    @case('flyff_guildSiegeShow')
    @include('admin.components.plugins.flyff.flyff_guildSiegeShow')
    @break

    @case('flyff_characters')
    @include('admin.components.plugins.flyff.flyff_characters')
    @break

    @case('flyff_characterShow')
    @include('admin.components.plugins.flyff.flyff_characterShow')
    @break

    @case('gallery')
    @include('admin.components.plugins.gallery.gallery')
    @break

    @case('invoicepro')
    @include('admin.components.plugins.invoicepro.invoicepro')
    @break

    @case('jirai_suggestions')
    @include('admin.components.plugins.jirai.jirai_suggestions')
    @break

    @case('jirai_bugs')
    @include('admin.components.plugins.jirai.jirai_bugs')
    @break

    @case('jirai_changelogs')
    @include('admin.components.plugins.jirai.jirai_changelog')
    @break

    @case('jirai_changelogs_create')
    @include('admin.components.plugins.jirai.jirai_changelogs_create')
    @break

    @case('jirai_changelogs_edit')
    @include('admin.components.plugins.jirai.jirai_changelogs_edit')
    @break

    @case('jirai_changelogs_show')
    @include('admin.components.plugins.jirai.jirai_changelogs_show')
    @break

    @case('jirai_issues_create')
    @include('admin.components.plugins.jirai.jirai_issues_create')
    @break

    @case('jirai_issues_edit')
    @include('admin.components.plugins.jirai.jirai_issues_edit')
    @break

    @case('jirai_issues_show')
    @include('admin.components.plugins.jirai.jirai_issues_show')
    @break


    @case('jirai_messages_edit')
    @include('admin.components.plugins.jirai.jirai_messages_edit')
    @break


    @case('liteBans')
    @include('admin.components.plugins.liteBans.liteBans')
    @break

    @case('liteBans_navbar')
    @include('admin.components.plugins.liteBans.liteBans_navbar')
    @break

    @case('paysafecardmanual')
    @include('admin.components.plugins.paysafecardmanual.paysafecardmanual')
    @break

    @case('shop_shop')
    @include('admin.components.plugins.shop.shop_shop')
    @break

    @case('shop_filter')
    @include('admin.components.plugins.shop.shop_filter')
    @break

    @case('shop_goal')
    @include('admin.components.plugins.shop.shop_goal')
    @break

    @case('shop_shop_profile')
    @include('admin.components.plugins.shop.shop_shop_profile')
    @break

    @case('shop_recent')
    @include('admin.components.plugins.shop.shop_recent')
    @break

    @case('shop_top')
    @include('admin.components.plugins.shop.shop_top')
    @break

    @case('shop_cart')
    @include('admin.components.plugins.shop.shop_cart')
    @break

    @case('shop_offersSelect')
    @include('admin.components.plugins.shop.shop_offersSelect')
    @break

    @case('shop_offersBuy')
    @include('admin.components.plugins.shop.shop_offersBuy')
    @break

    @case('shop_payments')
    @include('admin.components.plugins.shop.shop_payments')
    @break

    @case('shop_profile')
    @include('admin.components.plugins.shop.shop_profile')
    @break

    @case('spin_spin')
    @include('admin.components.plugins.spinWheel.spin_spin')
    @break

    @case('spin_rewards')
    @include('admin.components.plugins.spinWheel.spin_rewards')
    @break

    @case('spin_lastsPlayers')
    @include('admin.components.plugins.spinWheel.spin_lastsPlayers')
    @break

    @case('staff')
    @include('admin.components.plugins.staff.staff')
    @break

    @case('skinApi')
    @include('admin.components.plugins.skinApi.skinApi')
    @break

    @case('support_index')
    @include('admin.components.plugins.support.support_index')
    @break

    @case('support_show')
    @include('admin.components.plugins.support.support_show')
    @break

    @case('support_create')
    @include('admin.components.plugins.support.support_create')
    @break

    @case('tebex_package')
        @include('admin.components.plugins.tebex.tebex_package')
    @break

    @case('tebex_category')
        @include('admin.components.plugins.tebex.tebex_category')
    @break

    @case('vote')
    @include('admin.components.plugins.vote.vote')
    @break

    @case('vote_podium')
    @include('admin.components.plugins.vote.vote_podium')
    @break

    @case('vote_classement')
    @include('admin.components.plugins.vote.vote_classement')
    @break

    @case('vote_recompenses')
    @include('admin.components.plugins.vote.vote_recompenses')
    @break

    @case('wiki_index')
    @include('admin.components.plugins.wiki.wiki_index')
    @break

    @case('wiki_show')
    @include('admin.components.plugins.wiki.wiki_show')
    @break

@endswitch
