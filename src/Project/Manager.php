<?php

namespace Project;

use Bavix\Builder\Builder;
use Bavix\Context\Cookies;
use Bavix\Flow\Flow;
use Bavix\Processors\Dispatcher;
use Bavix\Processors\Factory;

class Manager extends \Bavix\Processors\Manager
{

    /**
     * @var Builder
     */
    protected $builder;

    /**
     * @var Flow
     */
    protected $flow;

    /**
     * Manager constructor.
     *
     * @param Factory         $factory
     * @param Dispatcher|null $dispatcher
     * @param Cookies|null    $cookies
     */
    public function __construct(Factory $factory, Dispatcher $dispatcher = null, Cookies $cookies = null)
    {
        parent::__construct($factory, $dispatcher, $cookies);

        $this->builder = \builder();
        $this->flow    = $this->builder->flow();
    }

}
