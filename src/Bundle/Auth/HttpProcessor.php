<?php

namespace Bundle\Auth;

use Project\Manager;

class HttpProcessor extends Manager
{

    /**
     * @var string
     */
    protected $attribute = 'processor';

    /**
     * @return string
     */
    protected function logout(): string
    {
        return Http\LogoutController::class;
    }

    /**
     * @return string
     */
    protected function login(): string
    {
        return Http\LoginController::class;
    }

    /**
     * @return string
     */
    protected function register(): string
    {
        return Http\RegisterController::class;
    }

}
