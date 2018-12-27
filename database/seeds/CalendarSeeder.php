<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calendars')->insert([
            [
                'id'         => '1',
                'userId' => '1',
                'timestamp' => '2010-06-19 10:00:00',
                'event' => 'Interview for PHP/Laravel',
                'body'    => 'Technical int',
            ],
            [
                'id'         => '2',
                'userId' => '2',
                'timestamp' => '2010-06-19 11:00:00',
                'event' => 'Interview for PHP/Laravel',
                'body'    => 'Technical int',
            ],
            [
                'id'         => '3',
                'userId' => '3',
                'timestamp' => '2010-06-19 12:00:00',
                'event' => 'Interview for PHP/Laravel',
                'body'    => 'Technical int',
            ],
            [
                'id'         => '4',
                'userId' => '4',
                'timestamp' => '2010-06-19 13:00:00',
                'event' => 'Interview for PHP/Laravel',
                'body'    => 'Technical int',
            ],
            [
                'id'         => '5',
                'userId' => '5',
                'timestamp' => '2010-06-19 14:00:00',
                'event' => 'Interview for PHP/Laravel',
                'body'    => 'Technical int',
            ],
            [
                'id'         => '6',
                'userId' => '1',
                'timestamp' => '2010-06-19 10:00:00',
                'event' => 'Interview for PHP/Laravel',
                'body'    => 'Technical int',
            ],
            [
                'id'         => '7',
                'userId' => '2',
                'timestamp' => '2010-06-19 11:00:00',
                'event' => 'Interview for PHP/Laravel',
                'body'    => 'Technical int',
            ],
            [
                'id'         => '8',
                'userId' => '3',
                'timestamp' => '2010-06-19 12:00:00',
                'event' => 'Interview for PHP/Laravel',
                'body'    => 'Technical int',
            ],
            [
                'id'         => '9',
                'userId' => '4',
                'timestamp' => '2010-06-19 13:00:00',
                'event' => 'Interview for PHP/Laravel',
                'body'    => 'Technical int',
            ],
            [
                'id'         => '10',
                'userId' => '5',
                'timestamp' => '2010-06-19 14:00:00',
                'event' => 'Interview for PHP/Laravel',
                'body'    => 'Technical int',
            ],
        ]);
    }
}
