<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClaimForm extends Model
{
    protected $table = 'claim_form';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'claim_form_type_id',
        'approved',
        'approved_by'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
    
    public function claimFormType()
    {
        return $this->belongsTo('App\Model\ClaimFormType');
    }
    
    public function claimFormData()
    {
        return $this->hasMany('App\Model\ClaimFormData');
    }
    
}
