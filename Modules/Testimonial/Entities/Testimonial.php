<?php

namespace Modules\Testimonial\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'user_id', 'image','designation', 'description', 'status',
    ];

    protected static function newFactory()
    {
        return \Modules\Testimonial\Database\factories\TestimonialFactory::new();
    }
}

