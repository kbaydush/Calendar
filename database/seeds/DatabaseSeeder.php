<?php

declare(strict_types = 1);

use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(ModuleSeeder::class);
        $this->call(ErrorSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(CalendarSeeder::class);
    }
}
