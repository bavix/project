<?php

namespace Bundle\Api\Http;

use Project\Manager;
use Psr\Http\Message\ServerRequestInterface;

class HomeController extends Manager
{

    /**
     * @param ServerRequestInterface $request
     *
     * @return array
     */
    public function default(ServerRequestInterface $request): array
    {
        return $this->cookies->export();
    }

}
