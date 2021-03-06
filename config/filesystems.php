<?php

declare(strict_types = 1);

return [
    'default' => \env('FILESYSTEM_DRIVER', 'local'),

    'cloud' => \env('FILESYSTEM_CLOUD', 's3'),

    'disks' => [
        'local' => [
            'driver' => 'local',
            'root'   => \storage_path('app'),
        ],

        'public' => [
            'driver'     => 'local',
            'root'       => \public_path('uploads'),
            'url'        => \env('APP_URL') . '/uploads',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key'    => \env('AWS_ACCESS_KEY_ID'),
            'secret' => \env('AWS_SECRET_ACCESS_KEY'),
            'region' => \env('AWS_DEFAULT_REGION'),
            'bucket' => \env('AWS_BUCKET'),
            'url'    => \env('AWS_URL'),
        ],
    ],
];
