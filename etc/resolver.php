<?php

return [

    'api' => [
        'type' => 'prefix',
        'path' => '/api/',

        'resolver' => '%resolver%',
        'defaults' => [
            'bundle' => 'api'
        ]
    ],

    'app' => [
        'type' => 'prefix',
        'path' => '/',

        'resolver' => [
            'default' => '%resolver.default%'
        ],

        'defaults' => [
            'bundle' => 'app'
        ]
    ],

];
