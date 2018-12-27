<?php

declare(strict_types = 1);

namespace App\Setting\ErrorEmailSentOn;

use App\Setting\Setting;

final class SettingErrorEmailSentOn implements Setting
{
    /** @var \DateTime */
    private $timestamp;

    public function __construct(array $data)
    {
        $this->timestamp = \DateTimeImmutable::createFromFormat(\DateTime::ISO8601, $data['timestamp']);
    }

    public function jsonSerialize(): array
    {
        return [
            'timestamp' => $this->timestamp->format(\DateTime::ISO8601),
        ];
    }
}
