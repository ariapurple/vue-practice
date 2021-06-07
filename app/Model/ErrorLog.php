<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ErrorLog extends Model
{
    protected $table = 'error_logs';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'request_url',
        'request_method',
        'status_code',
        'description',
        'user_agent',
        'referrer',
        'ip',
        'user_id'
    ];
    
}
