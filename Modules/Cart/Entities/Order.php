<?php

namespace Modules\Cart\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public function product(){
        return $this->belongsTo(Product::class);
    }

    protected $fillable = [
        'name', 'phone', 'email','islamibank','islamibank_transection_id','brakbank','brakbank_transection_id', 'status', 'sendDoc'
    ];

    protected static function newFactory()
    {
        return \Modules\Cart\Database\factories\OrderFactory::new();
    }
}
