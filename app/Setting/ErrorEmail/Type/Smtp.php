<?php

declare(strict_types = 1);

namespace App\Setting\ErrorEmail\Type;

final class Smtp implements \JsonSerializable
{
    /** @var string */
    private $server;

    /** @var int */
    private $port;

    /** @var bool */
    private $tls;

    /** @var string */
    private $user;

    /** @var string */
    private $password;

    public function __construct(array $data)
    {
        $this->server   = $data['server'];
        $this->port     = $data['port'];
        $this->tls      = $data['tls'];
        $this->user     = $data['user'];
        $this->password = $data['password'];
    }

    public function jsonSerialize(): array
    {
        return [
            'type'     => 'smtp',
            'server'   => $this->server,
            'port'     => $this->port,
            'tls'      => $this->tls,
            'user'     => $this->user,
            'password' => $this->password,
        ];
    }
}
