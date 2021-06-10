<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kode extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'kodepeserta';


     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'no', 'price'
    ];
}
