<?php

return [
    'default' => 'Par défaut',
    'config' => [
        'info' => '<h4 class="mb-3">Documentation du thème <a href="https://linedev.gitbook.io/rainbow/" target="_blank">Rainbow</a></h4>
<small class="d-block pl-3">Ce thème va vous proposer un maximum de configurations possibles pour vous permettre de rendre votre site unique.</small>
            <small class="d-block mb-2 pl-3">Si vous ne comprenez pas, n\'hésitez pas à me contacter <a href="https://discord.gg/wmYrG2c" target="_blank">Latshow#4681</a> et à m\'aider à améliorer le thème.</small>
            <small class="d-block font-weight-bold pl-3">Détail de chaque animation: <a href="https://michalsnik.github.io/aos/" target="_blank">AOS</a></small>
                <br> <button type="button" class="btn btn-primary  text-uppercase fw-bold rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#donationModal"><i class="bi bi-heart-fill me-1"></i>Donation</button>
        <br>
           <a href="https://www.serveurliste.com" target="_blank" class="btn btn-warning fw-bold rounded-4 my-3 text-uppercase px-3"><i class="bi bi-search me-1"></i>Listez vos serveurs sur serveurliste.com</a>',
        'donation' => 'Ce bouton donation a été créé pour toutes les personnes me demandant "comment faire un don ?". <br> Je remercie d\'avance tous ceux qui ont décidé de me soutenir à travers cette donation. Sachez qu\'elles me permettront d\'acheter mes capsules de café que je m\'injecte pour vous proposer toujours de nouvelles fonctionnalités.',
        'info-eye' => '
    <div class="small my-2 pl-3">
        <span class="mr-2"><i class="bi bi-exclamation-circle color-primary"></i></span><span>Si vous cliquez sur l\'eye et ça vous redirige sur une page 404, c\'est que votre contenue n\'existe pas pour le moment il vous reste juste à le créer pour faire la configuration puis le supprimer.</span>
    </div>',
        'last-config' => '
    <div class="small text-danger font-weight-bold my-2">
        <span class="mr-2"><i class="bi bi-exclamation-circle"></i></span><span>Ceci est un ancien composant du thème de la version 1.5.<br>Il est conseillé de le supprimer et d\'utiliser le nouveau système de création de contenu pour bénéficier de toutes les fonctionnalités possibles.</span>
    </div>'
    ],
    'site' => [
        'register' => 'inscrits sur notre site',
        'memberRegister' => 'Membres Inscrits',
        'discord' => [
            'join' => 'Rejoindre',
            'online' => 'en ligne'
        ],
    ],
    'show_more' => 'Voir plus',
    'image' => 'Image',
    'title' => 'Titre',
    'number' => 'Nombre',
    'description' => 'Description',
    'icon' => 'Icon  exemple: <i class="bi bi-discord"></i>',
    'name' => 'Nom',
    'target' => 'Nouvel onglet',
    'animation' => 'Animation',
    'easing' => 'L\'assouplissement',
    'duration' => 'Durée (ms)',
    'offset' => 'Décalage',
    'placement' => 'Placement',
    'link' => 'Lien',
    'fontawesome' => 'Pour obtenir les icones veuillez utiliser les classes de',
    'styles' => 'Styles',
    'alignment-h' => 'Alignement ⇆',
    'textAlignement' => [
        'start' => 'Début',
        'center' => 'Centrer',
        'end' => 'Fin',
    ],
    'plugin' => [
        'requires' => 'Nécessite ce plugin'
    ],
    'cursor' => [
        'title' => 'Cursor',
        'media' => [
            'info' => 'Image maximum 32px x 32px',
            'label' => 'Image du cursor général',
        ],
        'media_link' => [
            'label' => 'Image du cursor pour les liens',
        ],
    ],
    'menus' => [
        'articles' => [
            'index' => 'Les articles',
            'show' => 'L\'article',
        ],
        'forum' => [
            'index' => 'Forum',
            'forum_breadcrumb' => 'Breadcrumb',
            'forum_message' => 'Message',
            'forum_stati' => 'Statistique',
            'show' => 'Le forum',
            'profile_edit' => 'Modifier l\'utilisateur',
            'profile_show' => 'L\'utilisateur',
            'discussions_posts_edit' => 'Modifier post',
            'discussions_create' => 'Creation discussions',
            'discussions_edit' => 'Modification discussions',
            'discussions_show' => 'La discussions',
        ],
        'flyff' => [
            'flyff_accounts' => 'Compte',
            'flyff_resetPassword' => 'Modification mots de passe',
            'flyff_guilds' => 'Guilds',
            'flyff_guildsShow' => 'Guild',
            'flyff_guildSiege' => 'Guild Siege',
            'flyff_guildSiegeShow' => 'Guild Siege Show',
            'flyff_characters' => 'Personnages',
            'flyff_characterShow' => 'Personnage',
        ],
        'identification' => [
            'f2a' => 'F2a',
            'passwordReset' => 'Réinitialiser mot de passe (Reset)',
            'passwordEmail' => 'Réinitialiser mot de passe (Email)',
            'passwordConfirm' => 'Réinitialiser mot de passe (Confirm)',
            'account' => 'Mon profil',
            'accountF2a' => 'Mon profil F2a',
            'error' => 'Erreur',
            'maintenance' => 'Maintenance',
        ],
        'jirai' => [
            'index' => 'Jirai',
            'jirai_suggestions' => 'Suggestions',
            'jirai_bugs' => 'Bugs',
            'jirai_changelogs' => 'Changelogs',
            'changelogs_create' => 'Crée changelog',
            'changelogs_edit' => 'Modifier changelog',
            'changelogs_show' => 'Le changelog',
            'issues_create' => 'Crée (Bug/Suggestion)',
            'issues_edit' => 'Modifier (Bug/Suggestion)',
            'issues_show' => 'Le (Bug/Suggestion)',
            'messages_edit' => 'Modifier message',
        ],
        'shop' => [
            'index' => 'Boutique',
            'shop_filter' => 'Filter',
            'shop_profil' => 'Profile',
            'cart' => 'Panier',
            'shop_coupons' => 'Coupons',
            'shop_add_coupons' => 'Ajouter coupons',
            'offre_select' => 'Moyens de paiements',
            'offre_buy' => 'Offres des moyens de paiements',
            'payments' => 'Paiments',
            'my_achats' => 'Mes achats',
        ],
        'support' => [
            'index' => 'Support',
            'show' => 'Un ticket',
            'create' => 'Creation ticket',
        ],
        'wiki' => [
            'index' => 'Wiki',
            'show' => 'Le wiki',
        ]
    ],
    'meta' => [
        'title' => 'Meta',
        'color' => [
            'info' => 'Qu’est-ce que le <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta/name/theme-color" title="Theme-color" target="_blank">theme-color</a> ?',
            'label' => 'theme-color: ',
        ],
    ],
    'panel' => [
        'button' => [
            'addBackground' => 'Ajouter un background',
            'addBlock' => 'Ajouter un block',
            'addSection' => 'Ajouter une section',
        ],
        'label' => [
            'size' => 'taille',
        ],
    ],
    'modal' => [
        'block' => 'Block',
        'background' => 'Background Top',
        'section' => 'Section',
        'utility' => 'Utilitaire',
        'plugin' => 'Plugin',
        'social_networks' => 'Réseaux sociaux',
        'other' => 'Autre',
    ],
    'general' => [
        'style' => 'Style global du thème',
    ],
    'identification' => [
        'title' => 'Identification',
    ],
    'gallery' => [
        'title' => 'Plugin Gallery',
    ],
    'flyff' => [
        'title' => 'Plugin Flyff',
    ],
    'advancedBan' => [
        'title' => 'Plugin AdvancedBan',
        'banner' => [
            'advancedBan' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière advancedBan',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'advancedBan' => [
                'title' => 'Interface advancedBan',
            ],
        ]
    ],
    'articles' => [
        'title' => 'Article(s)',
        'banner' => [
            'article' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière article',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'allArticle' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière des articles',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'article' => [
                'title' => 'Interface article',
                'label' => [
                    'comment-hidden' => 'Ne pas afficher les commentaires dans les articles',
                    'follow-hidden' => 'Ne pas afficher les j\'aime dans les articles',
                ],
            ],
            'allArticle' => [
                'title' => 'Interface des articles',
            ],
        ]
    ],
    'changelog' => [
        'title' => 'Plugin Changelog',
        'banner' => [
            'changelog' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière changelog',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'changelog' => [
                'title' => 'Interface changelog',
            ],
        ]
    ],
    'coinFlip' => [
        'title' => 'Plugin Coinflip',
    ],
    'cps' => [
        'title' => 'Plugin CPS',
        'banner' => [
            'cps' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière CPS',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'cps' => [
                'title' => 'Interface CPS',
            ],
        ]
    ],
    'faq' => [
        'title' => 'Plugin FAQ',
        'banner' => [
            'faq' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière FAQ',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'faq' => [
                'title' => 'Interface FAQ',
            ],
        ]
    ],
    'footer' => [
        'title' => 'Pied de page',
        'global' => [
            'reverse' => 'Inverser le contenu'
        ],
        'socialLinks' => [
            'hidden' => 'Ne pas afficher',
        ],
        'social' => [
            'title' => 'Réseau social',
            'info' => '<span>Permet d\'ajouter vos réseaux sociaux.</span>'
        ],
        'condition' => [
            'title' => 'CGU,CGV,etc...',
            'info' => '<span>Permet d\'ajouter vos liens de CGV, CGU, Mention légale.</span>
                        <span>Pensez juste à ajouter un lien de page que vous pouvez créer ici  <a href="/admin/pages" target="_blank" title="Page">page</a></span>
                        '
        ],
        'download' => [
            'title' => 'Bouton téléchargement',
            'hidden' => 'Ne pas afficher le bouton',
            'info' => '<span>Permet d\'ajouter un bouton de téléchargement si vous avez un launcher.</span>'
        ],
        'logo' => [
            'title' => 'Logo en pied de page',
            'hidden' => 'Ne pas afficher le logo',
        ],
        'liens' => [
            'title' => 'Liens',
            'textAlignement' => 'Alignement du texte par rapport au bouton',
            'button' => 'Afficher les liens en tant que bouton',
            'buttonWidth' => 'Taille des bouttons',
            'hidden' => 'Ne pas afficher les liens',
            'info' => '<span>Permet d\'ajouter vos liens (Accueil, boutique, contact, discord) sans difficulté.</span>',
            'serveurliste' => [
                'active' => 'Ne pas afficher que votre serveur est listé sur serveurliste.com',
                'link' => 'Lien vers votre page Serveurliste. <a href="https://serveurliste.com/faq" target="_blank">Documentation</a>'
            ],
        ],
    ],
    'navigation' => [
        'title' => 'Barre de navigation',
    ],
    'forum' => [
        'title' => 'Plugin Forum',
        'banner' => [
            'forum' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière forum',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'forum-show' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière du forum',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'forum-user-edit' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière modification de l\'utilisateur',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'forum-posts-edit' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière modification du post',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'forum-discussions-create' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière creation d\'une discussion',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'forum-discussions-edit' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière modification d\'une discussion',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'forum-discussions-show' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière de la discussion',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'forum' => [
                'title' => 'Interface forum',
            ],
            'breadcrumb' => [
                'title' => 'Interface fil d\'Ariane',
            ],
            'message' => [
                'title' => 'Interface Derniers messages',
            ],
            'stati' => [
                'title' => 'Interface Stats',
            ],
            'user' => [
                'title' => 'Interface Utilisateurs en ligne',
            ],
            'forum-show' => [
                'title' => 'Interface du forum',
            ],
            'forum-user-edit' => [
                'title' => 'Interface modification de l\'utilisateur',
            ],
            'forum-posts-edit' => [
                'title' => 'Interface modification du post',
            ],
            'forum-discussions-create' => [
                'title' => 'Interface creation d\'une discussion',
            ],
            'forum-discussions-edit' => [
                'title' => 'Interface modification d\'une discussion',
            ],
            'forum-discussions-show' => [
                'title' => 'Interface de la discussion',
            ],
        ],
    ],
    'global' => [
        'title' => 'Général',
    ],
    'header' => [
        'title' => 'Entête',
        'preloader' => [
            'title' => 'Preloader',
            'hidden' => 'Ne pas afficher le preloader',
            'info' => '<span>Permet d\'afficher une page de chargement le temps que la page constitue les éléments.</span>'
        ],
        'navbar' => [
            'title' => 'Barre de navigation',
            'hiddenIcon' => 'Ne pas afficher les icones dans le haut de page',
            'hiddenText' => 'Ne pas afficher le texte de la navigation',
            'hiddenLogo' => 'Ne pas afficher le logo',
            'hiddenDiscord' => 'Ne pas afficher le bouton de connexion discord (Plugin <a href="https://market.azuriom.com/resources/62" title="Discord-auth" target="_blank">Discord-auth</a> activé)',
            'position' => 'Emplacement',
            'items_px_spacement' => 'Espacement entre chaque liens de texte (en pixel)',
            'fixed' => 'Ne plus afficher la navigation en fixe',
            'transition_dures' => 'Si la navigation est fixe la durée de transition en secondes est de:',
            'hiddenColor' => 'Afficher une couleur de fond',
            'color' => 'Couleur de fond du menu',
            'breakpoint' => 'A partire de quand j\'active la version mobile dans la barre de navigation',
            'logo' => [
                'title' => 'Logo',
                'center' => 'Avoir le logo au centre de la barre de navigation',
                'size' => 'Taille du logo'
            ],
            'info' => '<span>Permet d\'afficher texte & image ou juste image ou texte.</span>',
        ],
        'icon' => [
            'title' => 'Menu de navigation',
            "alert" => 'Pensez à mettre à jour les icones si vous modifier le Nom du lien',
            'info' => '<span>Permet d\'afficher texte & image ou juste image ou texte.</span>',
            'size' => 'Taille image',
        ]
    ],
    'home' => [
        'title' => 'Page d\'accueil',
        'items' => [
            'article' => [
                'title' => 'Interface des articles',
                'label' => [
                    'numberMax' => 'Nombre d\'article max sur la page'
                ],
                'placeholder' => [
                    'numberMax' => '3'
                ],
            ],
            'ip-server' => [
                'title' => 'Interface ip-serveur',
                'info' => '<span>Permet d\'afficher votre ip sur le site.</span>',
                'label' => [
                    'ip' => 'Votre IP de serveur',
                    'media' => 'Image à gauche',
                    'mediaServeOn' => 'Image serveur allumer',
                    'mediaServeOff' => 'Image serveur eteint',
                    'hidden' => 'Ne pas afficher',
                ],
                'placeholder' => [
                    'ip' => '127.0.0.1',
                ],

            ],
            'count-register' => [
                'title' => 'Interface membres inscrits',
                'info' => '<span>Permet d\'afficher le nombre de personne inscrite sur le site.</span>',
                'label' => [
                    'hidden' => 'Ne pas afficher',
                ],
            ],
            'download' => [
                'title' => 'Interface téléchargement',
                'info' => '<span>Permet d\'ajouter un bouton de téléchargement si vous avez un launcher.</span>',
                'label' => [
                    'name' => 'Nom',
                    'url' => 'Lien',
                    'hidden' => 'Ne pas afficher',
                ],
                'placeholder' => [
                    'name' => 'Nom',
                    'url' => 'Lien',
                ],

            ],
            'discord' => [
                'title' => 'Interface discord',
                'info' => '<span>Permet d\'afficher votre discord.</span>
                        <span>Comment trouver votre <a href="https://support.discord.com/hc/fr/articles/206346498-O%C3%B9-trouver-l-ID-de-mon-compte-utilisateur-serveur-message- target="_blank" title="ID discord">ID SERVEUR DISCORD</a></span>
                        ',
                'label' => [
                    'id' => 'ID du serveur Discord',
                    'url' => 'Lien d\'invitation',
                    'hidden' => 'Ne pas afficher',
                ],
                'placeholder' => [
                    'id' => '684097488164225073',
                    'url' => 'https://discord.com/invite/wmYrG2c',
                ],
            ],
            'login' => [
                'title' => 'Interface connexion',
                'label' => [
                    'hidden' => 'Ne pas afficher',
                ],
            ]
        ],

        'banner' => [
            'article' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière Article(s)',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'information' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière Information(s)',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'login' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière Connexion',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'particle' => [
            'title' => 'Particules',
            'hidden' => 'Ne pas afficher les particules',
            'info' => '<span>Permet d\'afficher des particules.<br><span class="text-warning">Site pour tester vos particules: <a href="https://vincentgarreau.com/particles.js/" target="_blank">particles.js</a>, les titres des champs sont identique au site de particles pour faire la simulation.</span> </span>',
            'content' => 'Emplacement',
            'style' => 'Style',
        ],
        'slider' => [
            'title' => 'Slider',
            'info' => '<span>Permet d\'afficher un slider (défillement d\'une liste de texte + image).</span>',
        ]
    ],
    'pages' => [
        'title' => 'Page(s)',
        'banner' => [
            'page' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière Pages',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'page' => [
                'title' => 'Interface Pages',
            ],
        ]
    ],
    'paysafecardmanual' => [
        'title' => 'Plugin Paysafecard Manual',
        'banner' => [
            'paysafecardmanual' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière Paysafecard Manual',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'paysafecardmanual' => [
                'title' => 'Interface Paysafecard Manual',
            ],
        ]
    ],
    'jirai' => [
        'title' => 'Plugin JIRAI',
        'banner' => [
            'changelog' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière Changelog',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ], 'bugs' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière bugs',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'suggestions' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière suggestions',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'changelogs-create' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière creation changelogs',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'changelogs-edit' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière modification changelog',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'changelogs-show' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière le changelog',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'issues-create' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière creation (bugs, suggestions)',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'issues-edit' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière modification (bugs, suggestions)',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'issues-show' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière de (bugs, suggestions)',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'messages-show' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière de(s) message(s)',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'messages-create' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière creation message',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'messages-edit' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière modification message',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'changelog' => [
                'title' => 'Interface changelog',
            ],
            'bugs' => [
                'title' => 'Interface bugs',
            ],
            'suggestions' => [
                'title' => 'Interface suggestions',
            ],
            'changelogs-create' => [
                'title' => 'Interface creation changelogs',
            ],
            'changelogs-edit' => [
                'title' => 'Interface modification changelog',
            ],
            'changelogs-show' => [
                'title' => 'Interface le changelog',
            ],
            'issues-create' => [
                'title' => 'Interface creation (bugs, suggestions)',
            ],
            'issues-edit' => [
                'title' => 'Interface modification (bugs, suggestions)',
            ],
            'issues-show' => [
                'title' => 'Interface de (bugs, suggestions)',
            ],
            'messages-show' => [
                'title' => 'Interface de(s) message(s)',
            ],
            'messages-create' => [
                'title' => 'Interface creation message',
            ],
            'messages-edit' => [
                'title' => 'Interface modification message',
            ],
        ]
    ],
    'invoicepro' => [
        'title' => 'Plugin Invoicepro',
        'items' => [
            'invoicepro' => [
                'title' => 'Interface invoicepro',
            ],
        ]
    ],
    'sliders' => [
        'title' => 'Plugin Sliders',
        'name' => 'Slider',
        'id' => 'slider',
        'background' => 'Afficher l\'image en fond',
        'reverse' => 'Inverser image - texte'
    ],
    'liteBans_navbar' => [
        'title' => 'liteBans navbar',
    ],
    'liteBans' => [
        'title' => 'Plugin LiteBans',
        'banner' => [
            'litebans' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière litebans',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'liteBans' => [
                'title' => 'Interface liteBans',
            ],
            'navbar' => [
                'title' => 'Interface Navigation',
            ],
        ]
    ],
    'project' => [
        'title' => 'Plugin Project',
    ],
    'shop' => [
        'title' => 'Plugin Shop',
        'banner' => [
            'shop' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière boutique',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'filter' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière filtre',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'cart' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière panier',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'profile' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière profil',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'coupons' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière coupons',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'addCoupons' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière ajouter un coupon',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'payment' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière Paiement',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'method-payment' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière method paiement',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'select-payment' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière selection du paiement',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'buy' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière Mes achats',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'shop' => [
                'title' => 'Interface boutique',
            ],
            'filter' => [
                'title' => 'Interface filtre',
            ],
            'cart' => [
                'title' => 'Interface panier',
            ],
            'profile' => [
                'title' => 'Interface profil',
            ],
            'coupons' => [
                'title' => 'Interface coupons',
            ],
            'addCoupons' => [
                'title' => 'Interface ajouter un coupon',
            ],
            'payment' => [
                'title' => 'Interface Paiement',
            ],
            'method-payment' => [
                'title' => 'Interface method paiement',
            ],
            'select-payment' => [
                'title' => 'Interface selection du paiement',
            ],
            'buy' => [
                'title' => 'Interface Mes achats',
            ],
        ]
    ],
    'skinApi' => [
        'title' => 'Plugin SkinApi',
        'banner' => [
            'skin' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière mon skin',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'skin' => [
                'title' => 'Interface skin',
            ],
        ]
    ],
    'spinWheel' => [
        'title' => 'Plugin Spin Wheel',
    ],
    'support' => [
        'title' => 'Plugin Support',
        'banner' => [
            'support' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière support',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'support-create' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière création du support',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'support-show' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière du support',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'support' => [
                'title' => 'Interface support',
            ],
            'support-create' => [
                'title' => 'Interface création du support',
            ],
            'support-show' => [
                'title' => 'Interface du support',
            ],
        ]
    ],

    'staff' => [
        'title' => 'Plugin Staff',
        'banner' => [
            'staff' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière Staff',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'staff' => [
                'title' => 'Interface Staff',
            ],
        ]
    ],
    'tebex' => [
        'title' => 'Plugin Tebex',
    ],
    'vote' => [
        'title' => 'Plugin Vote',
        'reward' => 'Récompenses',
        'banner' => [
            'vote' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière vote',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'vote' => [
                'title' => 'Interface vote',
                'label' => [
                    'hidden' => 'Ne pas afficher les icones des sites dans les boutons de vote',
                ],
            ],
            'podium' => [
                'title' => 'Interface podium',
                'label' => [
                    'hidden' => 'Ne pas afficher le podium',
                ],
            ],
            'classement' => [
                'title' => 'Interface classement',
            ],
            'recompenses' => [
                'title' => 'Interface recompenses',
            ],
        ],
    ],
    'wiki' => [
        'title' => 'Plugin Wiki',
        'banner' => [
            'wiki' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière wiki',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
            'wiki-show' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière du wiki',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'wiki' => [
                'title' => 'Interface wiki',
            ],
            'wiki-show' => [
                'title' => 'Interface du wiki',
                'spacePerCategory' => 'Espace entre chaque catégorie(s)',
            ],
        ],
    ],
    'login' => [
        'title' => 'Connexion',
        'banner' => [
            'login' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière connexion',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'login' => [
                'title' => 'Interface connexion',
                'label' => [
                    'hidden' => 'Ne pas afficher l\'image',
                ],
            ],
            'discord' => [
                'title' => 'Interface du discord',
                'label' => [
                    'text' => 'Texte',
                    'hidden' => 'Ne pas afficher',
                ],
                'placeholder' => [
                    'text' => 'Mon discord'
                ],
            ],
        ],
    ],
    'register' => [
        'title' => 'Inscription',
        'banner' => [
            'register' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière d\'inscription',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'register' => [
                'title' => 'Interface d\'inscription',
                'label' => [
                    'hidden' => 'Ne pas afficher l\'image',
                ],
            ],
        ],
    ],
    'passwordReset' => [
        'title' => 'Réinitialiser le mot de passe',
        'banner' => [
            'passwordReset' => [
                'info' => '<span>Permet d\'ajuster la bannière à votre guise.</span>',
                'title' => 'Bannière de réinitialiser le mot de passe',
                'hidden' => 'Ne pas afficher',
                'hidden-bg' => 'Ne pas afficher la couleur de fond derrière l\'icon'
            ],
        ],
        'items' => [
            'passwordReset' => [
                'title' => 'Interface de Réinitialiser le mot de passe',
                'label' => [
                    'hidden' => 'Ne pas afficher l\'image',
                ],
            ],
        ],
    ],

    'setting' => [
        'save' => 'Sauvegarder',
        'color' => [
            'button' => 'Bouton',
            'alert' => 'Alerte',
            'bgText' => 'Fond + Texte',
            'color' => 'Couleur',
            'bgColor' => 'Couleur de fond',
            'textColor' => 'Couleur du texte',
        ]
    ],
    'alert' => [
        'confirmButtonText' => 'Oui, je réinitialise !',
        'yes' => 'Oui',
        'cancel' => 'Fermer',
        'reset' => [
            'title' => 'Vous êtes sûr de vouloir réinitialiser les couleurs du thème ?',
            'text' => 'Vous ne pourrez pas revenir en arrière !',
            'confirm' => [
                'title' => 'Réinitialiser !',
                'text' => 'Vous avez réinitialisé les couleurs du thème',
            ],
        ],
        'save' => 'Sauvegarde des couleurs dans la configuration'

    ]
];
