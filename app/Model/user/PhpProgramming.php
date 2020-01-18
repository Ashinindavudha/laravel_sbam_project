<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class PhpProgramming extends Model
{
    protected $fillable = [
        'title', 'description', 'body', 'status', 'user_id',
    ];
}
