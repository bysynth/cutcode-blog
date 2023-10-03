<?php

return [
    'site' => [
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
];
