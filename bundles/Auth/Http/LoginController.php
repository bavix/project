<?php

namespace Bundle\Auth\Http;

use Bavix\Exceptions\Invalid;
use Bavix\Slice\Slice;
use Project\Manager;
use Project\Models\User;
use Psr\Http\Message\ServerRequestInterface;

class LoginController extends Manager
{

    public function default(ServerRequestInterface $request)
    {
        return $this->flow->render('auth:login', [
            'action' => '/auth/login'
        ]);
    }

    public function store(ServerRequestInterface $request)
    {
        $slice = new Slice($request->getParsedBody());

        $user = User::query()
            ->where('email', $slice->getRequired('email'))
            ->first();

        if (!$user)
        {
            throw new Invalid('User not found!');
        }

        if (\password_verify($slice->getRequired('password'), $user->password))
        {
            var_dump($slice->getRequired('password'));
            die;
        }

        throw new Invalid('Not the right password');
    }

}
