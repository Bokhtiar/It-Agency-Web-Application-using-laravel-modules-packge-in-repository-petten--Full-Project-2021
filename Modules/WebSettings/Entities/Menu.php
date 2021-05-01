<?php

namespace Modules\WebSettings\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'link', 'description', 'position', 'sl', 'footerSl', 'footerCulUnderMenu', 'colums',
    ];

    protected static function newFactory()
    {
        return \Modules\Settings\Database\factories\MenuFactory::new();
    }
}
