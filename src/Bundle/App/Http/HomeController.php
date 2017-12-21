<?php

namespace Bundle\App\Http;

use Bavix\Http\ServerRequest;
use Bavix\Http\Stream;
use Project\Manager;

class HomeController extends Manager
{

    /**
     * @param ServerRequest $request
     *
     * @return string
     */
    public function default(ServerRequest $request): string
    {
        return $this->flow->render('app:home', [
            'title'   => 'Home Page',
            'message' => 'Hello World'
        ]);
    }

    /**
     * @param ServerRequest $request
     *
     * @return \Bavix\Context\Cookies
     */
    public function cookies(ServerRequest $request)
    {
        return $request->cookies();
    }

    /**
     * @param ServerRequest $request
     *
     * @return ServerRequest
     */
    public function highlight(ServerRequest $request): ServerRequest
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
