<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CheckTime extends Model
{
    const CHECK_OUT = 1;
    const CHECK_IN = 2;
    
    protected $table = 'check_time';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'roster_id',
        'check_time',
        'type'
    ];
    
}
