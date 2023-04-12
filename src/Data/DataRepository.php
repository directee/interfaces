<?php

namespace Directee\Interfaces\Data;

interface DataRepository
{
    public function createSpec(string $resource): DataSpec;
    public function createItem(string $resource): DataItem;
    public function createQuery(): DataQuery;

    public function find(string $resource, string $id): DataItem;

    public function query(string $resource, DataQuery $query): array;
    public function count(string $resource, DataQuery $query): int;

    public function save(DataItem $item): void;
    public function delete(DataItem $item): void;
}
