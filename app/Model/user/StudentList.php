<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class StudentList extends Model
{
    protected $fillable = [
        'reg', 'name', 'roll', 'semester', 'user_id',
    ];

    public function admins()
    {
    	return $this->beLongsTo('App\Model\admin;
\admin');
    }

    public function history()
    {
    	return $this->beLongsTo('App\Model\admin;
\admin');
    }
}
