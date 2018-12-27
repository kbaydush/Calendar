<?php

declare(strict_types = 1);

namespace App\Setting\ErrorEmail;

use App\Setting\Setting;

final class SettingErrorEmail implements Setting
{
    /** @var SettingErrorEmailTypes */
    private $types;

    /** @var string */
    private $from;

    /** @var string */
    private $to;

    /** @var string */
    private $subject;

    /** @var string */
    private $messageHeader;

    /** @var string */
    private $messageFooter;

    /** @var SettingErrorEmailFrequence */
    private $frequence;

    public function __construct(array $data)
    {
        $this->types         = new SettingErrorEmailTypes($data['types']);
        $this->from          = $data['from'];
        $this->to            = $data['to'];
        $this->subject       = $data['subject'];
        $this->messageHeader = $data['messageHeader'];
        $this->messageFooter = $data['messageFooter'];
        $this->frequence     = new SettingErrorEmailFrequence($data['frequence']);
    }

    public function jsonSerialize(): array
    {
        return [
            'types'         => $this->types->jsonSerialize(),
            'from'          => $this->from,
            'to'            => $this->to,
            'subject'       => $this->subject,
            'messageHeader' => $this->messageHeader,
            'messageFooter' => $this->messageFooter,
            'frequence'     => $this->frequence->jsonSerialize(),
        ];
    }
}
