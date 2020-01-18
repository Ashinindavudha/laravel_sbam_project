<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $guarded = ['id'];
    public function tags() 
    {

    	//Single Post can be Many Tag / one post can has many Tag
    	//This Relasionship connected with Tag.php and post_tags table
    	//return $this->belongsToMany('App\Model\user\Tag', 'post_tags')->withTimestamps();
        return $this->belongsToMany('App\Model\user\Tag', 'post_tags')->withTimestamps();
    }

    public function categories() 
    {
    	//This Relasionship connected with Category.php and category_posts table
    	//return $this->belongsToMany('App\Model\user\Category', 'category_posts')->withTimestamps();
        return $this->belongsToMany('App\Model\user\Category', 'category_posts')->withTimestamps();
    }

    

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
