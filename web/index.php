<?php

$root = dirname(__DIR__);
include_once $root . '/vendor/autoload.php';

/**
 * @var \App\Builder $builder
 */
$builder = new \App\Builder($root);

/**
 * @var \Bavix\Processors\Kernel
 */
$kernel  = new \Bavix\Processors\Kernel($builder->factory());

/**
 * load bundles on kernel
 */
$kernel->setBundles(config('bundles'));

/**
 * terminate kernel with request
 */
$kernel->terminate($builder->request());
