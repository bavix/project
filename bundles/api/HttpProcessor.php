<?php

namespace Api;

use Api\Http\HomeController;
use Bavix\Processors\Manager;

class HttpProcessor extends Manager
{

    /**
     * @var string
     */
    protected $actionName = 'processor';

    /**
     * @return string
     */
    protected function home(): string
    {
        return HomeController::class;
    }

}
