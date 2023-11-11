<?php

namespace Directee\Interfaces\Data;

interface Query
{
    public function fields(string ...$fields): self;
    public function filter(FilterExpression $expression): self;
    public function sort(string $field, bool $descending = false): self;
    public function offset(int $value): self;
    public function limit(int $value = 20): self;
}
