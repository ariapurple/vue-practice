<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserTransferHistory extends Model
{
    protected $table = 'user_transfer_history';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'comapny_id'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
    
    public function company()
    {
        return $this->belongsTo('App\Model\Company');
    }
    
}
