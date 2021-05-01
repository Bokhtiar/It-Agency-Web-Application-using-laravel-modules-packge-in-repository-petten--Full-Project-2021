<?php

namespace Modules\Role\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use Modules\Permission\Entities\Permission;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function permission()
    {
       return $this->hasOne(Permission::class);
    }

    // public function user_permission() //this is user_permission method
    // {
    //     return $this->hasOne(User::class);
    // }

    public function user()
    {
        return $this->hasMnay(User::class);
    }


    protected static function newFactory()
    {
        return \Modules\Role\Database\factories\RoleFactory::new();
    }
}
