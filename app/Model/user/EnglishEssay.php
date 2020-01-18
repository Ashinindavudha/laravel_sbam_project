<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class EnglishEssay extends Model
{
    protected $fillable = [
        'name', 'title', 'body', 'image', 'status',
    ];
}
