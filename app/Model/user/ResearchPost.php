<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class ResearchPost extends Model
{
    protected $fillable = [
        'name', 'title', 'body', 'image', 'status',
    ];

    public function user($value='') {
    	return $this->beLongsTo('App\Model\admin\admin');
    }
}
