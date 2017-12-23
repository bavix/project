<?php

namespace Project\Middleware;

use Bavix\Http\ServerRequest;
use Project\Manager;

class AuthMiddleware extends RedirectMiddleware
{

    /**
     * @var string
     */
    protected $uri = '/auth/login';

    public function handle(Manager $manager, ServerRequest $request)
    {
        if (true)
        {
            return parent::handle($manager, $request);
        }
    }

}
