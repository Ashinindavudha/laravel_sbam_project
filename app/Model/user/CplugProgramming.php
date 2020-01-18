<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class CplugProgramming extends Model
{
    protected $fillable = [
        'title', 'description', 'body', 'status', 'user_id',
    ];
}
