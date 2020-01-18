<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class AcademicMember extends Model
{
     protected $fillable = [
        'name', 'designation', 'specialize', 'email', 'phone', 'image',
    ];
}
