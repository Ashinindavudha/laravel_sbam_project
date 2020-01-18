<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class MultiplUpload extends Model
{
    protected $fillable = [
        'title', 'body', 'image_name', 'status',
    ];

}
