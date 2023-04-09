<?php

namespace Directee\Interface;

interface Extension
{
    function register(Core $core): void;

    function httpRouter(): httpRouter;
}
