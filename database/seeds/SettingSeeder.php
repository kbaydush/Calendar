<?php

declare(strict_types = 1);

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class SettingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'name' => App\Setting\Setting::ERROR_EMAIL,
                'json' => \json_encode([
                    'types' => [
                        [
                            'type'     => 'smtp',
                            'server'   => 'www.example.com',
                            'port'     => 587,
                            'tls'      => true,
                            'user'     => 'john.doe',
                            'password' => 'foobar',
                        ],
                    ],
                    'from'          => 'John',
                    'to'            => 'Joe',
                    'subject'       => 'Error report',
                    'messageHeader' => "Hi Joe,\nsee the errors:\n",
                    'messageFooter' => "Regards,\nJohn",
                    'frequence'     => [
                        'isDirect'   => true,
                        'period'     => 2,
                        'periodType' => 'day',
                        'time'       => (new DateTimeImmutable())->setTime(12, 0, 0)->format('H:i'),
                    ],
                ]),
            ],
            [
                'name' => App\Setting\Setting::ERROR_EMAIL_SENT_ON,
                'json' => \json_encode([
                    'timestamp' => (new DateTimeImmutable())->sub(new DateInterval('PT1H'))->format(DateTime::ISO8601),
                ]),
            ],
        ]);
    }
}
