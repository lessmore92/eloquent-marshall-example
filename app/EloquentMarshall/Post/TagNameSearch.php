<?php
/**
 * User: Lessmore92
 * Date: 2/16/2020
 * Time: 1:24 AM
 */

namespace App\EloquentMarshall\Post;

use Illuminate\Database\Eloquent\Builder;
use Lessmore92\EloquentMarshall\Contracts\Search;

class TagNameSearch implements Search
{
    public function apply(Builder $builder, $value): Builder
    {
        return $builder->whereHas('tags', function ($query) use ($value) {
            return $query->where('name', 'like', '%' . $value . '%');
        });
    }
}
