<?php

$root = dirname(__DIR__);
include_once $root . '/vendor/autoload.php';

// whoops
$whoops = new \Whoops\Run();
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
// /whoops

/**
 * @var \Bavix\Builder\Builder $builder
 */
$builder = new \Project\Builder($root);

/**
 * @var \Bavix\Processors\Kernel
 */
$kernel = new \Bavix\Processors\Kernel(factory(), $builder->cookies());

/**
 * load bundles on kernel
 */
$kernel->setBundles(config('bundles'));

/**
 * terminate kernel with request
 */
$kernel->terminate($builder->request());
