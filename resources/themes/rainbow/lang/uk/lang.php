<?php

return [
    'default' => 'Стандартні',
    'config' => [
        'info' => '<h4 class="mb-3">Документація для цієї теми <a href="https://linedev.gitbook.io/rainbow/" target="_blank">Rainbow</a></h4>
            <small class="d-block  pl-3">Дана тема запропонує вам максимум можливих конфігурацій, які дозволять вам зробити ваш сайт унікальним.</small>
            <small class="d-block mb-2 pl-3">Якщо ви щось не зрозуміли, не соромтеся звертатися до мене <a href="https://discord.gg/wmYrG2c" target="_blank">Latshow#4681</a> і допомагати мені покращувати тему.</small>
            <small class="d-block font-weight-bold pl-3">Детально про кожну анімацію: <a href="https://michalsnik.github.io/aos/" target="_blank">AOS</a></small>
            <br> <button type="button" class="btn btn-primary  text-uppercase fw-bold rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#donationModal"><i class="bi bi-heart-fill me-1"></i>Пожертвування</button>
        <br>
           <a href="https://www.serveurliste.com" target="_blank" class="btn btn-warning fw-bold rounded-4 my-3 text-uppercase px-3"><i class="bi bi-search me-1"></i>Відобрази свої сервери на serveurliste.com</a>',
        'donation' => 'Ця кнопка пожертви була створена для всіх людей, які запитують мене "як зробити пожертву". <br> Заздалегідь дякую всім, хто вирішив підтримати мене цією пожертвою. Вони дозволять мені купувати кавові капсули, які я використовую, щоб пропонувати вам завжди нові можливості.',
        'info-eye' => '
    <div class="small my-2">
        <span class="mr-2"><i class="bi bi-exclamation-circle color-primary"></i></span><span>Якщо ви натискаєте на око і воно перенаправляє вас на сторінку 404, це означає, що ваш контент не існує на даний момент, вам просто потрібно створити його, щоб виконати конфігурацію, а потім видалити.</span>
    </div>',
        'last-config' => '
    <div class="small text-danger font-weight-bold my-2">
        <span class="mr-2"><i class="bi bi-exclamation-circle"></i></span><span>Це старий компонент теми 1.5.<br>Бажано видалити його і використовувати нову систему створення контенту, щоб скористатися всіма можливими можливостями.</span>
    </div>'

    ],
    'site' => [
        'register' => 'зареєстровані на сайті',
        'memberRegister' => 'Зареєстровані користувачі',
        'discord' => [
            'join' => 'Приєднатися',
            'online' => 'онлайн'
        ],
    ],
    'show_more' => 'Показати більше',
    'image' => 'Зображення',
    'title' => 'Заголовок',
    'number' => 'Число',
    'description' => 'Опис',
    'icon' => 'Приклад значка: <i class="bi bi-discord"></i>',
    'name' => 'Назва',
    'target' => 'Нова вкладка',
    'animation' => 'Анімація',
    'easing' => 'Спрощення',
    'duration' => 'Трималість (мс)',
    'offset' => 'Зміщення',
    'placement' => 'Розташування',
    'link' => 'Посилання',
    'fontawesome' => 'Щоб отримати значки, використовуйте',
    'styles' => 'Стилі',
    'alignment-h' => 'Вирівнювання ⇆',
    'textAlignement' => [
        'start' => 'По лівому краю',
        'center' => 'По центру',
        'end' => 'По правому краю',
    ],
    'plugin' => [
        'requires' => 'Потребує даний модуль'
    ],
    'cursor' => [
        'title' => 'Курсор',
        'media' => [
            'info' => 'Зображення розміром макс. 32px x 32px',
            'label' => 'Глобальне зображення курсору',
        ],
        'media_link' => [
            'label' => 'Посилання на зображення курсору',
        ],
    ],
    'menus' => [
        'articles' => [
            'index' => 'Всі статті',
            'show' => 'Одна стаття',
        ],
        'forum' => [
            'index' => 'Форум',
            'forum_breadcrumb' => 'Хлібні крихти',
            'forum_message' => 'Повідомлення',
            'forum_stati' => 'Статистика',
            'show' => 'Даний форум',
            'profile_edit' => 'Редагувати користувача',
            'profile_show' => 'Користувач',
            'discussions_posts_edit' => 'Редагувати пост',
            'discussions_create' => 'Створити дискусію',
            'discussions_edit' => 'Редагувати дискусію',
            'discussions_show' => 'Одна дискусія',
        ],
        'flyff' => [
            'flyff_accounts' => 'Профіль',
            'flyff_resetPassword' => 'Редагувати пароль',
            'flyff_guilds' => 'Гільдії',
            'flyff_guildsShow' => 'Гільдія',
            'flyff_guildSiege' => 'Облога гільдії',
            'flyff_guildSiegeShow' => 'Показувати облогу гільдії',
            'flyff_characters' => 'Персонажі',
            'flyff_characterShow' => 'Персонаж',
        ],
        'identification' => [
            'f2a' => 'F2a',
            'passwordReset' => 'Скидання паролю (Скинути)',
            'passwordEmail' => 'Скидання паролю (Електронна пошта)',
            'passwordConfirm' => 'Скидання паролю (Підтвердження)',
            'account' => 'Профіль',
            'accountF2a' => 'Профіль F2a',
            'error' => 'Помилка',
            'maintenance' => 'Технічні роботи',
        ],
        'jirai' => [
            'index' => 'Jirai',
            'jirai_suggestions' => 'Пропозиції',
            'jirai_bugs' => 'Баги',
            'jirai_changelogs' => 'Зміни',
            'changelogs_create' => 'Створити зміни',
            'changelogs_edit' => 'Редагувати зміни',
            'changelogs_show' => 'Ці зміни',
            'issues_create' => 'Створити (Баг/Пропозицію)',
            'issues_edit' => 'Редагувати (Баг/Пропозицію)',
            'issues_show' => 'Цей (м)',
            'messages_edit' => 'Редагувати повідомлення',
        ],
        'shop' => [
            'index' => 'Магазин',
            'shop_filter' => 'Фільтр',
            'shop_profil' => 'Профіль',
            'cart' => 'Кошик',
            'shop_coupons' => 'Купони',
            'shop_add_coupons' => 'Додати купони',
            'offre_select' => 'Способи оплати',
            'offre_buy' => 'Пропозиції щодо способів оплати',
            'payments' => 'Платежі',
            'my_achats' => 'Мої покупки',
        ],
        'support' => [
            'index' => 'Підтримка',
            'show' => 'Один квиток',
            'create' => 'Створити квиток',
        ],
        'wiki' => [
            'index' => 'Вікі',
            'show' => 'Один вікі',
        ]
    ],
    'meta' => [
        'title' => 'Мета',
        'color' => [
            'info' => 'Що за  <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta/name/theme-color" title="Theme-color" target="_blank">колір теми</a> ?',
            'label' => 'theme-color: ',
        ],
    ],
    'panel' => [
        'button' => [
            'addBackground' => 'Додати фон',
            'addBlock' => 'Додати блок',
            'addSection' => 'Додати секцію',
        ],
        'label' => [
            'size' => 'Розмір',
        ],
    ],
    'modal' => [
        'block' => 'Блок',
        'background' => 'Фон',
        'section' => 'Секція',
        'utility' => 'Утиліти',
        'plugin' => 'Модулі',
        'social_networks' => 'Соціальні мережі',
        'other' => 'Інше',
    ],
    'general' => [
        'style' => 'глобальний стиль теми',
    ],
    'identification' => [
        'title' => 'Ідентифікація',
    ],
    'flyff' => [
        'title' => 'Модуль Flyff',
    ],
    'gallery' => [
        'title' => 'Модуль Gallery',
    ],
    'advancedBan' => [
        'title' => 'Модуль AdvancedBan',
        'banner' => [
            'advancedBan' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер AdvancedBan',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'advancedBan' => [
                'title' => 'Інтерфейс AdvancedBan',
            ],
        ]
    ],
    'articles' => [
        'title' => 'Стаття(ті)',
        'banner' => [
            'article' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер статті',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'allArticle' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер всіх статей',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'article' => [
                'title' => 'Інтерфейс статті',
                'label' => [
                    'comment-hidden' => 'Не відображати коментарі в статтях',
                    'follow-hidden' => 'Не відображати вподобання в статтях',
                ],
            ],
            'allArticle' => [
                'title' => 'Інтерфейс всіх статей',
            ],
        ]
    ],
    'changelog' => [
        'title' => 'Модуль Changelog',
        'banner' => [
            'changelog' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер changelog',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'changelog' => [
                'title' => 'Інтерфейс changelog',
            ],
        ]
    ],
    'coinFlip' => [
        'title' => 'Модуль Coinflip',
    ],
    'cps' => [
        'title' => 'Модуль CPS',
        'banner' => [
            'cps' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер CPS',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'cps' => [
                'title' => 'Інтерфейс CPS',
            ],
        ]
    ],
    'faq' => [
        'title' => 'Модуль FAQ',
        'banner' => [
            'faq' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер FAQ',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'faq' => [
                'title' => 'Інтерфейс FAQ',
            ],
        ]
    ],
    'footer' => [
        'title' => 'Футер',
        'global' => [
            'reverse' => 'Відобразити вміст у зворотному порядку'
        ],
        'socialLinks' => [
            'hidden' => 'Не відображати',
        ],
        'social' => [
            'title' => 'Соціальні мережі',
            'info' => '<span>Дозволяє додавати ваші соціальні мережі.</span>'
        ],
        'condition' => [
            'title' => 'Угоди, політики та подібне...',
            'info' => '<span>Дозволяє додавати посилання на угоди, політики та подібне.</span>
                        <span>Не забудьте додати посилання на сторінку, яке можна створити тут: <a href="/admin/pages" target="_blank" title="Page">сторінка</a></span>
                        '
        ],
        'download' => [
            'title' => 'Кнопка завантаження',
            'hidden' => 'Не відображати цю кнопку',
            'info' => '<span>Дозволяє додати кнопку завантаження, якщо ви маєте лаунчер.</span>'
        ],
        'logo' => [
            'title' => 'Логотип у футері',
            'hidden' => 'Не відображати логотип',
        ],
        'liens' => [
            'title' => 'Посилання',
            'textAlignement' => 'Вирівняти текст відносно кнопки',
            'button' => 'Показати посилання у вигляді кнопки',
            'buttonWidth' => 'Вимкнення ширини кнопки',
            'hidden' => 'Не відображати посилання',
            'info' => '<span>Дозволяє додавати свої посилання (Головна, магазин, контакти, Discord).</span>',
            'serveurliste' => [
                'active' => 'Не відображати, що ваш сервер вказано в списку serveurliste.com',
                'link' => 'Посилання на вашу сторінку в Serveurliste. <a href="https://serveurliste.com/faq" target="_blank">Документація</a>'
            ]
        ],
    ],
    'navigation' => [
        'title' => 'Панель навігації',
    ],
    'forum' => [
        'title' => 'Модуль Forum',
        'banner' => [
            'forum' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер форуму',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'forum-show' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер показу форуму',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'forum-user-edit' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'банер редагування користувача',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'forum-posts-edit' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер редагування посту',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'forum-discussions-create' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер створення дискусій',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'forum-discussions-edit' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер редагування дискусій',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'forum-discussions-show' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер показу дискусій',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'forum' => [
                'title' => 'Інтерфейс форуму',
            ],
            'breadcrumb' => [
                'title' => 'Інтерфейс хлібної крихти',
            ],
            'message' => [
                'title' => 'Інтерфейс повідомлення',
            ],
            'stati' => [
                'title' => 'Інтерфейс статистики',
            ],
            'user' => [
                'title' => 'Інтерфейс користувача в онлайн',
            ],
            'forum-show' => [
                'title' => 'Банер показу форуму',
            ],
            'forum-user-edit' => [
                'title' => 'Банер редагування користувача',
            ],
            'forum-posts-edit' => [
                'title' => 'Банер редагування посту',
            ],
            'forum-discussions-create' => [
                'title' => 'Банер створення дискусій',
            ],
            'forum-discussions-edit' => [
                'title' => 'Банер редагування дискусій',
            ],
            'forum-discussions-show' => [
                'title' => 'Банер показу дискусій',
            ],
        ],
    ],
    'global' => [
        'title' => 'Загальне',
    ],
    'header' => [
        'title' => 'Хедер',
        'preloader' => [
            'title' => 'Передзавантаження',
            'hidden' => 'Не відображати передзавантаження',
            'info' => '<span>Дозволяє відображати передзавантаження протягом часу, якого основна сторінка завантажується.</span>'
        ],
        'navbar' => [
            'title' => 'Панель навігації',
            'hiddenIcon' => 'Не відображати значки у верхній частині сторінки',
            'hiddenText' => 'Не відображати текст навігації',
            'hiddenLogo' => 'Не відображати логотип',
            'hiddenDiscord' => 'Не відображати кнопку входу через Discord (Модуль <a href="https://market.azuriom.com/resources/62">Discord-auth</a> active)',
            'position' => 'Розташування',
            'items_px_spacement' => 'Відстань між кожним текстовим посиланням (у пікселях)',
            'fixed' => 'Не відображати заголовок у виправленні',
            'transition_dures' => 'Якщо навігація фіксована, час переходу в секундах становить',
            'style' => 'Стиль',
            'hiddenColor' => 'Показ кольору фону',
            'color' => 'Меню кольору фону',
            'breakpoint' => 'З моменту, коли я активую мобільну версію в навігаційній панелі',
            'logo' => [
                'title' => 'Логотип',
                'center' => 'Розмістити логотип у центрі навігаційної панелі',
                'size' => 'Розмір логотипу'
            ],
            'info' => '<span>Дозволяє відображати текст і зображення або тільки зображення чи текст.</span>'
        ],
        'icon' => [
            'title' => 'Меню навігації',
            "alert" => 'Не забудьте оновити значки, якщо ви змінили назву посилання',
            'info' => '<span>Дозволяє відображати текст і зображення або тільки зображення чи текст.</span>',
            'size' => 'Розмір зображення',
        ]
    ],
    'home' => [
        'title' => 'Головна сторінка',
        'items' => [
            'article' => [
                'title' => 'Інтерфейс всіх статей',
                'label' => [
                    'numberMax' => 'Макс. к-сть статей на сторінку'
                ],
                'placeholder' => [
                    'numberMax' => '3'
                ],
            ],
            'ip-server' => [
                'title' => 'Інтерфейс IP-серверу',
                'info' => '<span>Дозволяє відображати адресу серверу на сайті.</span>',
                'label' => [
                    'ip' => 'IP серверу',
                    'media' => 'Зображення справа',
                    'mediaServeOn' => 'Зображення серверу в онлайн',
                    'mediaServeOff' => 'Зображення серверу в офлайн',
                    'hidden' => 'Не відображати',
                ],
                'placeholder' => [
                    'ip' => '127.0.0.1',
                ],
            ],
            'count-register' => [
                'title' => 'Інтерфейс зареєстрованих користувачів',
                'info' => '<span>Дозволяє відображати число користувачів, що зареєстровані на сайті.</span>',
                'label' => [
                    'hidden' => 'Не відображати',
                ],
            ],
            'download' => [
                'title' => 'Інтерфейс кнопки завантаження',
                'info' => '<span>Дозволяє додати кнопку завантаження, якщо ви маєте лаунчер.</span>',
                'hidden' => 'Не відображати кнопку',
                'label' => [
                    'name' => 'Назва',
                    'url' => 'Посилання',
                    'hidden' => 'Не відображати',
                ],
                'placeholder' => [
                    'name' => 'Назва',
                    'url' => 'Посилання',
                ],
            ],
            'discord' => [
                'title' => 'Ынтерфейс Discord',
                'info' => '<span>Дозволяє відображати ваш Discord.</span>
                        <span>Як знайти ваш <a href="https://support.discord.com/hc/fr/articles/206346498-O%C3%B9-trouver-l-ID-de-mon-compte-utilisateur-serveur-message-" target="_blank" title="ID discord">ID серверу у Discord</a></span>',
                'label' => [
                    'id' => 'ID серверу у Discord',
                    'url' => 'Посилання на сервер у Discord',
                    'hidden' => 'Не відображати',
                ],
                'placeholder' => [
                    'id' => '684097488164225073',
                    'url' => 'https://discord.com/invite/wmYrG2c',
                ],
            ],
            'login' => [
                'title' => 'Інтерфейс входу',
                'label' => [
                    'hidden' => 'Не відображати',
                ],
            ]
        ],
        'banner' => [
            'article' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер статті',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'information' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер інформації',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'login' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер входу',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'particle' => [
            'title' => 'Частинки',
            'hidden' => 'не выдображати частинки',
            'info' => '<span>Дозволяє відображати частинки.<br><span class="text-warning">Сайт для тестування ваших частинок: <a href="https://vincentgarreau.com/particles.js/" target="_blank">particles.js</a>, назви полів ідентичні назвам статей сайту для моделювання.</span></span>',
            'content' => 'Розташування',
            'style' => 'Стиль',
        ],
        'slider' => [
            'title' => 'Слайдер',
            'info' => '<span>дозволяє відображати слайдер (скролинг тексту + зображення).</span>',
        ]
    ],
    'pages' => [
        'title' => 'Сторінка(ки)',
        'banner' => [
            'page' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер сторінок',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'page' => [
                'title' => 'Інтерфейс сторінок',
            ],
        ]
    ],
    'paysafecardmanual' => [
        'title' => 'Модуль Paysafecard Manual',
        'banner' => [
            'paysafecardmanual' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер Paysafecard Manual',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'paysafecardmanual' => [
                'title' => 'Інтерфейс Paysafecard Manual',
            ],
        ]
    ],
    'jirai' => [
        'title' => 'Модуль JIRAI',
        'banner' => [
            'changelog' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер зміни',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ], 'bugs' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'банер багів',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'suggestions' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер пропозицій',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'changelogs-create' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер створення змін',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'changelogs-edit' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер редагування змін',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'changelogs-show' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'банер показу змін',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'issues-create' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер створення (баги, пропозиції)',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'issues-edit' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'банер редагування (баги, пропозиції)',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'issues-show' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер відображення (баги, пропозиції)',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'messages-show' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер показу повідомлень',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'messages-create' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер створення повідомлення',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'messages-edit' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер редагування повідомлення',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'changelog' => [
                'title' => 'Інтерфейс змін',
            ],
            'bugs' => [
                'title' => 'Інтерфейс багів',
            ],
            'suggestions' => [
                'title' => 'Інтерфейс пропозицій',
            ],
            'changelogs-create' => [
                'title' => 'Інтерфейс створення змін',
            ],
            'changelogs-edit' => [
                'title' => 'Інтерфейс редагування змін',
            ],
            'changelogs-show' => [
                'title' => 'Інтерфейс показу змін',
            ],
            'issues-create' => [
                'title' => 'Інтерфейс створення (баги, пропозиції)',
            ],
            'issues-edit' => [
                'title' => 'Інтерфейс редагування (баги, пропозиції)',
            ],
            'issues-show' => [
                'title' => 'Інтерфейс показу (баги, пропозиції)',
            ],
            'messages-show' => [
                'title' => 'Інтерфейс повідомлень',
            ],
            'messages-create' => [
                'title' => 'Інтерфейс створення повідомлення',
            ],
            'messages-edit' => [
                'title' => 'Інтерфейс редагування повідомлення',
            ],
        ]
    ],
    'invoicepro' => [
        'title' => 'Модуль Invoicepro',
        'items' => [
            'invoicepro' => [
                'title' => 'Інтерфейс invoicepro',
            ],
        ]
    ],
    'sliders' => [
        'title' => 'Модуль Sliders',
        'name' => 'Слайдер',
        'id' => 'slider',
        'background' => 'Показувати зображення на фоні',
        'reverse' => 'Інвертувати зображення - текст'
    ],
    'liteBans' => [
        'title' => 'Модуль LiteBans',
        'banner' => [
            'litebans' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер litebans',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'liteBans' => [
                'title' => 'Інтерфейс liteBans',
            ],
            'navbar' => [
                'title' => 'Інтерфейс NavBar',
            ],
        ]
    ],
    'project' => [
        'title' => 'Модуль Project',
    ],
    'shop' => [
        'title' => 'Модуль Shop',
        'banner' => [
            'shop' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер магазину',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'filter' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер фільтру',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'cart' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер кошику',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'profile' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер профілю',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'coupons' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер купонів',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'addCoupons' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер додавання купону',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'payment' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер платежу',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'method-payment' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'банер методу платежу',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'select-payment' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер вибору платежу',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'buy' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер моїх покупок',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'shop' => [
                'title' => 'Інтерфейс магазину',
            ],
            'filter' => [
                'title' => 'Інтерфейс фільтру',
            ],
            'cart' => [
                'title' => 'Інтерфейс кошика',
            ],
            'profile' => [
                'title' => 'Інтерфейс профілю',
            ],
            'coupons' => [
                'title' => 'Інтерфейс купонів',
            ],
            'addCoupons' => [
                'title' => 'Інтерфейс додавання купону',
            ],
            'payment' => [
                'title' => 'Інтерфейс платежуу',
            ],
            'method-payment' => [
                'title' => 'Інтерфейс методу платежу',
            ],
            'select-payment' => [
                'title' => 'Інтерфейс вибору платежу',
            ],
            'buy' => [
                'title' => 'Інтерфейс моїх покупок',
            ],
        ]
    ],
    'skinApi' => [
        'title' => 'Модуль SkinApi',
        'banner' => [
            'skin' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер скіна',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'skin' => [
                'title' => 'Інтерфейс мого скіна',
            ],
        ]
    ],
    'spinWheel' => [
        'title' => 'Модуль Spin Wheel',
    ],
    'support' => [
        'title' => 'Модуль Support',
        'banner' => [
            'support' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер підтримки',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'support-create' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер створення підтримки',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'support-show' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер показу підтримки',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'support' => [
                'title' => 'Інтерфейс підтримки',
            ],
            'support-create' => [
                'title' => 'Інтерфейс створення підтримки',
            ],
            'support-show' => [
                'title' => 'Інтерфейс показу підтримки',
            ],
        ]
    ],

    'staff' => [
        'title' => 'Модуль Staff',
        'banner' => [
            'staff' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер Staff',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'staff' => [
                'title' => 'Інтерфейс Staff',
            ],
        ]
    ],
    'tebex' => [
        'title' => 'Модуль Tebex',
    ],
    'vote' => [
        'title' => 'Модуль Vote',
        'reward' => 'Винагороди',
        'banner' => [
            'vote' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'банер голосування',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'vote' => [
                'title' => 'Інтерфейс голосування',
                'label' => [
                    'hidden' => 'Не відображати значки сайту на кнопках голосування',
                ],
            ],
            'podium' => [
                'title' => 'Інтерфейс подіуму',
                'label' => [
                    'hidden' => 'Не відображати подіум',
                ],
            ],
            'classement' => [
                'title' => 'Інтерфейс класифікації',
            ],
            'recompenses' => [
                'title' => 'Інтерфейс компенсації',
            ],
        ],
    ],
    'wiki' => [
        'title' => 'Модуль Wiki',
        'banner' => [
            'wiki' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер вікі',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
            'wiki-show' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер показу вікі',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'wiki' => [
                'title' => 'Інтерфейс вікі',
            ],
            'wiki-show' => [
                'title' => 'Інтерфейс показу вікі',
                'spacePerCategory' => 'Простір між категоріями',
            ],
        ],
    ],

    'login' => [
        'title' => 'Вхід',
        'banner' => [
            'login' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер входу',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'login' => [
                'title' => 'Інтерфейс входу',
                'label' => [
                    'hidden' => 'Не відображати медіа',
                ],
            ],
            'discord' => [
                'title' => 'Інтерфейс входу через Discord',
                'label' => [
                    'text' => 'Текст',
                    'hidden' => 'Не відображати',
                ],
                'placeholder' => [
                    'text' => 'Сервер у Discord'
                ],
            ],
        ],
    ],
    'register' => [
        'title' => 'Реєстрація',
        'banner' => [
            'register' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер реєстрації',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'register' => [
                'title' => 'Інтерфейс реєстрації',
                'label' => [
                    'hidden' => 'Не відображати медіа',
                ],
            ],
        ],
    ],
    'passwordReset' => [
        'title' => 'Скидання паролю',
        'banner' => [
            'passwordReset' => [
                'info' => '<span>Дозволяє налаштувати банер на свій смак.</span>',
                'title' => 'Банер скидання паролю',
                'hidden' => 'Не відображати',
                'hidden-bg' => 'Не відображати фон значка'
            ],
        ],
        'items' => [
            'passwordReset' => [
                'title' => 'Інтерфейс скидання паролю',
                'label' => [
                    'hidden' => 'Не відображати медіа',
                ],
            ],
        ],
    ],

    'setting' => [
        'save' => 'Зберегти тему',
        'color' => [
            'button' => 'Кнопка',
            'alert' => 'Сповіщення',
            'bgText' => 'Фон та текст',
            'color' => 'Колір',
            'bgColor' => 'Колір фону',
            'textColor' => 'Колір тексту',
        ]
    ],
    'alert' => [
        'confirmButtonText' => 'Так, скинути!',
        'yes' => 'Так',
        'cancel' => 'Скасувати',
        'reset' => [
            'title' => 'Ви впевнені, що хочете скинути колір?',
            'text' => 'Це неможливо скасувати!',
            'confirm' => [
                'title' => 'скинути!',
                'text' => 'Ви скинули кольори теми',
            ],
        ],
        'save' => 'Колір збережено у конфігурації'

    ]
];
