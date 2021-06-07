<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'notice';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'send_time',
        'status'
    ];
    
}
