<?php

declare(strict_types = 1);

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

final class Setting extends Model
{
    /** @var string[] */
    protected $fillable = [
        'name', 'json',
    ];
}
