<?php

return [
    'plugin' => [
        'name' => 'Новости и подписчики',
        'description' => 'Управление новостями и подписками.',
        'author' => 'Gergő Szabó'
    ],
    'menu' => [
        'news' => 'Новости',
        'posts' => 'Посты',
        'subscribers' => 'Подписчики'
    ],
    'title' => [
        'posts' => 'пост',
        'subscribers' => 'подписчик'
    ],
    'new' => [
        'posts' => 'Новый пост',
        'subscribers' => 'Новый подписчик'
    ],
    'form' => [
        // General
        'statistics' => 'Статистика',
        'created' => 'Дата создания',
        'updated' => 'Дата обновления',
        // Posts
        'title' => 'Заголовок',
        'slug' => 'URL записи',
        'introductory' => 'Введение',
        'content' => 'Содержимое',
        'image' => 'Изображение',
        'status' => 'Статус',
        'status_published' => 'Опубликовано',
        'status_hide' => 'Скрыто',
        'status_draft' => 'Черновик',
        'view' => 'просмотр',
        'published' => 'Дата публикации',
        'send' => 'Отправить почту подписчикам.',
        // Subscribers
        'name' => 'Имя',
        'email' => 'Почта',
        'common' => 'Общее',
        'mail' => 'почта'
    ],
    'button' => [
        'activate' => 'Активировать',
        'deactivate' => 'Деактивировать',
        'active' => 'Активно',
        'inactive' => 'Не активено',
        'return' => 'Вернуть'
    ],
    'flash' => [
        'activate' => 'Этот пост успешно активирован.',
        'deactivate' => 'Этот пост успешно деактивирован.',
        'delete' => 'Вы действительно хотите удалить эту запись?',
        'remove' => 'Запись успешно удалена.'
    ],
    'widget' => [
        'posts' => 'Новости - Посты',
        'subscribers' => 'Новости - Подписки',
        'show_total' => 'Показать все',
        'show_active' => 'Показать активные',
        'show_inactive' => 'Показать неактивные',
        'total' => 'Итого'
    ],
    'component' => [
        'posts' => 'Отображение постов',
        'post' => 'Показать содержание поста',
        'form' => 'Форма подписки',
        'stat' => 'Просмотр статистики'
    ],
    'permission' => [
        'posts' => 'Управление постами',
        'subscribers' => 'Управление подписками'
    ],
    'settings' => [
        'post_title' => 'Пост',
        'post_description' => 'Отображение поста',
        'post_slug' => 'Параметр URL',
        'post_slug_description' => 'Параметр маршрута, необходимый для выбора конкретного поста.',
        'posts_title' => 'Список постов',
        'posts_description' => 'Отображает список последних постов на странице.',
        'posts_pagination' => 'Параметр постраничной навигации',
        'posts_pagination_description' => 'Параметр, необходимый для постраничной навигации.',
        'posts_per_page' => 'Постов на странице',
        'posts_per_page' => 'Постов на странице',
        'posts_per_page_validation' => 'Недопустимый Формат. Ожидаемый тип данных - действительное число.',
        'posts_no_posts' => 'Отсутсвие постов',
        'posts_no_posts_description' => 'Сообщение, отображаемое в случае, если нет никаких постов. Это свойство используется по умолчанию компонентом.',
        'posts_order' => 'Сортировка',
        'posts_order_description' => 'Атрибут, по которому будут сортироваться посты.',
        'posts_post' => 'Страница поста',
        'posts_post_description' => 'Название страницы для ссылки "подробнее". Это свойство используется по умолчанию компонентом.'
    ],
    'sorting' => [
        'title_asc' => 'Заголовок (по возрастанию)',
        'title_desc' => 'Заголовок (по убыванию)',
        'created_at_asc' => 'Дата создания (по возрастанию)',
        'created_at_des' => 'Дата создания (по убыванию)',
        'updated_at_asc' => 'Дата обновления (по возрастанию)',
        'updated_at_desc' => 'Дата обновления (по убыванию)',
        'published_at_asc' => 'Дата публикации (по возрастанию)',
        'published_at_desc' => 'Дата публикации по убываниюg)'
    ]
];
