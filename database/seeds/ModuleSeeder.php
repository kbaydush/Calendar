<?php

declare(strict_types = 1);

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class ModuleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('modules')->insert([
            [
                'name'         => 'module1',
                'friendlyName' => 'User 1',
                'databaseName' => 'module1',
                'isEnabled'    => true,
                'isActive'     => true,
            ],
            [
                'name'         => 'module2',
                'friendlyName' => 'User 2',
                'databaseName' => 'module2',
                'isEnabled'    => true,
                'isActive'     => false,
            ],
            [
                'name'         => 'module3',
                'friendlyName' => 'User 3',
                'databaseName' => 'module3',
                'isEnabled'    => true,
                'isActive'     => false,
            ],
            [
                'name'         => 'module4',
                'friendlyName' => 'User 4',
                'databaseName' => 'module4',
                'isEnabled'    => false,
                'isActive'     => false,
            ],
            [
                'name'         => 'module5',
                'friendlyName' => 'User 5',
                'databaseName' => 'module5',
                'isEnabled'    => false,
                'isActive'     => false,
            ],
        ]);
    }
}
