<?php

namespace Modules\Expenses\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'amount', 'description',
    ];

    protected static function newFactory()
    {
        return \Modules\Expenses\Database\factories\ExpenseFactory::new();
    }
}
