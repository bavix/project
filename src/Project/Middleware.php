<?php

namespace Project;

use Bavix\Http\ServerRequest;

abstract class Middleware
{
    abstract public function handle(Manager $manager, ServerRequest $request);
}
