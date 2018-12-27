<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /** @var bool */
    public $timestamps = false;

    /** @var string[] */
    protected $fillable = [
        'id',
        'userId',
        'title',
        'body',
    ];
}



