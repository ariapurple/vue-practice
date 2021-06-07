<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    const AQUARIUS    = 1; // 水瓶座1.21-2.19
    const PISCES      = 2; // 雙魚座 2.20-3.20
    const ARIES       = 3; // 牡羊(白羊)座3.21-4.19
    const TAURUS      = 4; // 金牛座4.20-5.20
    const GEMINI      = 5; // 雙子座5.21-6.21
    const CANCER      = 6; // 巨蟹座6.22-7.22
    const LEO         = 7; // 獅子座7.23-8.22
    const VIRGO       = 8; // 處女座8.23-9.22
    const LIBRA       = 9; // 天秤座9.23-10.23
    const SCORPIO     = 10; // 天蠍座10.24-11.21
    const SAGITTARIUS = 11; // 射手(人馬)座11.22-12.20
    const CAPRICORN   = 12; // 摩羯座12.21-1.20
    
    protected $table = 'users';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'employee_id',
        'password',
        'name',
        'birthday',
        'constellation',
        'salary',
        'enabled',
        'disabled_by'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    public function companies()
    {
        return $this->belongsToMany('App\Model\Company', 'company_has_user');
    }
    
    public function permissions()
    {
        return $this->belongsToMany('App\Model\Permission', 'user_has_permission');
    }
    
    public function leaves()
    {
        return $this->hasmany('App\Model\Leave');
    }
    
    public function payrolls()
    {
        return $this->hasMany('App\Model\Payroll');
    }
    
    public function rosters()
    {
        return $this->hasMany('App\Model\Roster');
    }
    
    public function userTransferHistories()
    {
        return $this->hasMany('App\Model\UserTransferHistory');
    }
}
