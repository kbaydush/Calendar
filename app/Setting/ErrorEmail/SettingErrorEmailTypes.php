<?php

declare(strict_types = 1);

namespace App\Setting\ErrorEmail;

use App\Setting\ErrorEmail\Type\Smtp;

final class SettingErrorEmailTypes implements \JsonSerializable
{
    /** @var Smtp */
    private $smtp;

    public function __construct(array $data)
    {
        foreach ($data as $type) {
            if (!isset($type['type'])) {
                throw new \InvalidArgumentException('Missing type key.');
            }

            switch ($type['type']) {
                case 'smtp':
                    $this->smtp = new Smtp($type);
                    continue;
                default:
                    throw new \InvalidArgumentException(\sprintf('Invalid email type "%s".', $type['type']));
            }
        }
    }

    public function jsonSerialize(): array
    {
        return [
            $this->smtp->jsonSerialize(),
        ];
    }
}
