<?php

return [
    'image'                                   => 'Image',
    'title'                                   => 'Titre',
    'description'                             => 'Description',
    'icon'                                    => 'Icon  exemple: <i class="bi bi-discord"></i>',
    'name'                                    => 'Nom',
    'animation'                               => 'Animation',
    'easing'                                  => 'L\'assouplissement',
    'duration'                                => 'Durée (ms)',
    'offset'                                  => 'Décalage',
    'placement'                               => 'Placement',
    'fontawesome'                             => 'Pour obtenir les icones veuillez utiliser les classes de',
    'styles'                                  => 'Styles',
    'gradient_background_color_continue'      => 'Hauteur de la continuité de la couleur de fond',
    'gradient_background_color_transparency'  => 'Transparence après la continuité de la couleur',
    'backgroundSlider'   => [
        'ipServer'   => [
            'item' => [
                'title'       => 'Interface ip-serveur',
                'info'        => '<span>Permet d\'afficher votre ip sur le site.</span>',
                'label'       => [
                    'ip'            => 'Votre IP de serveur',
                    'mediaIp'       => 'Image à gauche',
                    'mediaServeOn'  => 'Image serveur allumer',
                    'mediaServeOff' => 'Image serveur eteint',
                    'position'      => 'Position ↕',
                    'hidden'        => 'Ne pas afficher',
                ],
                'placeholder' => [
                    'ip' => '127.0.0.1',
                ],
            ],

        ],
        'download'   => [
            'item' => [
                'title'       => 'Interface téléchargement',
                'info'        => '<span>Permet d\'ajouter un bouton de téléchargement si vous avez un launcher.</span>',
                'label'       => [
                    'name'     => 'Nom',
                    'url'      => 'Lien',
                    'position' => 'Position ↕',
                    'hidden'   => 'Ne pas afficher',
                ],
                'placeholder' => [
                    'name' => 'Nom',
                    'url'  => 'Lien',
                ],
            ],
        ],
        'register'   => [
            'item' => [
                'title'       => 'Interface membres inscrits / discord',
                'info'        => '<span>Permet d\'afficher le nombre de personne inscrite sur le site.</span>',
                'label'       => [
                    'hidden'       => 'Ne pas afficher',
                    'style'        => 'Choix possible entre Inscription ou Discord',
                    'textRegister' => 'Texte inscrits',
                    'textDiscord'  => 'Text discord',
                    'position'     => 'Position ↕',
                    'linkDiscord'  => 'Lien du discord',
                ],
                'placeholder' => [
                    'textRegister' => 'Membres Inscrits',
                    'textDiscord'  => 'Mon discord',
                    'linkDiscord'  => 'https://discord.com/invite/wmYrG2c',
                ]
            ],
        ],
        'background' => [
            'item' => [
                'title' => 'Interface Image de fond ',
                'label' => [
                    'background' => 'Image de fond',
                    'position'   => 'Position ↕',
                    'height'     => 'Hauteur de l\'image',
                ],
            ],

        ],
    ],
    'backgroundServerIp' => [
        'ipServer'   => [
            'item' => [
                'title'       => 'Interface ip-serveur',
                'info'        => '<span>Permet d\'afficher votre ip sur le site.</span>',
                'label'       => [
                    'ip'            => 'Votre IP de serveur',
                    'mediaIp'       => 'Image à gauche',
                    'mediaServeOn'  => 'Image serveur allumer',
                    'mediaServeOff' => 'Image serveur eteint',
                    'position'      => 'Position ↕',
                    'hidden'        => 'Ne pas afficher',
                ],
                'placeholder' => [
                    'ip' => '127.0.0.1',
                ],
            ],

        ],
        'download'   => [
            'item' => [
                'title'       => 'Interface téléchargement',
                'info'        => '<span>Permet d\'ajouter un bouton de téléchargement si vous avez un launcher.</span>',
                'label'       => [
                    'name'     => 'Nom',
                    'url'      => 'Lien',
                    'position' => 'Position ↕',
                    'hidden'   => 'Ne pas afficher',
                ],
                'placeholder' => [
                    'name' => 'Nom',
                    'url'  => 'Lien',
                ],
            ],
        ],
        'register'   => [
            'item' => [
                'title'       => 'Interface membres inscrits / discord',
                'info'        => '<span>Permet d\'afficher le nombre de personne inscrite sur le site ou votre discord.</span>',
                'label'       => [
                    'hidden'       => 'Ne pas afficher',
                    'style'        => 'Choix possible entre Inscription ou Discord',
                    'textRegister' => 'Texte inscrits',
                    'textDiscord'  => 'Text discord',
                    'linkDiscord'  => 'Lien du discord',
                    'discord_key'  => 'ID du serveur Discord',
                    'position'     => 'Position ↕',
                ],
                'placeholder' => [
                    'textRegister' => 'Membres Inscrits',
                    'textDiscord'  => 'Mon discord',
                    'linkDiscord'  => 'https://discord.com/invite/wmYrG2c',
                    'discord_key'  => '684097488164225073',
                ]
            ],
        ],
        'background' => [
            'item' => [
                'title' => 'Interface Image de fond ',
                'label' => [
                    'background' => 'Image de fond',
                    'height'     => 'Hauteur de l\'image',
                ],
            ],

        ],
    ],
    'backgroundLogo'     => [
        'ipServer'   => [
            'item' => [
                'title'       => 'Interface ip-serveur',
                'info'        => '<span>Permet d\'afficher votre ip sur le site.</span>',
                'label'       => [
                    'ip'            => 'Votre IP de serveur',
                    'mediaIp'       => 'Image à gauche',
                    'mediaServeOn'  => 'Image serveur allumer',
                    'mediaServeOff' => 'Image serveur eteint',
                    'position'      => 'Position ↕',
                    'hidden'        => 'Ne pas afficher',
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
                    'hidden'   => 'Ne pas afficher',
                    'animation'   => 'Désactiver l\'animation',
                ],
                'placeholder' => [
                    'name' => 'Nom',
                    'url'  => 'Lien',
                ],
            ],
        ],
        'register'   => [
            'item' => [
                'title'       => 'Interface membres inscrits',
                'info'        => '<span>Permet d\'afficher le nombre de personne inscrite sur le site ou votre discord.</span>',
                'label'       => [
                    'hidden'       => 'Ne pas afficher',
                    'style'        => 'Choix possible entre Inscription ou Discord',
                    'textRegister' => 'Texte inscrits',
                    'textDiscord'  => 'Text discord',
                    'linkDiscord'  => 'Lien du discord',
                    'discord_key'  => 'ID du serveur Discord',
                    'position'     => 'Position ↕',
                ],
                'placeholder' => [
                    'textRegister' => 'Membres Inscrits',
                    'textDiscord'  => 'Mon discord',
                    'linkDiscord'  => 'https://discord.com/invite/wmYrG2c',
                    'discord_key'  => '684097488164225073',
                ]
            ],
        ],
        'background' => [
            'item' => [
                'title' => 'Interface Image de fond ',
                'label' => [
                    'background' => 'Image de fond',
                    'position'   => 'Position ↕',
                    'height'     => 'Hauteur de l\'image',
                ],
            ],

        ],
    ],
    'background'         => [
        'background' => [
            'item' => [
                'title' => 'Interface Image de fond ',
                'label' => [
                    'background' => 'Image de fond',
                    'position'   => 'Position ↕',
                    'height'     => 'Hauteur de l\'image',
                ],
            ],

        ],
    ],
];
