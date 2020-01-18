<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class ComputerLesson extends Model
{
    protected $fillable = [
        'title', 'body', 'status', 'user_id',
    ];
}
