<?php

namespace Modules\WebSettings\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'image', 'designation', 'status',
    ];

    protected static function newFactory()
    {
        return \Modules\WebSettings\Database\factories\TeamFactory::new();
    }
}
