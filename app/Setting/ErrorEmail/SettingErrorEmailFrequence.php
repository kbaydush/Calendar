<?php

declare(strict_types = 1);

namespace App\Setting\ErrorEmail;

final class SettingErrorEmailFrequence implements \JsonSerializable
{
    /** @var bool */
    private $isDirect;

    /** @var int */
    private $period;

    /** @var string */
    private $periodType;

    /** @var string */
    private $time;

    public function __construct(array $data)
    {
        $this->isDirect   = $data['isDirect'];
        $this->period     = $data['period'];
        $this->periodType = $data['periodType'];
        // @TODO: time VO
        $this->time = \DateTimeImmutable::createFromFormat('Y-m-d H:i', '2000-01-01 ' . $data['time']);
    }

    public function jsonSerialize(): array
    {
        return [
            'isDirect'   => $this->isDirect,
            'period'     => $this->period,
            'periodType' => $this->periodType,
            'time'       => $this->time->format('H:i'),
        ];
    }
}
