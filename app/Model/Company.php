<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
    
    public function user()
    {
        return $this->belongsToMany('App\Model\User', 'company_has_user');
    }
    
    public function userTransferHistories()
    {
        return $this->hasMany('App\Model\UserTransferHistory');
    }
}
