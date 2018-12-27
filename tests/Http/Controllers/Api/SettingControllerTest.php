<?php

declare(strict_types = 1);

namespace Tests\Http\Controllers\Api;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

/**
 * @covers \App\Http\Controllers\Api\SettingController
 */
final class SettingControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate');
        Artisan::call('db:seed', ['--class' => 'DatabaseSeeder']);
    }

    public function testGettingSetting(): void
    {
        $response = $this->get('/api/setting/ErrorEmailSettings');

        $response->assertStatus(200);
    }

    public function testUpdatingSetting(): void
    {
        $response = $this->put('/api/setting/ErrorEmailSettings');

        $response->assertStatus(200);
    }
}
