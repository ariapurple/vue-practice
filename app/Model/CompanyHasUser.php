<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompanyHasUser extends Model
{
    protected $table = 'company_has_user';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id',
        'user_id'
    ];
    
}
