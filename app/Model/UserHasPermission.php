<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserHasPermission extends Model
{
    protected $table = 'user_has_permission';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'permission_id',
        'user_id'
    ];
    
}
