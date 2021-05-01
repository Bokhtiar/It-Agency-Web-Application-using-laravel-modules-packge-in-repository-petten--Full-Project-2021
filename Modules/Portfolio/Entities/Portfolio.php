<?php

namespace Modules\Portfolio\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;


    protected $fillable = [
        'cover_image', 'category_id', 'images', 'title', 'slug', 'company_name', 'start_date', 'end_date', 'url', 'description', 'status',
    ];


    protected static function newFactory()
    {
        return \Modules\Portfolio\Database\factories\PortfolioFactory::new();
    }
}
