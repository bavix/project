<?php

if (!function_exists('config'))
{
    function config(string $name)
    {
        global $builder;

        return $builder->config()->get($name);
    }
}

if (!function_exists('factory'))
{
    function factory()
    {
        global $builder;

        return $builder->factory();
    }
}
