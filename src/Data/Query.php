<?php

namespace Directee\Interfaces\Data;

interface Query
{
    public function addField(string $field): void;
    public function addFilterExpression(string $expr): void;
    public function addSort(string $field, string $direction): void;
    public function addPaginate(int $offset, int $limit): void;

    public function filterExpression(): string;
    public function sort(): array;
    public function fields(): array;
    public function pageOffset(): int;
    public function pageLimit(): int;
}
