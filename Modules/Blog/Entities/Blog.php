<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'category_id', 'tegs', 'cover_image', 'images', 'short_des', 'body', 'posted_by', 'like', 'dislike',
        'love', 'status',
    ];

    protected static function newFactory()
    {
        return \Modules\Blog\Database\factories\BlogFactory::new();
    }
}
