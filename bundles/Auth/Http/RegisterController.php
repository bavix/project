<?php

namespace Bundle\Auth\Http;

use function Bavix\Router\route;
use Bavix\Slice\Slice;
use Project\Manager;
use Project\Models\User;
use Psr\Http\Message\ServerRequestInterface;

class RegisterController extends Manager
{

    public function default(ServerRequestInterface $request)
    {
        return $this->flow->render('auth:login', [
            'action' => '/auth/register'
        ]);
    }

    public function store(ServerRequestInterface $request)
    {
        $slice = new Slice($request->getParsedBody());

        $user           = new User();
        $user->email    = $slice->getRequired('email');
        $user->password = \password_hash($slice->getRequired('email'), PASSWORD_DEFAULT);
        $user->save();

        return $user;
    }

}
