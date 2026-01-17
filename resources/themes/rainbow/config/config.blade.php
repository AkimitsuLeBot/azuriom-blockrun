@if(request()->ajax() || request()->isXmlHttpRequest())
    @json(config('theme'))
@else

    @extends('admin.layouts.admin')
    @section('title', 'Thème Rainbow')

    @include('admin.elements.editor')

    @section('content')
        @php
            $version_theme = json_decode(file_get_contents(theme_path().'/theme.json'), true);
            $baseMenu  = [
                    'global' => [
                        'is_enabled' => true,
                    ],
                    'navigation' => [
                        'is_enabled' => true,
                    ],
                    'footer' => [
                        'is_enabled' => true,
                    ],
                    'home' => [
                        'is_enabled' => true,
                    ],
                    'articles' => [
                        'is_enabled' => true,
                        'multiple_page' => ['index' =>['name'=> trans('theme::lang.menus.articles.index')],
                                            'show' =>['name'=> trans('theme::lang.menus.articles.show')],
                                            ]
                    ],
                    'pages' => [
                        'is_enabled' => true,
                    ],
                    'identification' => [
                        'is_enabled' => true,
                        'multiple_page' => [
                                            'login' =>['name'=> trans('theme::lang.login.title')],
                                            'register' =>['name'=> trans('theme::lang.register.title')],
                                            'f2a' =>['name'=> trans('theme::lang.menus.identification.f2a')],
                                            'passwordReset' =>['name'=> trans('theme::lang.menus.identification.passwordReset')],
                                            'passwordEmail' =>['name'=> trans('theme::lang.menus.identification.passwordEmail')],
                                            'passwordConfirm' =>['name'=> trans('theme::lang.menus.identification.passwordConfirm')],
                                            'account' =>['name'=> trans('theme::lang.menus.identification.account')],
                                            'accountF2a' =>['name'=> trans('theme::lang.menus.identification.accountF2a')],
                                            'error' =>['name'=> trans('theme::lang.menus.identification.error')],
                                            'maintenance' =>['name'=> trans('theme::lang.menus.identification.maintenance')],
                                            ]
                    ],
                ];
            $pluginMenu  = [
                    'advancedBan' => [
                        'is_enabled' => plugins()->isEnabled('advancedban'),
                    ],
                    'changelog' => [
                        'is_enabled' => plugins()->isEnabled('changelog'),
                    ],
                    'coinFlip' => [
                        'is_enabled' => plugins()->isEnabled('coin-flip'),
                    ],
                    'cps' => [
                        'is_enabled' => plugins()->isEnabled('cps'),
                    ],
                    'faq' => [
                        'is_enabled' => plugins()->isEnabled('faq'),
                    ],
                    'forum' => [
                        'is_enabled' => plugins()->isEnabled('forum'),
                        'multiple_page' => ['index' =>['name'=> trans('theme::lang.menus.forum.index')],
                                            'show' =>['name'=> trans('theme::lang.menus.forum.show')],
                                            'profileEdit' =>['name'=> trans('theme::lang.menus.forum.profile_edit')],
                                            'profileShow' =>['name'=> trans('theme::lang.menus.forum.profile_show')],
                                            'discussionsPostsEdit' =>['name'=> trans('theme::lang.menus.forum.discussions_posts_edit')],
                                            'discussionsCreate' =>['name'=> trans('theme::lang.menus.forum.discussions_create')],
                                            'discussionsEdit' =>['name'=> trans('theme::lang.menus.forum.discussions_edit')],
                                            'discussionsShow' =>['name'=> trans('theme::lang.menus.forum.discussions_show')],
                                            ]
                    ],
                    'gallery' => [
                        'is_enabled' => plugins()->isEnabled('gallery'),
                    ],
                    'invoicepro' => [
                        'is_enabled' => plugins()->isEnabled('invoicepro'),
                    ],
                    'jirai' => [
                        'is_enabled' => plugins()->isEnabled('jirai'),
                        'multiple_page' => ['index' =>['name'=> trans('theme::lang.menus.jirai.index')],
                                            'changelogs_create' =>['name'=> trans('theme::lang.menus.jirai.changelogs_create')],
                                            'changelogs_edit' =>['name'=> trans('theme::lang.menus.jirai.changelogs_edit')],
                                            'changelogs_show' =>['name'=> trans('theme::lang.menus.jirai.changelogs_show')],
                                            'issues_create' =>['name'=> trans('theme::lang.menus.jirai.issues_create')],
                                            'issues_edit' =>['name'=> trans('theme::lang.menus.jirai.issues_edit')],
                                            'issues_show' =>['name'=> trans('theme::lang.menus.jirai.issues_show')],
                                            'messages_edit' =>['name'=> trans('theme::lang.menus.jirai.messages_edit')],
                                            ]
                    ],
                    'liteBans' => [
                        'is_enabled' => plugins()->isEnabled('litebans'),
                    ],
                    'paysafecardmanual' => [
                        'is_enabled' => plugins()->isEnabled('paysafecardmanual'),
                    ],
                    'shop' => [
                        'is_enabled' => plugins()->isEnabled('shop'),
                        'multiple_page' => ['index' =>['name'=> trans('theme::lang.menus.shop.index')],
                                            'cart' =>['name'=> trans('theme::lang.menus.shop.cart')],
                                            'offersSelect' =>['name'=> trans('theme::lang.menus.shop.offre_select'), 'is_active' => setting('shop.use_site_money') === '1'],
                                            'offersBuy' =>['name'=> trans('theme::lang.menus.shop.offre_buy'), 'is_active' => setting('shop.use_site_money') === '1'],
                                            'payments' =>['name'=> trans('theme::lang.menus.shop.payments'), 'is_active' => setting('shop.use_site_money') === '0'],
                                            'shop_profile' =>['name'=> trans('theme::lang.menus.shop.my_achats')],
                                            ]
                    ],
                    'skinApi' => [
                        'is_enabled' => plugins()->isEnabled('skin-api'),
                    ],
                    'spinWheel' => [
                        'is_enabled' => plugins()->isEnabled('spin-wheel'),
                    ],
                    'support' => [
                        'is_enabled' => plugins()->isEnabled('support'),
                        'multiple_page' => ['index' =>['name'=> trans('theme::lang.menus.support.index')],
                                            'show' =>['name'=> trans('theme::lang.menus.support.show')],
                                            'create' =>['name'=> trans('theme::lang.menus.support.create')],
                                            ]
                    ],
                    'staff' => [
                        'is_enabled' => plugins()->isEnabled('staff'),
                    ],
                    'tebex' => [
                        'is_enabled' => plugins()->isEnabled('tebex'),
                    ],
                    'vote' => [
                        'is_enabled' => plugins()->isEnabled('vote'),
                    ],
                    'wiki' => [
                        'is_enabled' => plugins()->isEnabled('wiki'),
                        'multiple_page' => ['index' =>['name'=> trans('theme::lang.menus.wiki.index')],
                                            'show' =>['name'=> trans('theme::lang.menus.wiki.show')],
                                            ]
                    ],
                ];

            if (plugins()->isEnabled('flyff')){
                $pluginMenu += [
                    'flyff' => [
                        'is_enabled' => plugins()->isEnabled('flyff'),
                        'multiple_page' => ['flyff_accounts' =>['name'=> trans('theme::lang.menus.flyff.flyff_accounts')],
                                            'flyff_resetPassword' =>['name'=> trans('theme::lang.menus.flyff.flyff_resetPassword')],
                                            'flyff_guilds' =>['name'=> trans('theme::lang.menus.flyff.flyff_guilds')],
                                            'flyff_guildsShow' =>['name'=> trans('theme::lang.menus.flyff.flyff_guildsShow')],
                                            'flyff_guildSiege' =>['name'=> trans('theme::lang.menus.flyff.flyff_guildSiege')],
                                            'flyff_guildSiegeShow' =>['name'=> trans('theme::lang.menus.flyff.flyff_guildSiegeShow')],
                                            'flyff_characters' =>['name'=> trans('theme::lang.menus.flyff.flyff_characters')],
                                            'flyff_characterShow' =>['name'=> trans('theme::lang.menus.flyff.flyff_characterShow')],
                                            ]
                    ],
                ];
            }

                uasort($pluginMenu, function ($a, $b) {
                    return $b['is_enabled'] <=> $a['is_enabled'];
                });

                $menus =  $baseMenu + $pluginMenu;

                $themes = [
                    1 => 'Style N°1',
                    2 => 'Style N°2',
                    ];
                $particleContent = [
                    'header','main','full'
                ];

                $breakpoint = [
                    'md' => 'Tablette (768px)',
                    'lg' => 'Desktop (992px)',
                    'xl' => 'Desktop Extra large (Default) (1200px)',
                    'xxl' => 'Desktop Extra extra large (1400px)',
                    ];

                $navbarStyle = [
                    1 => 'Style N°1',
                    2 => 'Style N°2',
                    ];
                $navbarPosition = [
                    'center' => 'Center',
                    'left' => 'Left',
                    'right' => 'Right',
                    ];

                $justifyContent = [
                    'center' => 'center',
                    'start' => 'start',
                    'end' => 'end',
                    'around' => 'space-around',
                    'between' => 'space-between',
                    'evenly' => 'space-evenly',
                    ];

                $alignSelft = [
                    'center' => 'center',
                    'start' => 'start',
                    'end' => 'end',
                    ];

                $alignText = [
                    'start' => 'start',
                    'center' => 'center',
                    'end' => 'end',
                    ];

                $particleStyle = [
                    'default','line','nasa','bubble','snow','nyan-cat','custom'
                ];

                $animations = [
                    'No effect'=>['none'],
                    'Fade' => ['fade', 'fade-up', 'fade-down', 'fade-left', 'fade-right', 'fade-up-right', 'fade-up-left', 'fade-down-right', 'fade-down-left'],
                    'Flip' => ['flip-up', 'flip-down', 'flip-left', 'flip-right'],
                    'Slide' => ['slide-up', 'slide-down', 'slide-left', 'slide-right'],
                    'Zoom' => ['zoom-in', 'zoom-in-up', 'zoom-in-down', 'zoom-in-left', 'zoom-in-right', 'zoom-out', 'zoom-out-up', 'zoom-out-down', 'zoom-out-left', 'zoom-out-right']
                ];
                $easingAnimations = [
                    'linear', 'ease', 'ease-in', 'ease-out', 'ease-in-out', 'ease-in-back', 'ease-out-back', 'ease-in-out-back', 'ease-in-sine',
                    'ease-out-sine', 'ease-in-out-sine', 'ease-in-quad', 'ease-out-quad', 'ease-in-out-quad', 'ease-in-cubic', 'ease-out-cubic',
                    'ease-in-out-cubic', 'ease-in-quart', 'ease-out-quart', 'ease-in-out-quart'
                ];
                $placements = [
                    'top-bottom','center-bottom','bottom-bottom','top-center','center-center'
                ];
                $colLgs = [
                    'col-lg-2','col-lg-3','col-lg-4','col-lg-5','col-lg-6','col-lg-7','col-lg-8','col-lg-9','col-lg-10','col-lg-11','col-lg-12',
                ];
                $separator = [
                'vide' => 'vide',
                'waves' => 'image/separator/waves.svg',
                'wavesOpacity' => 'image/separator/wavesOpacity.svg',
                'curve' => 'image/separator/curve.svg',
                'curveAsymmetrical' => 'image/separator/curveAsymmetrical.svg',
                'triangle' => 'image/separator/triangle.svg',
                'triangleAsymmetrical' => 'image/separator/triangleAsymmetrical.svg',
                'tilt' => 'image/separator/tilt.svg',
                'arrow' => 'image/separator/arrow.svg',
                'split' => 'image/separator/split.svg',
                'book' => 'image/separator/book.svg',
                ];
                $selectSkin = [
                    'avatar' => trans('theme::widget.selectSkin.avatar'),
                    'player'   => trans('theme::widget.selectSkin.bust'),
                    'body'   => trans('theme::widget.selectSkin.body'),
                ];
                $selectSkinInterface = [
                    'list'   => trans('theme::widget.selectSkinInterface.list'),
                    'podium' => trans('theme::widget.selectSkinInterface.podium'),
                ];
                $buttonWidthText = [
                    '0'   => trans('theme::lang.default'),
                    '25'  => '25%',
                    '50'  => '50%',
                    '75'  => '75%',
                    '100' => '100%',
                ];
                $textAlignement = [
                    'center'    => trans('theme::lang.textAlignement.center'),
                    'start'     => trans('theme::lang.textAlignement.start'),
                    'end'       => trans('theme::lang.textAlignement.end'),
                ];
                $counterPartial = 1;
                $allImagesStokage = \Azuriom\Models\Image::all();
                $navbars = \Azuriom\Models\NavbarElement::orderBy('position')->get();
                $theme_lang_panel = trans('theme::lang.panel');
        @endphp

        @push('styles')
            <link href="{{ theme_asset('css/style-admin-backoffice.css?ver='.$version_theme['version']) }}"
                  rel="stylesheet">
        @endpush
        @push('footer-scripts')
            <script src="{{ asset('vendor/sortablejs/Sortable.min.js') }}" defer data-cfasync="false"></script>
            <script src="{{ theme_asset('js/admin-config.js?v=2.3.0') }}" defer data-cfasync="false"></script>
            <script data-cfasync="false">

                window.THEMES_LANG_PANEL = @php echo json_encode($theme_lang_panel)  @endphp

                    ////////////////////////////////////////////
                    /////       Image Preview Select
                    ////////////////////////////////////////////
                    function imagePreviewSelect(el) {
                        el.addEventListener('change', function () {
                            if (el.value) {
                                const reader = new FileReader();
                                const preview = document.getElementById(el.getAttribute('data-image-preview-select'));

                                if (el.options[el.selectedIndex].getAttribute('data-image') == 'theme') {
                                    preview.src = el.value;
                                    preview.src = 'http://' + window.location.hostname + '/assets/themes/rainbow/' + el.value;
                                } else {
                                    preview.src = 'https://' + window.location.hostname + '/storage/img/' + el.value;
                                }
                                preview.classList.remove('d-none');
                                if (el.options[el.selectedIndex].getAttribute('data-image') == 'theme') {
                                    preview.style.objectFit = 'fill'
                                } else {
                                    preview.style.objectFit = 'cover'
                                }

                                reader.onload = function (el) {
                                    if (preview) {
                                        preview.src = el.currentTarget.result;
                                        preview.classList.remove('d-none');
                                        if (el.options[el.selectedIndex].getAttribute('data-image') == 'theme') {
                                            preview.style.objectFit = 'fill'
                                        } else {
                                            preview.style.objectFit = 'cover'
                                        }
                                    }
                                };

                            }
                        });
                    }

                window.templateRow = `@include('admin.pattern.row', ['randJs' => random_int(0,9999)])`
                window.templateSeparator = `@include('admin.pattern.separator', ['randJs' => random_int(0,9999)])`
                window.templateSeparatorBg = `@include('admin.pattern.separator-bg', ['randJs' => random_int(0,9999)])`
                window.templateSeparatorColor = `@include('admin.pattern.separator-color', ['randJs' => random_int(0,9999)])`

                var rowSelect = "";
                var componentSelect = "";
                var sectionSelect = "";
                var backgroundSelect = "";

                function getComponentClick(component) {
                    let element = '';
                    switch (component) {

                        //Widget
                        case 'articles_home':
                            element = `@include('admin.components.widget.articles_home')`;
                            break

                        case 'discord_auth':
                            element = `@include('admin.components.widget.discord_auth')`;
                            break

                        case 'images':
                            element = `@include('admin.components.widget.images')`;
                            break

                        case 'login_home':
                            element = `@include('admin.components.widget.login_home')`;
                            break

                        case 'discord':
                            element = `@include('admin.components.widget.discord')`;
                            break

                        case 'twitter':
                            element = `@include('admin.components.widget.twitter')`;
                            break

                        case 'slogan':
                            element = `@include('admin.components.widget.slogan')`;
                            break

                        case 'shop_goal_show':
                            element = `@include('admin.components.widget.shop_goal_show')`;
                            break

                        case 'top_buyer':
                            element = `@include('admin.components.widget.top_buyer')`;
                            break

                        case 'top_vote':
                            element = `@include('admin.components.widget.top_vote')`;
                            break

                        case 'top_product':
                            element = `@include('admin.components.widget.top_product')`;
                            break

                        case 'widget_staff':
                            element = `@include('admin.components.widget.widget_staff')`;
                            break

                        case 'stats':
                            element = `@include('admin.components.widget.stats')`;
                            break

                        case 'widget_changelog':
                            element = `@include('admin.components.widget.widget_changelog')`;
                            break

                        case 'banner':
                            element = `@include('admin.components.widget.banner')`;
                            break

                        case 'social_networks':
                            element = `@include('admin.components.widget.social_networks')`;
                            break

                        case 'server':
                            element = `@include('admin.components.widget.server')`;
                            break

                        case 'button':
                            element = `@include('admin.components.widget.button')`;
                            break

                        case 'wysiwyg':
                            element = `@include('admin.components.widget.wysiwyg')`;
                            break

                        case 'wysiwyg_image':
                            element = `@include('admin.components.widget.wysiwyg_image')`;
                            break

                        case 'wysiwyg_video':
                            element = `@include('admin.components.widget.wysiwyg_video')`;
                            break


                        //Article

                        case 'articles_index':
                            element = `@include('admin.components.articles.articles_index')`;
                            break

                        case 'article_show':
                            element = `@include('admin.components.articles.article_show')`;
                            break

                        //Pages
                        case 'pages':
                            element = `@include('admin.components.pages.pages')`;
                            break

                        //Identification
                        case 'login':
                            element = `@include('admin.components.identification.login')`;
                            break

                        case 'f2a':
                            element = `@include('admin.components.identification.f2a')`;
                            break

                        case 'register':
                            element = `@include('admin.components.identification.register')`;
                            break

                        case 'passwordReset':
                            element = `@include('admin.components.identification.passwordReset')`;
                            break

                        case 'passwordEmail':
                            element = `@include('admin.components.identification.passwordEmail')`;
                            break

                        case 'passwordConfirm':
                            element = `@include('admin.components.identification.passwordConfirm')`;
                            break

                        case 'account':
                            element = `@include('admin.components.identification.account')`;
                            break

                        case 'accountF2a':
                            element = `@include('admin.components.identification.accountF2a')`;
                            break

                        case 'error':
                            element = `@include('admin.components.error.error')`;
                            break

                        case 'maintenance':
                            element = `@include('admin.components.maintenance.maintenance')`;
                            break



                        //Plugin
                        case 'advancedBan':
                            element = `@include('admin.components.plugins.advancedBan.advancedBan')`;
                            break

                        case 'changelog':
                            element = `@include('admin.components.plugins.changelog.changelog')`;
                            break

                        case 'coinFlip_pileorface':
                            element = `@include('admin.components.plugins.coinFlip.coinFlip_pileorface')`;
                            break

                        case 'coinFlip_infos':
                            element = `@include('admin.components.plugins.coinFlip.coinFlip_infos')`;
                            break

                        case 'coinFlip_lastsPlayers':
                            element = `@include('admin.components.plugins.coinFlip.coinFlip_lastsPlayers')`;
                            break

                        case 'cps':
                            element = `@include('admin.components.plugins.cps.cps')`;
                            break

                        case 'faq':
                            element = `@include('admin.components.plugins.faq.faq')`;
                            break

                        case 'forum_index':
                            element = `@include('admin.components.plugins.forum.forum_index')`;
                            break

                        case 'forum_breadcrumb':
                            element = `@include('admin.components.plugins.forum.forum_breadcrumb')`;
                            break

                        case 'forum_message':
                            element = `@include('admin.components.plugins.forum.forum_message')`;
                            break

                        case 'forum_stati':
                            element = `@include('admin.components.plugins.forum.forum_stati')`;
                            break

                        case 'forum_user':
                            element = `@include('admin.components.plugins.forum.forum_user')`;
                            break

                        case 'forum_user_online':
                            element = `@include('admin.components.plugins.forum.forum_user_online')`;
                            break

                        case 'forum_show':
                            element = `@include('admin.components.plugins.forum.forum_show')`;
                            break

                        case 'forum_profileEdit':
                            element = `@include('admin.components.plugins.forum.forum_profileEdit')`;
                            break

                        case 'forum_profileShow':
                            element = `@include('admin.components.plugins.forum.forum_profileShow')`;
                            break

                        case 'forum_discussionsPostsEdit':
                            element = `@include('admin.components.plugins.forum.forum_discussionsPostsEdit')`;
                            break

                        case 'forum_discussionsCreate':
                            element = `@include('admin.components.plugins.forum.forum_discussionsCreate')`;
                            break

                        case 'forum_discussionsEdit':
                            element = `@include('admin.components.plugins.forum.forum_discussionsEdit')`;
                            break

                        case 'forum_discussionsShow':
                            element = `@include('admin.components.plugins.forum.forum_discussionsShow')`;
                            break

                        case 'flyff_accounts':
                            element = `@include('admin.components.plugins.flyff.flyff_accounts')`;
                            break

                        case 'flyff_resetPassword':
                            element = `@include('admin.components.plugins.flyff.flyff_resetPassword')`;
                            break

                        case 'flyff_guilds':
                            element = `@include('admin.components.plugins.flyff.flyff_guilds')`;
                            break

                        case 'flyff_guildsShow':
                            element = `@include('admin.components.plugins.flyff.flyff_guildsShow')`;
                            break

                        case 'flyff_guildSiege':
                            element = `@include('admin.components.plugins.flyff.flyff_guildSiege')`;
                            break

                        case 'flyff_guildSiegeShow':
                            element = `@include('admin.components.plugins.flyff.flyff_guildSiegeShow')`;
                            break

                        case 'flyff_characters':
                            element = `@include('admin.components.plugins.flyff.flyff_characters')`;
                            break

                        case 'flyff_characterShow':
                            element = `@include('admin.components.plugins.flyff.flyff_characterShow')`;
                            break

                        case 'gallery':
                            element = `@include('admin.components.plugins.gallery.gallery')`;
                            break

                        case 'invoicepro':
                            element = `@include('admin.components.plugins.invoicepro.invoicepro')`;
                            break

                        case 'jirai_suggestions':
                            element = `@include('admin.components.plugins.jirai.jirai_suggestions')`;
                            break

                        case 'jirai_bugs':
                            element = `@include('admin.components.plugins.jirai.jirai_bugs')`;
                            break

                        case 'jirai_changelogs':
                            element = `@include('admin.components.plugins.jirai.jirai_changelog')`;
                            break

                        case 'jirai_changelogs_create':
                            element = `@include('admin.components.plugins.jirai.jirai_changelogs_create')`;
                            break

                        case 'jirai_changelogs_edit':
                            element = `@include('admin.components.plugins.jirai.jirai_changelogs_edit')`;
                            break

                        case 'jirai_issues_create':
                            element = `@include('admin.components.plugins.jirai.jirai_issues_create')`;
                            break

                        case 'jirai_issues_edit':
                            element = `@include('admin.components.plugins.jirai.jirai_issues_edit')`;
                            break

                        case 'jirai_issues_show':
                            element = `@include('admin.components.plugins.jirai.jirai_issues_show')`;
                            break

                        case 'jirai_messages_edit':
                            element = `@include('admin.components.plugins.jirai.jirai_messages_edit')`;
                            break

                        case 'liteBans':
                            element = `@include('admin.components.plugins.liteBans.liteBans')`;
                            break

                        case 'liteBans_navbar':
                            element = `@include('admin.components.plugins.liteBans.liteBans_navbar')`;
                            break

                        case 'paysafecardmanual':
                            element = `@include('admin.components.plugins.paysafecardmanual.paysafecardmanual')`;
                            break

                        case 'shop_shop':
                            element = `@include('admin.components.plugins.shop.shop_shop')`;
                            break

                        case 'shop_filter':
                            element = `@include('admin.components.plugins.shop.shop_filter')`;
                            break

                        case 'shop_goal':
                            element = `@include('admin.components.plugins.shop.shop_goal')`;
                            break

                        case 'shop_shop_profile':
                            element = `@include('admin.components.plugins.shop.shop_shop_profile')`;
                            break

                        case 'shop_recent':
                            element = `@include('admin.components.plugins.shop.shop_recent')`;
                            break

                        case 'shop_top':
                            element = `@include('admin.components.plugins.shop.shop_top')`;
                            break

                        case 'shop_cart':
                            element = `@include('admin.components.plugins.shop.shop_cart')`;
                            break

                        case 'shop_offersSelect':
                            element = `@include('admin.components.plugins.shop.shop_offersSelect')`;
                            break

                        case 'shop_offersBuy':
                            element = `@include('admin.components.plugins.shop.shop_offersBuy')`;
                            break

                        case 'shop_payments':
                            element = `@include('admin.components.plugins.shop.shop_payments')`;
                            break

                        case 'shop_profile':
                            element = `@include('admin.components.plugins.shop.shop_profile')`;
                            break

                        case 'spin_spin':
                            element = `@include('admin.components.plugins.spinWheel.spin_spin')`;
                            break

                        case 'spin_rewards':
                            element = `@include('admin.components.plugins.spinWheel.spin_rewards')`;
                            break

                        case 'spin_lastsPlayers':
                            element = `@include('admin.components.plugins.spinWheel.spin_lastsPlayers')`;
                            break


                        case 'staff':
                            element = `@include('admin.components.plugins.staff.staff')`;
                            break

                        case 'skinApi':
                            element = `@include('admin.components.plugins.skinApi.skinApi')`;
                            break

                        case 'support_index':
                            element = `@include('admin.components.plugins.support.support_index')`;
                            break

                        case 'support_show':
                            element = `@include('admin.components.plugins.support.support_show')`;
                            break

                        case 'support_create':
                            element = `@include('admin.components.plugins.support.support_create')`;
                            break

                        case 'tebex_package':
                            element = `@include('admin.components.plugins.tebex.tebex_package')`;
                            break

                        case 'tebex_category':
                            element = `@include('admin.components.plugins.tebex.tebex_category')`;
                            break

                        case 'vote':
                            element = `@include('admin.components.plugins.vote.vote')`;
                            break

                        case 'vote_podium':
                            element = `@include('admin.components.plugins.vote.vote_podium')`;
                            break

                        case 'vote_classement':
                            element = `@include('admin.components.plugins.vote.vote_classement')`;
                            break

                        case 'vote_recompenses':
                            element = `@include('admin.components.plugins.vote.vote_recompenses')`;
                            break

                        case 'wiki_index':
                            element = `@include('admin.components.plugins.wiki.wiki_index')`;
                            break

                        case 'wiki_show':
                            element = `@include('admin.components.plugins.wiki.wiki_show')`;
                            break

                    }
                    return element
                }

                function getBackgroundClick(background) {
                    let element = '';
                    switch (background) {
                        //Background
                        case 'backgroundSlider':
                            element = `@include('admin.components.background.backgroundSlider.backgroundSlider',['add_background'=> true])`;
                            break

                        case 'backgroundServerIp':
                            element = `@include('admin.components.background.backgroundServerIp.backgroundServerIp',['add_background'=> true])`;
                            break

                        case 'background':
                            element = `@include('admin.components.background.background.background',['add_background'=> true])`;
                            break

                        case 'backgroundLogo':
                            element = `@include('admin.components.background.backgroundLogo.backgroundLogo',['add_background'=> true])`;
                            break
                    }
                    return element
                }

            </script>
        @endpush

        <div id="loading-body-js"
             class="loading-body">
            <div class="bg-body-secondary opacity-75 position-absolute top-0 start-0 h-100 w-100"></div>
            <div class="boxes-loading position-relative top-0 start-0 w-100 d-flex align-items-center justify-content-center z-3">
                <div class="boxes">
                    <div class="box">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="bg-body"></div>
                    </div>
                    <div class="box">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="bg-body"></div>
                    </div>
                    <div class="box">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="bg-body"></div>
                    </div>
                    <div class="box">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="bg-body"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5" id="accordion-theme">
            <div class="col-12 mb-3">
                {!!  trans('theme::lang.config.info') !!}
            </div>
            <div class="col-lg-2">
                <div class="list-group sticky-top">
                    @foreach ( $menus as $key => $values)
                        @if(!$values['is_enabled'])
                            <span data-bs-toggle="tooltip" title="{{trans('theme::lang.plugin.requires')}}">
                      @endif
                     <button
                         class="list-group-item list-group-item-action list-group-item-light {{isset($values['multiple_page']) && $values['multiple_page'] ? 'multiple_page':''}} @if($loop->index == 0) active @endif"
                         title="{{$key}}"
                         href="#list-{{$key}}"
                         data-bs-toggle="list"
                         role="tab"
                         @if(!$values['is_enabled'])
                             aria-disabled="false" disabled
                         @endif
                         aria-controls="{{$key}}">
                      {{trans('theme::lang.'.$key.'.title')}}
                         @if(isset($values['multiple_page']) && $values['multiple_page'])
                             <a
                                 class="px-3 float-end dropdown-toggle"
                                 type="button" id="dropdownMenu{{$key}}"
                                 data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                             <div class="dropdown-menu" aria-labelledby="dropdownMenu{{$key}}">
                                    @foreach($values['multiple_page'] as $k => $v)
                                     @if(!isset($v['is_active']) || (isset($v['is_active']) && $v['is_active'] === true))
                                         <a class="dropdown-item {{$loop->index != 0 ? 'collapsed':''}}"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapse-{{$key}}-{{$k}}"
                                            @if($loop->index == 0) aria-expanded="true" @endif
                                            aria-controls="collapse{{$key}}-{{$k}}"><span>{{$v['name']}}</span></a>
                                     @endif
                                 @endforeach
                                </div>
                         @endif
                     </button>

                            @if(!$values['is_enabled'])
                      </span>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-lg-10  mt-lg-0 mt-5 sidebar-dark">
                <form action="{{ route('admin.themes.config', $theme) }}" method="POST" id="configForm">
                    @csrf
                    <input type="hidden" name="project[color_themes]"
                           value="{{ old('project[color_themes]', config('theme.project.color_themes')) }}">
                    <input type="hidden" name="project[color_themes_data]"
                           value="{{ old('project[color_themes_data]', config('theme.project.color_themes_data')) }}">

                    <div class="tab-content" id="nav-tabContent">
                        @foreach ( $menus as $key => $values)
                            @if($values['is_enabled'])
                                <div
                                    class="tab-pane fade card shadow mb-4 pb-5 sortable {{ isset($values['multiple_page']) ? 'multi-page': 'not-multi-page'}} py-0 @if($loop->index == 0) active show @endif"
                                    id="list-{{$key}}" role="tabpanel"
                                    aria-labelledby="list-{{$key}}-list"
                                >
                                    @includeIf("admin.config.$key", ['page_current' => $key, 'multiple_page'=> $values['multiple_page'] ?? ''])
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary"><i
                            class="bi bi-save"></i> {{ trans('messages.actions.save') }}</button>
                </form>
            </div>
        </div>
        @include('admin.components.modal')

        <div class="modal fade" id="donationModal" tabindex="-1" aria-labelledby="donationModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-black display-6" id="exampleModalLabel">Donation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-black">
                        <p class="fst-italic">{!! trans('theme::lang.config.donation') !!}</p>
                        <div class="d-flex w-100 flex-column justify-content-center align-items-center my-5">

                            <a href="https://paypal.me/yoanlatchere?country.x=FR&locale.x=fr_FR" target="_blank"
                               class="btn btn-link my-3"
                               aria-labelledby="Paypal" title="Paypal">
                                <img style="height: 40px"
                                     src="https://www.paypalobjects.com/digitalassets/c/website/logo/full-text/pp_fc_hl.svg"
                                     alt="Paypal">
                            </a>

                            <a data-bs-toggle="collapse" href="#collapseBitcoin" role="button" aria-expanded="false"
                               aria-controls="collapseBitcoin" class="btn btn-link my-3 d-none"
                               aria-labelledby="Bitcoin"
                               title="Bitcoin">
                                <img style="height: 40px"
                                     src="https://bitcoin.org/img/icons/logotop.svg?1648897668" alt="Bitcoin">
                            </a>
                            <div class="collapse" id="collapseBitcoin">
                                <ul>
                                    <li>
                                        xxx-xxx-xxx-xxx
                                    </li>
                                </ul>
                            </div>

                            <a data-bs-toggle="collapse" href="#collapseElrond" role="button" aria-expanded="false"
                               aria-controls="collapseElrond" class="btn btn-link  my-3 d-none" aria-labelledby="Elrond"
                               title="Elrond">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 327.1 98"
                                     style="enable-background:new 0 0 327.1 98; height: 40px;" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                    }

                                    #original-horizontal,
                                    #original-horizontal * {
                                        fill: #000;
                                    }
                                </style>
                                    <g id="original-horizontal">
                                        <g>
                                            <path id="Path_3_" class="st0" d="M78.2,19.5c-0.4-0.4-0.6-0.8-0.6-1.3s0.2-0.9,0.6-1.3c0.8-0.7,2-0.7,2.8,0
			c0.4,0.4,0.6,0.8,0.6,1.3s-0.2,0.9-0.6,1.3c-0.4,0.3-0.9,0.5-1.4,0.5C79.1,20.1,78.6,19.9,78.2,19.5"></path>
                                            <path class="st0" d="M73.3,24.7c-0.3-0.4-0.5-0.8-0.5-1.3s0.2-0.9,0.5-1.3c0.7-0.7,1.9-0.7,2.6,0c0.3,0.4,0.5,0.8,0.5,1.3
			s-0.2,0.9-0.5,1.3c-0.4,0.3-0.8,0.5-1.3,0.5S73.7,25,73.3,24.7"></path>
                                            <path class="st0" d="M68,29.8c-0.3-0.3-0.5-0.8-0.5-1.3s0.2-0.9,0.5-1.3c0.7-0.7,1.9-0.7,2.6,0c0.3,0.3,0.5,0.8,0.5,1.3
			s-0.2,0.9-0.5,1.3c-0.4,0.4-0.8,0.5-1.3,0.5S68.3,30.1,68,29.8"></path>
                                            <path class="st0" d="M62.9,34.9c-0.4-0.3-0.6-0.8-0.6-1.3s0.2-0.9,0.6-1.3c0.8-0.7,2-0.7,2.8,0c0.4,0.3,0.6,0.8,0.6,1.3
			s-0.2,1-0.6,1.3c-0.4,0.4-0.9,0.5-1.4,0.5S63.3,35.3,62.9,34.9"></path>
                                            <path class="st0" d="M58,40c-0.4-0.3-0.5-0.8-0.5-1.3s0.2-0.9,0.5-1.3c0.7-0.7,1.9-0.7,2.6,0c0.4,0.3,0.5,0.8,0.5,1.3
			s-0.2,1-0.5,1.3c-0.3,0.4-0.8,0.5-1.3,0.5C58.8,40.6,58.3,40.4,58,40"></path>
                                            <path class="st0" d="M52.1,43.8c0-0.5,0.2-0.9,0.5-1.3c0.7-0.7,1.9-0.7,2.6,0c0.4,0.4,0.5,0.8,0.5,1.3s-0.2,0.9-0.5,1.3
			c-0.3,0.3-0.8,0.5-1.3,0.5s-0.9-0.2-1.3-0.5C52.3,44.8,52.1,44.3,52.1,43.8z"></path>
                                            <path class="st0" d="M42.6,55.1c-0.3-0.3-0.5-0.8-0.5-1.3s0.2-0.9,0.5-1.3c0.7-0.7,1.9-0.7,2.6,0c0.4,0.4,0.5,0.8,0.5,1.3
			s-0.2,0.9-0.5,1.3c-0.3,0.4-0.8,0.5-1.3,0.5C43.4,55.7,43,55.5,42.6,55.1"></path>
                                            <path class="st0" d="M37.3,60.2c-0.4-0.3-0.6-0.8-0.6-1.3s0.2-0.9,0.6-1.3c0.8-0.7,2-0.7,2.8,0c0.4,0.4,0.6,0.8,0.6,1.3
			s-0.2,0.9-0.6,1.3c-0.4,0.4-0.9,0.5-1.4,0.5C38.2,60.8,37.7,60.6,37.3,60.2"></path>
                                            <path class="st0" d="M32.4,65.4c-0.3-0.3-0.5-0.8-0.5-1.3c0-0.5,0.2-1,0.5-1.3c0.7-0.7,1.9-0.7,2.6,0c0.3,0.3,0.5,0.8,0.5,1.3
			c0,0.5-0.2,0.9-0.5,1.3c-0.4,0.4-0.8,0.5-1.3,0.5S32.8,65.7,32.4,65.4"></path>
                                            <path class="st0" d="M27.3,70.5c-0.4-0.3-0.5-0.8-0.5-1.3s0.2-0.9,0.5-1.3c0.7-0.7,1.9-0.7,2.6,0c0.3,0.4,0.5,0.8,0.5,1.3
			s-0.2,1-0.5,1.3c-0.4,0.4-0.8,0.5-1.3,0.5S27.6,70.9,27.3,70.5"></path>
                                            <path class="st0" d="M22,75.6c-0.4-0.3-0.6-0.8-0.6-1.3s0.2-0.9,0.6-1.3c0.8-0.7,2-0.7,2.7,0c0.4,0.4,0.6,0.8,0.6,1.3
			s-0.2,1-0.6,1.3c-0.4,0.3-0.9,0.5-1.4,0.5S22.3,76,22,75.6"></path>
                                            <path class="st0" d="M17,80.7c-0.4-0.4-0.5-0.8-0.5-1.3s0.2-0.9,0.5-1.3c0.7-0.7,1.9-0.7,2.6,0c0.4,0.4,0.5,0.8,0.5,1.3
			s-0.2,0.9-0.5,1.3c-0.3,0.3-0.8,0.5-1.3,0.5C17.9,81.3,17.4,81.1,17,80.7"></path>
                                            <path class="st0" d="M19.6,19.5c0.3-0.4,0.5-0.8,0.5-1.3s-0.2-0.9-0.5-1.3c-0.7-0.7-1.9-0.7-2.6,0c-0.4,0.4-0.5,0.8-0.5,1.3
			s0.2,0.9,0.5,1.3c0.3,0.3,0.8,0.5,1.3,0.5C18.8,20.1,19.3,19.9,19.6,19.5"></path>
                                            <path class="st0" d="M24.7,24.7c0.4-0.4,0.6-0.8,0.6-1.3s-0.2-0.9-0.6-1.3c-0.8-0.7-2-0.7-2.8,0c-0.4,0.4-0.6,0.8-0.6,1.3
			s0.2,0.9,0.6,1.3c0.4,0.3,0.9,0.5,1.4,0.5S24.3,25,24.7,24.7"></path>
                                            <path class="st0" d="M29.9,29.8c0.3-0.3,0.5-0.8,0.5-1.3s-0.2-0.9-0.5-1.3c-0.7-0.7-1.9-0.7-2.6,0c-0.3,0.3-0.5,0.8-0.5,1.3
			s0.2,0.9,0.5,1.3c0.4,0.4,0.8,0.5,1.3,0.5C29,30.3,29.5,30.1,29.9,29.8"></path>
                                            <path class="st0" d="M35,34.9c0.3-0.3,0.5-0.8,0.5-1.3s-0.2-0.9-0.5-1.3c-0.7-0.7-1.9-0.7-2.6,0c-0.3,0.3-0.5,0.8-0.5,1.3
			s0.2,1,0.5,1.3c0.4,0.4,0.8,0.5,1.3,0.5C34.1,35.4,34.6,35.3,35,34.9"></path>
                                            <path class="st0" d="M40,40c0.4-0.3,0.6-0.8,0.6-1.3s-0.2-0.9-0.6-1.3c-0.7-0.7-2-0.7-2.7,0c-0.4,0.3-0.6,0.8-0.6,1.3
			s0.2,1,0.6,1.3c0.4,0.4,0.9,0.5,1.4,0.5C39.2,40.6,39.7,40.4,40,40"></path>
                                            <path class="st0" d="M45.7,43.8c0-0.5-0.2-0.9-0.5-1.3c-0.7-0.7-1.9-0.7-2.6,0c-0.4,0.4-0.5,0.8-0.5,1.3s0.2,0.9,0.5,1.3
			c0.3,0.3,0.8,0.5,1.3,0.5s0.9-0.2,1.3-0.5S45.7,44.3,45.7,43.8z"></path>
                                            <path class="st0" d="M50.3,50.3c0.4-0.4,0.5-0.8,0.5-1.3s-0.2-0.9-0.5-1.3c-0.7-0.7-1.9-0.7-2.6,0c-0.4,0.4-0.5,0.8-0.5,1.3
			s0.2,0.9,0.5,1.3c0.3,0.3,0.8,0.5,1.3,0.5S50,50.6,50.3,50.3"></path>
                                            <path class="st0" d="M55.4,55.1c0.4-0.3,0.6-0.8,0.6-1.3s-0.2-0.9-0.6-1.3c-0.8-0.7-2-0.7-2.7,0c-0.4,0.4-0.6,0.8-0.6,1.3
			s0.2,0.9,0.6,1.3c0.4,0.4,0.9,0.5,1.4,0.5C54.5,55.7,55,55.5,55.4,55.1"></path>
                                            <path class="st0" d="M60.6,60.2c0.3-0.3,0.5-0.8,0.5-1.3s-0.2-0.9-0.5-1.3c-0.7-0.7-1.9-0.7-2.6,0c-0.3,0.4-0.5,0.8-0.5,1.3
			s0.2,0.9,0.5,1.3c0.4,0.4,0.8,0.5,1.3,0.5C59.7,60.8,60.2,60.6,60.6,60.2"></path>
                                            <path class="st0" d="M65.7,65.4c0.3-0.3,0.5-0.8,0.5-1.3c0-0.5-0.2-1-0.5-1.3c-0.7-0.7-1.9-0.7-2.6,0c-0.3,0.3-0.5,0.8-0.5,1.3
			c0,0.5,0.2,0.9,0.5,1.3c0.4,0.4,0.8,0.5,1.3,0.5C64.9,65.9,65.3,65.7,65.7,65.4"></path>
                                            <path class="st0" d="M70.5,70.5c0.4-0.3,0.5-0.8,0.5-1.3s-0.2-0.9-0.5-1.3c-0.7-0.7-1.9-0.7-2.6,0c-0.3,0.4-0.5,0.8-0.5,1.3
			s0.2,1,0.5,1.3c0.4,0.4,0.8,0.5,1.3,0.5S70.2,70.9,70.5,70.5"></path>
                                            <path class="st0" d="M75.9,75.6c0.4-0.3,0.5-0.8,0.5-1.3s-0.2-0.9-0.5-1.3c-0.7-0.7-1.9-0.7-2.6,0c-0.4,0.4-0.5,0.8-0.5,1.3
			s0.2,1,0.5,1.3c0.3,0.3,0.8,0.5,1.3,0.5S75.6,76,75.9,75.6"></path>
                                            <path class="st0" d="M81,80.7c0.4-0.4,0.6-0.8,0.6-1.3s-0.2-0.9-0.6-1.3c-0.8-0.7-2-0.7-2.7,0c-0.4,0.4-0.6,0.8-0.6,1.3
			s0.2,0.9,0.6,1.3c0.4,0.3,0.9,0.5,1.4,0.5C80.1,81.3,80.6,81.1,81,80.7"></path>
                                            <path id="Fill-9_1_" class="st0" d="M31.7,20.9c5.2-3.4,10.9-5,17.2-5.1c6.2,0,11.9,1.7,17.2,5.1l11-11
			c-8.6-6.5-17.9-9.8-28.2-9.8S29.2,3.4,20.8,9.9L31.7,20.9z"></path>
                                            <path id="Fill-10_1_" class="st0" d="M20.7,66c-3.5-5.3-5.2-11-5.2-17.1c0-6.2,1.7-11.9,5.2-17.1L9.8,20.9
			C3.4,29.3,0.2,38.6,0.2,49c0,10.2,3.2,19.6,9.7,28.1L20.7,66z"></path>
                                            <path id="Fill-11_1_" class="st0" d="M66.1,76.9c-5.2,3.5-10.9,5.3-17.1,5.4c-6.3,0-12.1-1.7-17.3-5.3l-11,10.9
			c8.5,6.6,17.9,9.9,28.3,9.8c10.3-0.1,19.6-3.4,28-9.8L66.1,76.9z"></path>
                                            <path id="Fill-12_1_" class="st0" d="M76.8,31.7c3.5,5.3,5.3,11.1,5.2,17.4c-0.1,6.1-1.8,11.7-5.2,16.8l11,10.9
			c6.5-8.4,9.8-17.7,9.8-27.9c0.1-10.4-3.2-19.8-9.8-28.3L76.8,31.7z"></path>
                                            <path id="Fill-15_1_" class="st0" d="M88.3,80.3c4.2,0,7.7,3.4,7.7,7.7c0,4.2-3.4,7.7-7.7,7.7c-4.2,0-7.7-3.4-7.7-7.7
			S84,80.3,88.3,80.3"></path>
                                            <path id="Fill-16_1_" class="st0"
                                                  d="M9.7,80.3c4.2,0,7.6,3.4,7.6,7.7c0,4.2-3.4,7.7-7.6,7.7S2.1,92.3,2.1,88S5.5,80.3,9.7,80.3"></path>
                                            <path id="Fill-17_1_" class="st0" d="M88.4,1.8c4.2,0,7.6,3.4,7.6,7.7s-3.4,7.7-7.6,7.7c-4.2,0-7.6-3.4-7.6-7.7S84.2,1.8,88.4,1.8
			"></path>
                                            <path id="Fill-18_1_" class="st0" d="M9.6,1.8c4.2,0,7.7,3.4,7.7,7.6S13.9,17,9.6,17c-4.2,0-7.7-3.4-7.7-7.6
			C1.9,5.2,5.3,1.8,9.6,1.8"></path>
                                        </g>
                                        <path id="elrond_3_" d="M154.5,63.4l-3.8-3.4c-2.3,2.7-6.9,4.3-10.8,4.3c-6.5,0-11.7-3.9-12.3-10.2h28.8c1.3-13.5-6.6-19.9-17-19.9
		c-10.2,0-17.6,7.3-17.6,17.6c0,10.8,7.3,17.7,17.9,17.7C145.1,69.4,151,67.4,154.5,63.4L154.5,63.4z M151.2,49.3h-23.5
		c1-6.5,6.1-10.1,12-10.1c6.6,0,11.1,3.5,11.5,9.9V49.3L151.2,49.3z M170.4,20.7h-5.6v48.1h5.6V20.7z M186.3,34.9h-5.2v33.9h5.6
		V49.9c0-6.2,4.5-10.1,10-10.2c2.3,0,4.1,0.6,5.9,1.9l2.5-4.8c-2.1-1.6-4.9-2.6-7.9-2.5c-3.9,0-8.1,1.2-10.4,5.6L186.3,34.9
		L186.3,34.9z M208.3,51.9c0,10.3,7.4,17.5,17.6,17.5s17.6-7.2,17.6-17.5c0-10.5-7.3-17.8-17.6-17.8
		C215.8,34.1,208.3,41.4,208.3,51.9z M237.9,51.9c-0.1,7.1-5.1,12.2-12.1,12.2c-6.9,0-11.9-5.1-11.9-12.2c0-7.6,5.1-12.6,12-12.6
		C232.7,39.3,237.9,44.4,237.9,51.9z M251.6,34.8v34h5.6V50.6c0-6.1,4.3-11,10.4-11.1c6.5,0,10.3,4.1,10.3,10.6v18.7h5.6V50.1
		c0-10-6.3-15.7-14.9-15.7c-4.5,0-8.7,1.9-11.6,5.9l-0.3-5.4L251.6,34.8L251.6,34.8z M326.6,20.7H321V41c-2.4-4.6-7.9-6.8-12.7-6.8
		c-9.6,0-17.1,6.2-17.1,17.6c0,11.2,7.5,17.6,17.2,17.6c5,0,10-2.2,12.7-6.9l0.3,6.2h5.3L326.6,20.7L326.6,20.7z M308.8,39.5
		c6.7,0,12,5,12,12.2c0,7.4-5.3,12.4-12,12.4c-6.6,0-11.9-4.5-11.9-12.3c0-7.9,5.2-12.2,11.7-12.3H308.8L308.8,39.5z"></path>
                                    </g>
                        </svg>
                            </a>
                            <div class="collapse" id="collapseElrond">
                                <ul>
                                    <li>
                                        xxx-xxx-xxx-xxx
                                    </li>
                                </ul>
                            </div>

                            <a data-bs-toggle="collapse" href="#collapseEthereum" role="button" aria-expanded="false"
                               aria-controls="collapseEthereum" class="btn btn-link my-3 d-none"
                               aria-labelledby="Ethereum"
                               title="Ethereum">
                                <img style="height: 40px" aria-hidden="true" data-placeholder-image="" decoding="async"
                                     src="data:image/png;base64,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"
                                     alt="" style="opacity: 0; transition: opacity 500ms linear 0s; object-fit: cover;">
                                <span class="text-dark fs-3">Ethereum</span>
                            </a>
                            <div class="collapse" id="collapseEthereum">
                                <ul>
                                    <li>
                                        xxx-xxx-xxx-xxx
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endif
