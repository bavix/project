<?php

namespace Project;

use Bavix\Builder\Builder;
use Bavix\Context\Cookies;
use Bavix\Flow\Flow;
use Bavix\Http\ServerRequest;
use Bavix\Processors\Dispatcher;
use Bavix\Processors\Factory;
use Psr\Http\Message\ServerRequestInterface;

class Manager extends \Bavix\Processors\Manager
{

    /**
     * @var string[]
     */
    protected $middleware = [];

    /**
     * @var Builder
     */
    protected $builder;

    /**
     * @var mixed
     */
    protected $handle;

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

    /**
     * @param string $class
     *
     * @return Middleware
     */
    protected function middleware(string $class): Middleware
    {
        return new $class();
    }

    /**
     * @param string|null $action
     *
     * @return string
     */
    public function next(string $action = null): string
    {
        foreach ($this->middleware as $middleware)
        {
            $handle = $this
                ->middleware($middleware)
                ->handle($this, $this->request());

            if ($handle)
            {
                $this->setHandle($handle);
                break;
            }
        }

        return parent::next($action);
    }

    /**
     * @param mixed $handle
     *
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * @param string|null $action
     *
     * @return mixed
     */
    public function handle(string $action = null)
    {
        if ($this->handle)
        {
            return $this->handle;
        }

        return parent::handle($action);
    }

    /**
     * @return ServerRequest
     */
    public function request(): ServerRequestInterface
    {
        return parent::request();
    }

}
