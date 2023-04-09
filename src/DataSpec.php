<?php

namespace Directee\Interface;

interface DataSpec
{
    public function resource(): string;
    public function keyName(): string;
    public function attributeNames(): array;
}
