<?php

namespace DirecteeInterface;

interface DataItem
{
    public function resource(): string;

    public function keyName(): string;
    public function hasId(): bool;
    public function getId();
    public function setId($id);

    public function getAttribute(string $name);
    public function setAttribute(string $name, $value): void;
    public function attributes(): array;

    public function asArray(): array;
    public function fromArray(array $data): void;
}
