<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ExpenseType extends Model
{
    protected $table = 'expense_types';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
    
    public function claimFormData()
    {
        return $this->hasMany('App\Model\ClaimFormData');
    }
    
}
