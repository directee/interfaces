<?php

namespace Directee\Interfaces;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

interface HttpFactory extends
    RequestFactoryInterface,
    ResponseFactoryInterface,
    StreamFactoryInterface
{
}
