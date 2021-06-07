<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PageHasPermission extends Model
{
    protected $table = 'page_has_permission';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'permission_id',
        'page_id'
    ];
    
}
