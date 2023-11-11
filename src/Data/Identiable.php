<?php

namespace Directee\Interfaces\Data;

interface Identiable
{
    public function getType(): string;
    public function getId(): string;
    public function hasId(): bool;
}
