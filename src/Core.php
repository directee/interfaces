<?php

namespace DirecteeInterface;

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

    function dataRepository(): DataRepository;
    function schemaRepository(): DataRepository;

    function basePath(): string;
}
