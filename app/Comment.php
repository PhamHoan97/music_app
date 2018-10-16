<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content', 'comment_time' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public $table = "tbl_comments";

    public $timestamps = false;
}
