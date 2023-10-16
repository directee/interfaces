<?php

namespace Directee\Interfaces\Data;

interface Item extends Identiable, Arrayable
{
    public function hasId(): bool;
    public function setId($id);
    public function getAttribute(string $name);
    public function setAttribute(string $name, $value): void;
}
