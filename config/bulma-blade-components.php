<?php
// config for Nvade/BulmaBlade
return [
    'components' => [
        'breadcrumb' => Nvade\BulmaBlade\Components\Breadcrumb\Index::class,
        'breadcrumb-item' => Nvade\BulmaBlade\Components\Breadcrumb\Item::class,
        'card' => Nvade\BulmaBlade\Components\Card\Index::class,
        'dropdown' => Nvade\BulmaBlade\Components\Dropdown\Index::class,
        'dropdown-item' => Nvade\BulmaBlade\Components\Dropdown\Item::class,
    ],
    'prefix' => '',
    'assets' => [
        'bulma' => 'https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css',
        'jquery' => 'https://code.jquery.com/jquery-3.6.0.min.js'
    ],
];
