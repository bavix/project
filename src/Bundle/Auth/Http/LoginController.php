<?php

namespace Bundle\Auth\Http;

use Bavix\Exceptions\Invalid;
use Bavix\Http\ServerRequest;
use Project\Middleware\GuestMiddleware;
use Project\Models\User;
use Project\Manager;

class LoginController extends Manager
{

    protected $middleware = [
        GuestMiddleware::class
    ];

    public function default(ServerRequest $request)
    {
        return $this->flow->render('auth:login', [
            'title'  => 'Auth Login',
            'action' => '/auth/login'
        ]);
    }

    public function store(ServerRequest $request)
    {
        $password = $this->builder->password();
        $slice    = $request->getParsedBody();

        $user = User::query()
            ->where('email', $slice->getRequiredEmail('email'))
            ->first();

        if (!$user)
        {
            throw new Invalid('User not found!');
        }

        if ($password->verify($slice->getRequired('password'), $user->password))
        {
            var_dump($slice->getRequired('password'));
            die;
        }

        throw new Invalid('Not the right password');
    }

}
