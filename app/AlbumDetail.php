<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumDetail extends Model
{
    protected $fillable = [
        'id_album', 'id_song'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public $table = "tbl_album_details";

    public $timestamps = false;
}
