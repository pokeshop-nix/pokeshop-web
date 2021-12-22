<?php

namespace App\Models;

abstract class Model
{
    abstract public static function getAll(): array;

    abstract public static function create(array $data): Model;

    abstract public static function findOne(int $id): Model;

    abstract public static function update(array $data, int $id): Model;

    abstract public static function destroy(int $id): bool;
}
