<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkNotification extends Model
{
    protected $fillable = [
            'id_notification', 'id_account', 'seen'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public $table = "rlt_notifications";

    public $timestamps = false;
}
