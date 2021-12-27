<?php
return [
    'long_brand' => env('STISLA_LONG_BRAND', 'STISLA'),
    'short_brand' => env('STISLA_SHORT_BRAND', 'ST'),
    'navbar' => [
        'search_form' => false,
        'messages_badge' => false,
        'notifications_badge' => false,
    ],
    'sidebar_mini' => [
        'show' => true,
        'label' => 'PRICING',
        'link' => env('APP_URL'),
        'icon' => 'fas fa-dollar-sign'
    ],
    'footer' => [
        'label' => env('STISLA_FOOTER_LABEL', 'Muhammad Nauval Azhar'),
        'link' => env('STISLA_FOOTER_LINK', 'https://nauval.in/'),
        'year' => env('STISLA_FOOTER_YEAR', date('Y')),
    ]
];