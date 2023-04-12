<?php

namespace Directee\Interfaces;

interface Extension
{
    function register(Core $core, ExtensionContext $context): void;

    function httpRouter(): Http\httpRouter;
}
