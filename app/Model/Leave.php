<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    const NO_PAY_LEAVE = 1;
    const ANNUAL_LEAVE = 2;
    const SICK_LEAVE = 3;
    
    protected $table = 'leaves';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'apply_date',
        'apply_type',
        'approved',
        'approved_by'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
    
}
