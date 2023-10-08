<?php

namespace Directee\Interfaces;

use Psr\Log\LoggerInterface;

/**
 * Directee Application Core
 *
 * Core services for extensions
 *
 */
interface Core
{
    function commandBus(): Pass\CommandBus;
    function eventBus(): Pass\EventBus;
    function logger(): LoggerInterface;

    // function dataRepository(): Data\DataRepository;

    function httpFactory(): Http\HttpFactory;
    // function basePath(): string;
    // function authInfo(): Auth\AuthInfo;
}
