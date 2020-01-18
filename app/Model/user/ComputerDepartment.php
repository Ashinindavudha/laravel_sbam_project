<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class ComputerDepartment extends Model
{
    protected $fillable = [
        'title', 'body', 'image', 'status',
    ];
}
