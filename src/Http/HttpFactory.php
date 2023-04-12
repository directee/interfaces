<?php

namespace Directee\Interfaces\Http;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\ResponseInterface;

interface HttpFactory extends
    RequestFactoryInterface,
    ResponseFactoryInterface,
    StreamFactoryInterface
{
    public function createJsonResponse($data, int $code = 200, string $reasonPhrase = ''): ResponseInterface;
    public function createTextResponse($text, int $code = 200, string $reasonPhrase = ''): ResponseInterface;
    public function createHtmlResponse($html, int $code = 200, string $reasonPhrase = ''): ResponseInterface;
}
