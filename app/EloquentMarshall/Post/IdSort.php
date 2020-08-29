<?php
/**
 * User: Lessmore92
 * Date: 2/16/2020
 * Time: 1:29 AM
 */

namespace App\EloquentMarshall\Post;

use Illuminate\Database\Eloquent\Builder;
use Lessmore92\EloquentMarshall\Contracts\Sort;

class IdSort implements Sort
{
    public function apply(Builder $builder, $order): Builder
    {
        return $builder->orderBy('id', $order);
    }
}
