<?php

namespace App\Http;

use Bavix\Processors\Manager;
use Psr\Http\Message\ServerRequestInterface;

class ApiController extends Manager
{

    public function default(ServerRequestInterface $request)
    {
        return [
            'attributes'    => $request->getAttributes(),
            'queryParams'   => $request->getQueryParams(),
            'parsedBody'    => $request->getParsedBody(),
            'cookieParams'  => $request->getCookieParams(),
            'serverParams'  => $request->getServerParams(),
            'uploadedFiles' => $request->getUploadedFiles(),
        ];
    }

}
