<?php

namespace App\Models;

use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Collection;

abstract class CardSerializeable extends Model
{
    public abstract function makeCard(): array;

    public static function makeCardArray(Collection $objects): array {
        return $objects->map(fn($obj) => $obj->makeCard())->toArray();
    }
}
