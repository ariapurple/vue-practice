<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    protected $table = 'payrolls';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'pay_date',
        'salary',
        'approved',
        'approved_by'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
    
    public function taxes()
    {
        return $this->hasMany('App\Model\Tax');
    }
    
}
