<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'code_category', 'name_category',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public $table = "category";

    public $timestamps = false;
}
