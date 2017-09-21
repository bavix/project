<?php

return [
    'bundle' => [
        'type' => 'prefix',
        'path' => '(/<bundle:(app)>)',

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
            'bundle' => 'app'
        ]
    ]
];
