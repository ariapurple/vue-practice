<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
    
    public function users()
    {
        return $this->belongsToMany('App\Model\User', 'user_has_permission');
    }
    
    public function pages()
    {
        return $this->belongsToMany('App\Model\Page', 'page_has_permission');
    }
    
}
