<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class CourseAdvertise extends Model
{
    protected $fillable = [
        'title', 'body', 'image', 'status',
    ];
}
