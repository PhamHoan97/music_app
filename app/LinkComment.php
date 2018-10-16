<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkComment extends Model
{
    protected $fillable = [
        'id_song', 'id_comment', 'id_account'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public $table = "rlt_comments";

    public $timestamps = false;
}
