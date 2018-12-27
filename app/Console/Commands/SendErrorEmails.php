<?php

declare(strict_types = 1);

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendErrorEmails extends Command
{
    public const NAME = 'app:error-emails';

    /** @var string */
    protected $signature = self::NAME;

    /** @var string */
    protected $description = 'Send error emails';

    public function handle(): void
    {
        $this->info('Mails were sent.');
    }
}
