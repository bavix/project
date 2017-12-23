<?php

namespace Bundle\Auth\Http;

use Bavix\Http\ServerRequest;
use Project\Middleware\GuestMiddleware;
use Project\Models\User;
use Project\Manager;

class RegisterController extends Manager
{

    protected $middleware = [
        GuestMiddleware::class
    ];

    public function default(ServerRequest $request)
    {
        return $this->flow->render('auth:login', [
            'title'  => 'Auth Register',
            'action' => '/auth/register'
        ]);
    }

    public function store(ServerRequest $request)
    {
        $password = $this->builder->password();
        $slice    = $request->getParsedBody();

        $user           = new User();
        $user->email    = $slice->getEmail('email');
        $user->password = $password->hash($slice->getRequired('email'));
        $user->save();

        return $user;
    }

}
