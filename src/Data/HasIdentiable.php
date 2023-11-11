<?php

namespace Directee\Interfaces\Data;

trait HasIdentiable
{
    public readonly string $type;
    public string $id = '';

    public function getType(): string
    {
        return $this->type;
    }

    private function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function hasId(): bool
    {
        return (bool) $this->id;
    }
}
