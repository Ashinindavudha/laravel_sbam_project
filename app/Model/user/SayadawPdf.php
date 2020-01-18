<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class SayadawPdf extends Model
{
    
    protected $fillable = [
        'title', 'body', 'pdf', 'status',
    ];
}
