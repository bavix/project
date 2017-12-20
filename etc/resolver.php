<?php

return [

    'auth' => [

        'type' => 'prefix',
        'path' => '/auth/',

        'resolver' => [

            'action' => [
                'type' => 'pattern',
                'path' => '<processor>',

                'methods' => ['GET']
            ],

            'store' => [
                'type' => 'pattern',
                'path' => '<processor>',

                'defaults' => [
                    'processor' => 'login',
                    'action'    => 'store'
                ],

                'methods' => ['POST']
            ]

        ],

        'defaults' => [
            'bundle' => 'auth',
            'action' => 'default',
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
