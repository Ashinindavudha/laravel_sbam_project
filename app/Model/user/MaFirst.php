<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class MaFirst extends Model
{
    protected $fillable = [
        'day', 'time', 'semester', 'subject', 'lecturer',
    ];
}
