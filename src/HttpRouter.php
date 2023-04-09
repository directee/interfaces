<?php

namespace Directee\Interfaces;

interface HttpRouter
{
    function register(string $method, string $target, callable $handler);
    function add(callable $middleware);
}
