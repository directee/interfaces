<?php

namespace Directee\Interfaces\Http;

final class HttpRouter
{
    private string $basePath = '';
    private array $handlers = [];
    private array $middlewares = [];

    public function addHandler(string $method, string $target, $handler): self
    {
        $this->handlers[] = [$method, $target, $handler];
        return $this;
    }

    public function addMiddleware($middleware): self
    {
        $this->middlewares[] = $middleware;
        return $this;
    }

    public function setBasePath(string $basePath): self
    {
        $this->basePath = $basePath;
        return $this;
    }

    public function handlers(): array
    {
        return $this->handlers;
    }

    public function middlewares(): array
    {
        return $this->middlewares;
    }

    public function basePath(): string
    {
        return $this->basePath;
    }
}
