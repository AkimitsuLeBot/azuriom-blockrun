<?php

return [
    'image'                                   => 'Зображення',
    'title'                                   => 'Заголовок',
    'description'                             => 'Опис',
    'icon'                                    => 'Приклад значка: <i class="bi bi-discord"></i>',
    'name'                                    => 'Назва',
    'animation'                               => 'Анімація',
    'easing'                                  => 'Спрощення',
    'duration'                                => 'Тривалість (мс)',
    'offset'                                  => 'Зміщення',
    'placement'                               => 'Розташування',
    'link'                                    => 'Посилання',
    'styles'                                  => 'Стилі',
    'fontawesome'                             => 'Щоб отримати значки, використовуйте',
    'gradient_background_color_continue'      => 'Висота безперервності кольору фону',
    'gradient_background_color_transparency'  => 'Прозорість після безперервності кольору',
    'backgroundSlider'   => [
        'ipServer'   => [
            'item' => [
                'title'       => 'Інтерфейс IP-серверу',
                'info'        => '<span>Дозволяє відображати адресу серверу на сайті.</span>',
                'label'       => [
                    'ip'            => 'IP серверу',
                    'mediaIp'       => 'Зображення справа',
                    'position'      => 'Позиція ↕',
                    'mediaServeOn'  => 'Зображення серверу в онлайн',
                    'mediaServeOff' => 'Зображення серверу в офлайн',
                    'hidden'        => 'Не відображати',
                ],
                'placeholder' => [
                    'ip' => '127.0.0.1',
                ],
            ],

        ],
        'download'   => [
            'item' => [
                'title'       => 'Інтерфейс кнопки завантаження',
                'info'        => '<span>Дозволяє додати кнопку завантаження, якщо ви маєте лаунчер.</span>',
                'label'       => [
                    'name'     => 'Назва',
                    'url'      => 'Посилання',
                    'position' => 'Позиція ↕',
                    'hidden'   => 'Не відображати',
                ],
                'placeholder' => [
                    'name' => 'Назва',
                    'url'  => 'Посилання',
                ],
            ],
        ],
        'register'   => [
            'item' => [
                'title'       => 'Інтерфейс зареєстрованих користувачів / Discord',
                'info'        => '<span>Дозволяє відображати число користувачів, що зареєстровані на сайті чи в Discord.</span>',
                'label'       => [
                    'hidden'       => 'Не відображати',
                    'style'        => 'Вибір між реєстрацією та Discord',
                    'textRegister' => 'Текст: Реєстрація',
                    'textDiscord'  => 'Текст: Discord',
                    'linkDiscord'  => 'Посилання на сервер у Discord',
                    'position'     => 'Позиція ↕',
                ],
                'placeholder' => [
                    'textRegister' => 'Зареєстровані користувачі',
                    'textDiscord'  => 'Сервер у Discord',
                    'linkDiscord'  => 'https://discord.com/invite/wmYrG2c',
                ],
            ],
        ],
        'background' => [
            'item' => [
                'title' => 'Інтерфейс фону ',
                'label' => [
                    'background' => 'Фон',
                    'height'     => 'Висота зображення',
                    'position'   => 'Позиція ↕',
                ],
            ],

        ],
    ],
    'backgroundServerIp' => [
        'ipServer'   => [
            'item' => [
                'title'       => 'Інтерфейс IP-серверу',
                'info'        => '<span>Дозволяє відображати адресу серверу на сайті.</span>',
                'label'       => [
                    'ip'            => 'IP серверу',
                    'mediaIp'       => 'Зображення справа',
                    'mediaServeOn'  => 'Зображення серверу в онлайн',
                    'mediaServeOff' => 'Зображення серверу в офлайн',
                    'position'      => 'Позиція ↕',
                    'hidden'        => 'Не відображати',
                ],
                'placeholder' => [
                    'ip' => '127.0.0.1',
                ],
            ],

        ],
        'download'   => [
            'item' => [
                'title'       => 'Інтерфейс кнопки завантаження',
                'info'        => '<span>Дозволяє додати кнопку завантаження, якщо ви маєте лаунчер.</span>',
                'label'       => [
                    'name'     => 'Назва',
                    'url'      => 'Посилання',
                    'position' => 'Позиція ↕',
                    'hidden'   => 'Не відображати',
                ],
                'placeholder' => [
                    'name' => 'Назва',
                    'url'  => 'Посилання',
                ],
            ],
        ],
        'register'   => [
            'item' => [
                'title'       => 'Інтерфейс зареєстрованих користувачів / Discord',
                'info'        => '<span>Дозволяє відображати число користувачів, що зареєстровані на сайті чи в Discord.</span>',
                'label'       => [
                    'hidden'       => 'Не відображати',
                    'style'        => 'Вибір між реєстрацією та Discord',
                    'textRegister' => 'Текст: Реєстрація',
                    'textDiscord'  => 'Текст: Discord',
                    'linkDiscord'  => 'Посилання на сервер у Discord',
                    'discord_key'  => 'ID серверу у Discord',
                    'position'     => 'Позиція ↕',
                ],
                'placeholder' => [
                    'textRegister' => 'Зареєстровані користувачі',
                    'textDiscord'  => 'Сервер у Discord',
                    'linkDiscord'  => 'https://discord.com/invite/wmYrG2c',
                    'discord_key'  => '684097488164225073',
                ]
            ],
        ],
        'background' => [
            'item' => [
                'title' => 'Інтерфейс фону ',
                'label' => [
                    'background' => 'Фон',
                    'position'   => 'Позиція ↕',
                    'height'     => 'Вивота зображення',
                ],
            ],

        ],
    ],
    'backgroundLogo'     => [
        'ipServer'   => [
            'item' => [
                'title'       => 'Інтерфейс IP-серверу',
                'info'        => '<span>Дозволяє відображати адресу серверу на сайті.</span>',
                'label'       => [
                    'ip'            => 'IP server',
                    'mediaIp'       => 'IP серверу',
                    'mediaServeOn'  => 'Зображення серверу в онлайн',
                    'mediaServeOff' => 'Зображення серверу в офлайн',
                    'position'      => 'Позиція ↕',
                    'hidden'        => 'Не відображати',
                ],
                'placeholder' => [
                    'ip' => '127.0.0.1',
                ],
            ],
        ],
        'logo'       => [
            'item' => [
                'title'       => 'Інтерфейс логотипу',
                'info'        => '',
                'label'       => [
                    'media'    => 'Логотип',
                    'position' => 'Позиція ↕',
                    'hidden'   => 'Не відображати',
                    'animation'   => 'Вимкнути анімацію',
                ],
                'placeholder' => [
                    'name' => 'Назва',
                    'url'  => 'Посилання',
                ],
            ],
        ],
        'register'   => [
            'item' => [
                'title'       => 'Інтерфейс зареєстрованих користувачів / Discord',
                'info'        => '<span>Дозволяє відображати число користувачів, що зареєстровані на сайті чи в Discord.</span>',
                'label'       => [
                    'hidden'       => 'Не відображати',
                    'style'        => 'Вибір між реєстрацією та Discord',
                    'textRegister' => 'Текст: Реєстрація',
                    'textDiscord'  => 'Текст: Discord',
                    'linkDiscord'  => 'Посилання на сервер у Discord',
                    'discord_key'  => 'ID серверу у Discord',
                    'position'     => 'Позиція ↕',
                ],
                'placeholder' => [
                    'textRegister' => 'Зареєстровані користувачі',
                    'textDiscord'  => 'Сервер у Discord',
                    'linkDiscord'  => 'https://discord.com/invite/wmYrG2c',
                    'discord_key'  => '684097488164225073',
                ]
            ],
        ],
        'background' => [
            'item' => [
                'title' => 'Інтерфейс фону ',
                'label' => [
                    'background' => 'Фон',
                    'position'   => 'Позиція ↕',
                    'height'     => 'Висота зображення',
                ],
            ],

        ],
    ],
    'background'         => [
        'background' => [
            'item' => [
                'title' => 'Інтерфейс фону ',
                'label' => [
                    'background' => 'Фон',
                    'position'   => 'Позиція ↕',
                    'height'     => 'Висота зображення',
                ],
            ],

        ],
    ],
];
