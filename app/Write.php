<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Write extends Model
{
    protected $fillable = [
        'id_account', 'id_song'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public $table = "rlt_writes";

    public $timestamps = false;
}
