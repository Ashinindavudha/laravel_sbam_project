<?php

namespace App\Model\admin;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class admin extends Authenticatable
{
	use Notifiable;

    public function roles()

    {
        return $this->belongsToMany('App\Model\admin\Role');
    }


    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function student($value='') {
        return $this->hasMany('App\Model\user\StudentList');
    }

    public function history()
    {
        return $this->beLongsTo('App\Model\user\HistoryDepartment');
    }
}
