<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'song_name' , 'song_path' , 'song_image_path', 'view', 'like', 'post_time', 'description' , 'style'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public $table = "tbl_songs";

    public $timestamps = false;
}
