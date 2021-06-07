<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'currencies';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'rate'
    ];
    
    public function claimFormData()
    {
        return $this->hasMany('App\Model\ClaimFormData');
    }
    
}
