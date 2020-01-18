<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
    protected $fillable = [
        'reg', 'name', 'roll', 'year', 'semester', 'subone', 'subtwo', 'subthree', 'pass',
    ];
}
