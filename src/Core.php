<?php

namespace Directee\Interfaces;

use Psr\Log\LoggerInterface;

/**
 * Directee Application Core
 *
 * Common services for extensions
 *
 */
interface Core
{
    function httpFactory(): Http\HttpFactory;

    function logger(): LoggerInterface;

    function dataRepository(): Data\DataRepository;
    function schemaRepository(): Data\DataRepository;

    function basePath(): string;
    function authInfo(): Auth\AuthInfo;
}
