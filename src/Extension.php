<?php

namespace DirecteeInterface;

interface Extension
{
    function register(Core $core): void;

    function httpRouter(): httpRouter;
}
