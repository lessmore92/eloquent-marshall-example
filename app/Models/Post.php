<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $with = [
        'category',
        'tags',
    ];

    protected $fillable = [
        'category_id',
        'user_id',
        "title",
        'content',
        'slug',
        'featured_image',
        'is_featured',
        'is_published'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
