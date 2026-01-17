<?php

return [
    'image'                                   => 'Image',
    'title'                                   => 'Title',
    'description'                             => 'Description',
    'icon'                                    => 'Icon  exemple: <i class="bi bi-discord"></i>',
    'name'                                    => 'Name',
    'animation'                               => 'Animation',
    'easing'                                  => 'Easing',
    'duration'                                => 'Duration (ms)',
    'offset'                                  => 'Offset',
    'placement'                               => 'Placement',
    'link'                                    => 'Link',
    'styles'                                  => 'Styles',
    'fontawesome'                             => 'To get the icons please use the',
    'gradient_background_color_continue'      => 'Height of the background color continuity',
    'gradient_background_color_transparency'  => 'Transparency after the continuity of the color',
    'backgroundSlider'   => [
        'ipServer'   => [
            'item' => [
                'title'       => 'Interface Ip-sever',
                'info'        => '<span>Allows to display your ip on the site.</span>',
                'label'       => [
                    'ip'            => 'IP server',
                    'mediaIp'       => 'Image right',
                    'position'      => 'Position ↕',
                    'mediaServeOn'  => 'Image server online',
                    'mediaServeOff' => 'Image server offline',
                    'hidden'        => 'Do not display',
                ],
                'placeholder' => [
                    'ip' => '127.0.0.1',
                ],
            ],

        ],
        'download'   => [
            'item' => [
                'title'       => 'Interface download',
                'info'        => '<span>Allows to add a download button if you have a launcher.</span>',
                'label'       => [
                    'name'     => 'Name',
                    'url'      => 'Link',
                    'position' => 'Position ↕',
                    'hidden'   => 'Do not display',
                ],
                'placeholder' => [
                    'name' => 'Name',
                    'url'  => 'Link',
                ],
            ],
        ],
        'register'   => [
            'item' => [
                'title'       => 'Interface registered members / discord',
                'info'        => '<span>Allows to display the number of people registered on the site or your discord.</span>',
                'label'       => [
                    'hidden'       => 'Do not display',
                    'style'        => 'Choice between Registration or Discord',
                    'textRegister' => 'Registered text',
                    'textDiscord'  => 'Discord text',
                    'linkDiscord'  => 'Discord link',
                    'position'     => 'Position ↕',
                ],
                'placeholder' => [
                    'textRegister' => 'Registered Members',
                    'textDiscord'  => 'My discord',
                    'linkDiscord'  => 'https://discord.com/invite/wmYrG2c',
                ],
            ],
        ],
        'background' => [
            'item' => [
                'title' => 'Interface Background ',
                'label' => [
                    'background' => 'Background',
                    'height'     => 'Height image',
                    'position'   => 'Position ↕',
                ],
            ],

        ],
    ],
    'backgroundServerIp' => [
        'ipServer'   => [
            'item' => [
                'title'       => 'Interface Ip-server',
                'info'        => '<span>Allows to display your ip on the site.</span>',
                'label'       => [
                    'ip'            => 'IP server',
                    'mediaIp'       => 'Image right',
                    'mediaServeOn'  => 'Image server online',
                    'mediaServeOff' => 'Image server offline',
                    'position'      => 'Position ↕',
                    'hidden'        => 'Do not display',
                ],
                'placeholder' => [
                    'ip' => '127.0.0.1',
                ],
            ],

        ],
        'download'   => [
            'item' => [
                'title'       => 'Interface download',
                'info'        => '<span>Allows to add a download button if you have a launcher.</span>',
                'label'       => [
                    'name'     => 'Name',
                    'url'      => 'Link',
                    'position' => 'Position ↕',
                    'hidden'   => 'Do not display',
                ],
                'placeholder' => [
                    'name' => 'Name',
                    'url'  => 'Link',
                ],
            ],
        ],
        'register'   => [
            'item' => [
                'title'       => 'Interface register',
                'info'        => '<span>Allows to display the number of people registered on the site.</span>',
                'label'       => [
                    'hidden'       => 'Do not display',
                    'style'        => 'Choice between Registration or Discord',
                    'textRegister' => 'Registered text',
                    'textDiscord'  => 'Discord text',
                    'linkDiscord'  => 'Discord link',
                    'discord_key'  => 'Discord Key',
                    'position'     => 'Position ↕',
                ],
                'placeholder' => [
                    'textRegister' => 'Registered Members',
                    'textDiscord'  => 'My discord',
                    'linkDiscord'  => 'https://discord.com/invite/wmYrG2c',
                    'discord_key'  => '684097488164225073',
                ]
            ],
        ],
        'background' => [
            'item' => [
                'title' => 'Interface Background ',
                'label' => [
                    'background' => 'Background',
                    'position'   => 'Position ↕',
                    'height'     => 'Height image',
                ],
            ],

        ],
    ],
    'backgroundLogo'     => [
        'ipServer'   => [
            'item' => [
                'title'       => 'Interface ip-server',
                'info'        => '<span>Allows to display your ip on the site.</span>',
                'label'       => [
                    'ip'            => 'IP server',
                    'mediaIp'       => 'Image right',
                    'mediaServeOn'  => 'Image server online',
                    'mediaServeOff' => 'Image server offline',
                    'position'      => 'Position ↕',
                    'hidden'        => 'Do not display',
                ],
                'placeholder' => [
                    'ip' => '127.0.0.1',
                ],
            ],
        ],
        'logo'       => [
            'item' => [
                'title'       => 'Interface Logo',
                'info'        => '',
                'label'       => [
                    'media'    => 'Logo',
                    'position' => 'Position ↕',
                    'hidden'   => 'Do not display',
                    'animation'   => 'Disable animate',
                ],
                'placeholder' => [
                    'name' => 'Name',
                    'url'  => 'Link',
                ],
            ],
        ],
        'register'   => [
            'item' => [
                'title'       => 'Interface registered members / discord',
                'info'        => '<span>Allows to display the number of people registered on the site or your discord.</span>',
                'label'       => [
                    'hidden'       => 'Do not display',
                    'style'        => 'Choice between Registration or Discord',
                    'textRegister' => 'Registered text',
                    'textDiscord'  => 'Discord text',
                    'linkDiscord'  => 'Discord link',
                    'discord_key'  => 'Discord Key',
                    'position'     => 'Position ↕',
                ],
                'placeholder' => [
                    'textRegister' => 'Registered Members',
                    'textDiscord'  => 'My discord',
                    'linkDiscord'  => 'https://discord.com/invite/wmYrG2c',
                    'discord_key'  => '684097488164225073',
                ]
            ],
        ],
        'background' => [
            'item' => [
                'title' => 'Interface Background ',
                'label' => [
                    'background' => 'Background',
                    'position'   => 'Position ↕',
                    'height'     => 'Height image',
                ],
            ],

        ],
    ],
    'background'         => [
        'background' => [
            'item' => [
                'title' => 'Interface Background ',
                'label' => [
                    'background' => 'Background',
                    'position'   => 'Position ↕',
                    'height'     => 'Height image',
                ],
            ],

        ],
    ],
];
