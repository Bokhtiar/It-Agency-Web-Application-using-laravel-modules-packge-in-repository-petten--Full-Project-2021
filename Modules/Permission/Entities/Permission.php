<?php

namespace Modules\Permission\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Role\Entities\Role;
use Illuminate\Http\Request;

class Permission extends Model
{
    use HasFactory;
    protected $fillable =[
        'role_id', 'permission',
    ];

    protected $casts  = [
        'permission'=>'json'
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    protected static function newFactory()
    {
        return \Modules\Permission\Database\factories\PermissionFactory::new();
    }
}
