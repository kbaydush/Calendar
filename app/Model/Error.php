<?php

declare(strict_types = 1);

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

final class Error extends Model
{
    /** @var string[] */
    protected $fillable = [
        'idModule',
        'message',
        'isSent',
    ];
}
