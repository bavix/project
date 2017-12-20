<?php

namespace Bundle\App\Http;

use Bavix\Http\Stream;
use Project\Manager;
use Psr\Http\Message\ServerRequestInterface;

class HomeController extends Manager
{

    /**
     * @param ServerRequestInterface $request
     *
     * @return ServerRequestInterface
     */
    public function default(ServerRequestInterface $request): ServerRequestInterface
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

    /**
     * @param ServerRequestInterface $request
     *
     * @return string
     */
    public function template(ServerRequestInterface $request): string
    {
        return $this->flow->render('app:hello', [
            'message' => 'Hello World'
        ]);
    }

}
