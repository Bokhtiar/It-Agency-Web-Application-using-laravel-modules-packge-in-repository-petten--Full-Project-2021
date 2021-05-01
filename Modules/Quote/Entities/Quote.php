<?php

namespace Modules\Quote\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'description', 'project_name', 'budget', 'start_date', 'end_date', 'doc', 'images', 'status',
    ];

    protected static function newFactory()
    {
        return \Modules\Quote\Database\factories\QuoteFactory::new();
    }
}
