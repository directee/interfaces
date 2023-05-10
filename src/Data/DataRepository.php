<?php

namespace Directee\Interfaces\Data;

interface DataRepository
{
    public function createItem(string $type, array $initialData = []): DataItem;
    public function createQuery(): DataQuery;

    public function find(string $type, string $id): DataItem;

    public function query(string $type, DataQuery $query): array;
    public function count(string $type, DataQuery $query): int;

    public function save(DataItem $item): void;
    public function delete(DataItem $item): void;

    public function informationSchema(): DataRepository;
}
