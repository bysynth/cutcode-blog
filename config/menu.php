<?php

return [
    'web' => [
        [
            'title' => 'Статьи',
            'route' => 'articles.index',
            'active' => 'articles.*'
        ],
        [
            'title' => 'Админка',
            'route' => 'admin.login.create',
            'active' => 'admin.*'
        ],
    ],
    'admin' => [
        [
            'title' => 'Главная',
            'route' => 'admin.dashboard',
            'active' => 'admin.dashboard'
        ],
//        [
//            'title' => 'Категории',
//            'route' => 'admin.categories.index',
//            'active' => 'admin.categories.*'
//        ],
//        [
//            'title' => 'Статьи',
//            'route' => 'admin.articles.index',
//            'active' => 'admin.articles.*'
//        ],
//        [
//            'title' => 'Пользователи',
//            'route' => 'admin.users.index',
//            'active' => 'admin.users.*'
//        ],
    ],
];
