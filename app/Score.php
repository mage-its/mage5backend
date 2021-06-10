<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class score extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='scores';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'timid',
        'pos',
        'score',
        'nyawa',
        'elapsed_time'
    ];
}
