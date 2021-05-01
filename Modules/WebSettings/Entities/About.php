<?php

namespace Modules\WebSettings\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'image', 'title', 'description',
    ];

    protected static function newFactory()
    {
        return \Modules\WebSettings\Database\factories\AboutFactory::new();
    }
}
