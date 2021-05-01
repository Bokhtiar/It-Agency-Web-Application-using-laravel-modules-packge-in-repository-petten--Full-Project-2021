<?php

namespace Modules\WebSettings\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 'phone', 'twitter', 'facebook', 'instagram', 'skype', 'linkdin', 'company_name', 'compnay_address',
    ];

    protected static function newFactory()
    {
        return \Modules\WebSettings\Database\factories\TopHeaderFactory::new();
    }
}

