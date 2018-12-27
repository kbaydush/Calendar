<?php

declare(strict_types = 1);

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class ErrorSeeder extends Seeder
{
    public static function data(): array
    {
        return [
            [
                'idModule'  => 1,
                'message'   => 'Very old error (already sent)',
                'isSent'    => true,
                'createdAt' => (new DateTimeImmutable())->sub(new DateInterval('P1M')),
            ],
            [
                'idModule'  => 1,
                'message'   => 'Old error (already sent)',
                'isSent'    => true,
                'createdAt' => (new DateTimeImmutable())->sub(new DateInterval('P1W')),
            ],
            [
                'idModule'  => 1,
                'message'   => 'Error 1',
                'isSent'    => false,
                'createdAt' => (new DateTimeImmutable())->sub(new DateInterval('PT3H')),
            ],
            [
                'idModule'  => 1,
                'message'   => 'Error 2',
                'isSent'    => false,
                'createdAt' => (new DateTimeImmutable())->sub(new DateInterval('PT2H')),
            ],
            [
                'idModule'  => 1,
                'message'   => 'Error 3',
                'isSent'    => false,
                'createdAt' => (new DateTimeImmutable())->sub(new DateInterval('PT1H')),
            ],
            [
                'idModule'  => 2,
                'message'   => 'Error from module 2',
                'isSent'    => false,
                'createdAt' => (new DateTimeImmutable())->sub(new DateInterval('PT1H')),
            ],
        ];
    }

    public function run(): void
    {
        DB::table('errors')->insert(self::data());
    }
}
