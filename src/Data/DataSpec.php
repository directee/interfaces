<?php

namespace Directee\Interfaces\Data;

interface DataSpec
{
    public function resource(): string;
    public function keyName(): string;
    public function attributeNames(): array;
}
