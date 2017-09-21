<?php

return [

    'api' => [
        'type' => 'http',
        'host' => 'api.+',

        'resolver' => [

            'default' => [
                'type' => 'pattern',
                'path' => '/(<processor>(/<action>))',

                'defaults' => [
                    'processor' => 'home',
                    'action'    => 'default',
                ],

            ]

        ],

        'defaults' => [
            'bundle' => 'api'
        ]
    ],

    'app' => [
        'type' => 'prefix',
        'path' => '/',

        'resolver' => [

            'default' => [
                'type' => 'pattern',
                'path' => '(<processor>(/<action>))',

                'defaults' => [
                    'processor' => 'home',
                    'action'    => 'default',
                ],

            ]

        ],

        'defaults' => [
            'bundle' => 'app'
        ]
    ]
];
