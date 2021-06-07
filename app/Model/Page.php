<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'parent_id'
    ];
    
    public function parent()
    {
        return $this->belongsTo('App\Model\Page');
    }
    
    public function children()
    {
        return $this->hasMany('App\Model\Page');
    }
    
    public function permissions()
    {
        return $this->belongsToMany('App\Model\Permission', 'page_has_permission');
    }
    
}
