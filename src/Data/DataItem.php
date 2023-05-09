<?php

namespace Directee\Interfaces\Data;

interface DataItem
{
    public function type(): string;

    public function hasId(): bool;
    public function getId();
    public function setId($id);

    public function getAttribute(string $name);
    public function setAttribute(string $name, $value): void;
    public function attributes(): array;

    public function fromArray(array $data): void;
}
