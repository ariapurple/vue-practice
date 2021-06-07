<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WorkPlace extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ibeacon_uuid',
        'major',
        'minor',
        'name'
    ];
    
    public function roster()
    {
        return $this->belongsTo('App\Model\Roster');
    }
    
}
