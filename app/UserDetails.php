<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $fillable = [
        'id_account', 'name', 'avatar_path', 'number_my_follow', 'number_my_song', 'cover_path',
        'birthday', 'phone_number', 'more_infor'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public $table = "tbl_account_details";

    public $timestamps = false;
}
