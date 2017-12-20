<?php

return [
    'cookies'  => [
        'password' => 'your-password'
    ],
    'session'  => [
        'password' => 'your-password'
    ],
    'resolver' => [
        'default' => [
            'type' => 'pattern',
            'path' => '(<processor>(/<action>))',

            'defaults' => [
                'processor' => 'home',
                'action'    => 'default',
            ]
        ]
    ],
];
