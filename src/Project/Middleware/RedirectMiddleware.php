<?php

namespace Project\Middleware;

use Bavix\Http\ServerRequest;
use Project\Middleware;
use Project\Manager;

abstract class RedirectMiddleware extends Middleware
{

    /**
     * @var string
     */
    protected $uri;

    public function handle(Manager $manager, ServerRequest $request)
    {
        return $request
            ->withHeader('location', $this->uri);
    }

}
