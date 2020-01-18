<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class EnglishGrammar extends Model
{
    protected $fillable = [
        'title', 'name', 'body', 'status',
    ];
}
