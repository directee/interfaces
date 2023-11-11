<?php

namespace Directee\Interfaces\Data;

interface FilterExpression
{
    static function eq(string $attr, $value): self;
    static function ne(string $attr, $value): self;
    static function gt(string $attr, $value): self;
    static function gte(string $attr, $value): self;
    static function lt(string $attr, $value): self;
    static function lte(string $attr, $value): self;

    static function in(string $attr, ...$values): self;
    static function nin(string $attr, ...$values): self;

    static function contains(string $attr, $value): self;
    static function startWith(string $attr, $value): self;
    static function endWith(string $attr, $value): self;

    static function between(string $attr, $min, $max): self;

    static function not(FilterExpression $expr): self;
    static function and(FilterExpression ...$expr): self;
    static function or(FilterExpression ...$expr): self;

    static function parse(string $expression): self;
    function generate(object $walker): mixed;
}
