<?php

namespace Directee\Interfaces;

use Directee\Interfaces\Pass\CommandBus;
use Directee\Interfaces\Pass\EventBus;
use Psr\Log\LoggerInterface;

/**
 * Directee Application Core
 *
 * Common services for extensions
 *
 */
interface Core
{
    function commandBus(): CommandBus;
    function eventBus(): EventBus;
    function logger(): LoggerInterface;

    function dataRepository(): Data\DataRepository;
    function schemaRepository(): Data\DataRepository;

    function httpFactory(): Http\HttpFactory;
    function basePath(): string;
    function authInfo(): Auth\AuthInfo;
}
