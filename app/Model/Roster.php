<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    protected $table = 'roster';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'work_place_id',
        'duty_date',
        'attendances',
        'lunch_time'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
    
    public function workPlace()
    {
        return $this->hasOne('App\Model\WorkPlace');
    }
    
}
