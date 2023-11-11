<?php

namespace Directee\Interfaces\Data;

interface Item extends Identiable, Arrayable
{
    public function getAttribute(string $name);
    public function setAttribute(string $name, $value): void;
}
