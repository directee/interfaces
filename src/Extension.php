<?php

namespace Directee\Interfaces;

use Psr\Container\ContainerInterface;

interface Extension extends ContainerInterface
{
    function connect(Core $core, array $settings): void;
}
