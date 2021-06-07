<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
    const CREATE = 1;
    const UPDATE = 2;
    const DELETE = 3;
    
    protected $table = 'access_logs';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'page_id',
        'action_type'
    ];
    
}
