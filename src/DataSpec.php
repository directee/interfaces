<?php

namespace Directee\Interfaces;

interface DataSpec
{
    public function resource(): string;
    public function keyName(): string;
    public function attributeNames(): array;
}
