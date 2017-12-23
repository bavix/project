<?php

namespace Bundle\Auth\Http;

use Project\Middleware\AuthMiddleware;
use Bavix\Http\ServerRequest;
use Project\Manager;

class LogoutController extends Manager
{

    protected $middleware = [
        AuthMiddleware::class
    ];

    public function default(ServerRequest $request)
    {
        var_dump(__CLASS__);
        die;
    }

    public function store(ServerRequest $request)
    {
        // todo
    }

}
