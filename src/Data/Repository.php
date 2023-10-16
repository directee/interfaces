<?php

namespace Directee\Interfaces\Data;

interface Repository
{
    public function createItem(string $type, array $initialData = []): Item;
    public function createQuery(): Query;

    public function find(string $type, string $id): Item;

    public function query(string $type, Query $query): array;
    public function count(string $type, Query $query): int;

    public function save(Item $item): void;
    public function delete(Item $item): void;
}
