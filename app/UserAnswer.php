<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    protected $table = 'user_answers';

    protected $fillable = [
        'no_soal',
        'userid',
        'soalid',
        'tries',
        'last_answer',
        'lock' 
    ];

    protected $casts = [
        'correct' => 'boolean',
        'lock' => 'boolean',
    ];
}
