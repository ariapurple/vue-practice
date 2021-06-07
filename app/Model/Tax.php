<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    protected $table = 'taxes';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'payroll_id',
        'paid_tax'
    ];
    
    public function payroll()
    {
        return $this->belongsTo('App\Model\Payroll');
    }
    
}
