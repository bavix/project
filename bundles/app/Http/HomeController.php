<?php

namespace App\Http;

use Bavix\Processors\Manager;
use Psr\Http\Message\ServerRequestInterface;

class HomeController extends Manager
{

    public function default(ServerRequestInterface $request)
    {
        return \highlight_file(__FILE__, true);
    }

}
