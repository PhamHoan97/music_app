<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = [
        'id_account', 'id_follow'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public $table = "tbl_follows";

    public $timestamps = false;
}
