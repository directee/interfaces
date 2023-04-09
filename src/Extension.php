<?php

namespace Directee\Interfaces;

interface Extension
{
    function register(Core $core): void;

    function httpRouter(): httpRouter;
}
