<?php

namespace Project;

use Bavix\Lumper\Bind;

class Builder extends \Bavix\Builder\Builder
{

    /**
     * @return \Illuminate\Database\Capsule\Manager
     */
    public function capsule(): \Illuminate\Database\Capsule\Manager
    {
        return Bind::once(__METHOD__, function () {
            $capsule = new \Illuminate\Database\Capsule\Manager(
                $this->config()->get('db')->asArray()
            );

            $capsule->setAsGlobal();
            $capsule->bootEloquent();

            return $capsule;
        });
    }

}
