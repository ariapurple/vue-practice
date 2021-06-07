<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClaimFormData extends Model
{
    protected $table = 'claim_form_data';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'claim_form_id',
        'expense_type_id',
        'name',
        'price',
        'currency_id',
        'qty',
        'image',
        'bill_date'
    ];
    
    public function claimForm()
    {
        return $this->belongsTo('App\Model\ClaimForm');
    }
    
    public function expenseType ()
    {
        return $this->belongsTo('App\Model\ExpenseType');
    }
    
    public function currency()
    {
        return $this->belongsTo('App\Model\Currency');
    }
    
}
