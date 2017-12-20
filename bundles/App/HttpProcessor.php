<?php

namespace Bundle\App;

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
    protected function home(): string
    {
        return Http\HomeController::class;
    }

}
