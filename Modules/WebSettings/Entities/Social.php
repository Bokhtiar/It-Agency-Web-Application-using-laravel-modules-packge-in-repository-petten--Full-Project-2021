<?php

namespace Modules\WebSettings\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Social extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone', 'email', 'facebook', 'twitter', 'linkdin', 'google', 'instagram',
    ];

    protected static function newFactory()
    {
        return \Modules\WebSettings\Database\factories\SocialFactory::new();
    }
}
