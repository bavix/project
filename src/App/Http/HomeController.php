<?php

namespace App\Http;

use Bavix\Http\Stream;
use Bavix\Processors\Manager;
use Psr\Http\Message\ServerRequestInterface;

class HomeController extends Manager
{

    public function default(ServerRequestInterface $request)
    {
        $content = \highlight_file(__FILE__, true);
        $stream  = Stream::create($content);

        return $request
            ->withBody($stream)
            ->withCookieParams([
                'class'    => __CLASS__,
                'function' => __FUNCTION__,
                'method'   => __METHOD__,
            ]);
    }

}
