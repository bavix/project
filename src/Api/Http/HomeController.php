<?php

namespace Api\Http;

use Bavix\Processors\Manager;
use Psr\Http\Message\ServerRequestInterface;

class HomeController extends Manager
{

    public function default(ServerRequestInterface $request)
    {
        return $this->cookies->export();
    }

}
