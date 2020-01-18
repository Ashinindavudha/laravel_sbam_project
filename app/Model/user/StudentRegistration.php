<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
    protected $fillable = [
        'name', 'age', 'parent', 'preceptor', 'nativetwon', 'presenaddress', 'class', 'quality', 'phone', 'image',
    ];
}

