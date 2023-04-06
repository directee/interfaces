<?php

namespace DirecteeInterface;

use Psr\Log\LoggerInterface;

/**
 * Directee Application Core
 *
 * Common services for extensions
 *
 */
interface Core
{
    function httpFactory(): HttpFactory;
    function createHttpRouter(): HttpRouter;

    function logger(): LoggerInterface;

    function dataRepository(): DataRepository;
    function schemaRepository(): DataRepository;

    function basePath(): string;
}
