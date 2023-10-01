<?php

namespace Directee\Interfaces\Data;

interface Arrayable
{
    public static function fromArray(array $array): static;
    public function asArray(): array;
}
