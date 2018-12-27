<?php

declare(strict_types = 1);

return [
    'default' => \env('DB_CONNECTION', 'mysql'),

    'connections' => [
        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => \env('DB_DATABASE', \database_path('database.sqlite')),
            'prefix'   => '',
        ],

        'test_db' => [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ],

        'mysql' => [
            'driver'         => 'mysql',
            'host'           => \env('DB_HOST', '127.0.0.1'),
            'port'           => \env('DB_PORT', '3306'),
            'database'       => \env('DB_DATABASE', 'forge'),
            'username'       => \env('DB_USERNAME', 'forge'),
            'password'       => \env('DB_PASSWORD', ''),
            'unix_socket'    => \env('DB_SOCKET', ''),
            'charset'        => 'utf8mb4',
            'collation'      => 'utf8mb4_unicode_ci',
            'prefix'         => '',
            'prefix_indexes' => true,
            'strict'         => true,
            'engine'         => null,
        ],
    ],

    'migrations' => 'migrations',

    'redis' => [
        'client' => 'predis',

        'default' => [
            'host'     => \env('REDIS_HOST', '127.0.0.1'),
            'password' => \env('REDIS_PASSWORD', null),
            'port'     => \env('REDIS_PORT', 6379),
            'database' => \env('REDIS_DB', 0),
        ],

        'cache' => [
            'host'     => \env('REDIS_HOST', '127.0.0.1'),
            'password' => \env('REDIS_PASSWORD', null),
            'port'     => \env('REDIS_PORT', 6379),
            'database' => \env('REDIS_CACHE_DB', 1),
        ],
    ],
];
