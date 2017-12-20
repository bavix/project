<?php

return [
    'ext'     => 'html',
    'compile' => dirname(__DIR__) . '/compile',
    'minify'  => true,
    'extends' => [
        \Bavix\Flow\Minify\Extensions\RemoveComments::class,
        \Bavix\Flow\Minify\Extensions\CollapseWhitespace::class
    ],
    'folders' => [
        'app'  => dirname(__DIR__) . '/view/app',
        'auth' => dirname(__DIR__) . '/view/auth',
    ]
];
