<?php

namespace Directee\Interface;

interface HttpRouter
{
    function register(string $method, string $target, callable $handler);
    function add(callable $middleware);
}
