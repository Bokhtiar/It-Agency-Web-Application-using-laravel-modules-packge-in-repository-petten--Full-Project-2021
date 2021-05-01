<?php

namespace Modules\Slider\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'image', 'name','description','status',
    ];

    protected static function newFactory()
    {
        return \Modules\Slider\Database\factories\SliderFactory::new();
    }
}
