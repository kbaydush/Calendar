<?php

declare(strict_types = 1);

namespace App\Setting;

interface Setting extends \JsonSerializable
{
    public const ERROR_EMAIL         = 'ErrorEmailSettings';
    public const ERROR_EMAIL_SENT_ON = 'ErrorEmailSentOn';
}
