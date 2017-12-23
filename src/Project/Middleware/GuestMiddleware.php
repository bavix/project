<?php

namespace Project\Middleware;

use Bavix\Http\ServerRequest;
use Project\Manager;

class GuestMiddleware extends RedirectMiddleware
{

    /**
     * @var string
     */
    protected $uri = '/';

    public function handle(Manager $manager, ServerRequest $request)
    {
        if (false)
        {
            return parent::handle($manager, $request);
        }
    }

}
