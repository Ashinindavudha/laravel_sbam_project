<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class HistoryDepartment extends Model
{
     protected $fillable = [
        'title', 'body', 'image', 'user_id', 'status',
    ];

     public function author() 
    {
    	//This Relasionship connected with Category.php and category_posts table
    	//return $this->belongsToMany('App\Model\user\Category', 'category_posts')->withTimestamps();
        return $this->belongsToMany('App\Model\admin\admin');
    }
}

