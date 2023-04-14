<?php

namespace Directee\Interfaces;

use Directee\Interfaces\Http\HttpRouter;

final class ExtensionManifest
{
    private string $name;
    private string $description;
    private HttpRouter $apiRouter;
    private array $services;

    public function __construct()
    {
        $this->apiRouter = new HttpRouter();
        $this->services = [];
    }

    public function name(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->name = $description;
        return $this;
    }

    public function apiRouter(): HttpRouter
    {
        return $this->apiRouter;
    }

    public function addApiHandler(string $method, string $target, $handler): self
    {
        $this->apiRouter->addHandler($method, $target, $handler);
        return $this;
    }

    public function addApiMiddleware($middleware): self
    {
        $this->apiRouter->addMiddleware($middleware);
        return $this;
    }

    public function setApiBasePath(string $basePath): self
    {
        $this->apiRouter->setBasePath($basePath);
        return $this;
    }

    public function services(): array
    {
        return $this->services;
    }

    public function addService(string $service): self
    {
        $this->services[] = $service;
        return $this;
    }
}
