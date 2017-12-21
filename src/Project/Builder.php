<?php

namespace Project;

use Bavix\Lumper\Bind;

class Builder extends \Bavix\Builder\Builder
{

    /**
     * Builder constructor.
     *
     * @param string $root
     */
    public function __construct(string $root)
    {
        parent::__construct($root);
        $this->capsule();
    }

    /**
     * @return \Illuminate\Database\Capsule\Manager
     */
    public function capsule(): \Illuminate\Database\Capsule\Manager
    {
        return Bind::once(__METHOD__, function () {

            $capsule = new \Illuminate\Database\Capsule\Manager();
            $capsule->addConnection($this->config()->get('db')->asArray());

            $capsule->setAsGlobal();
            $capsule->bootEloquent();

            return $capsule;
        });
    }

}
