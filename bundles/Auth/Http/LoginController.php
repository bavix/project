<?php

namespace Bundle\Auth\Http;

use Project\Manager;
use Psr\Http\Message\ServerRequestInterface;

class LoginController extends Manager
{

    public function default(ServerRequestInterface $request)
    {
        return $this->flow->render('auth:login');
    }

    public function store(ServerRequestInterface $request)
    {
        return $request->getParsedBody();
    }

}
