<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClaimFormType extends Model
{
    protected $table = 'claim_form_type';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
    
    public function claimForm()
    {
        return $this->hasMany('App\Model\ClaimForm');
    }
    
}
