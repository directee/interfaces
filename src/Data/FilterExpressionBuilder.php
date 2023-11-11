<?php

namespace Directee\Interfaces\Data;

interface FilterExpressionBuilder
{
    static function eq(string $attr, $value): FilterExpression;
    static function ne(string $attr, $value): FilterExpression;
    static function gt(string $attr, $value): FilterExpression;
    static function gte(string $attr, $value): FilterExpression;
    static function lt(string $attr, $value): FilterExpression;
    static function lte(string $attr, $value): FilterExpression;

    static function in(string $attr, ...$values): FilterExpression;
    static function nin(string $attr, ...$values): FilterExpression;

    static function contains(string $attr, $value): FilterExpression;
    static function startWith(string $attr, $value): FilterExpression;
    static function endWith(string $attr, $value): FilterExpression;

    static function between(string $attr, $min, $max): FilterExpression;

    static function not(FilterExpression $expr): FilterExpression;
    static function and(FilterExpression ...$expr): FilterExpression;
    static function or(FilterExpression ...$expr): FilterExpression;

    static function parse(string $expression): FilterExpression;
}
