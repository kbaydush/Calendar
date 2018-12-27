<?php

declare(strict_types = 1);

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

final class Module extends Model
{
    /** @var bool */
    public $timestamps = false;

    /** @var string[] */
    protected $fillable = [
        'name',
        'friendlyName',
        'databaseName',
        'isEnabled',
        'isActive',
    ];

    /** @var string[] */
    protected $casts = [
        'isEnabled' => 'boolean',
        'isActive'  => 'boolean',
    ];

    /** @var string[] */
    protected $appends = ['isSelected'];

    public function getIsSelectedAttribute(): bool
    {
        return false;
    }
}
