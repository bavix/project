<?php

return [
    'cookies'  => [
        'password' => 'your-password'
    ],
    'session'  => [
        'password' => 'your-password'
    ],
    'db'       => [
        'database' => 'bavix',
        'username' => 'root',
        'password' => 'root',
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
