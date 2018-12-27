<?php

declare(strict_types = 1);

namespace Tests\Http\Controllers\Api;

use App\Model\Model;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

/**
 * @covers \App\Http\Controllers\Api\ModuleController
 */
final class ModuleControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate');
        Artisan::call('db:seed', ['--class' => 'DatabaseSeeder']);
    }

    public function testModulesList(): void
    {
        $response = $this->get('/api/modules');

        $response->assertStatus(200);
    }

    public function testModule(): void
    {
        $response = $this->get('/api/module/1');

        $response->assertStatus(200);
    }

    public function testModuleUpdate(): void
    {
        static::assertNotSame('new name', Model::find(1)->name);

        $this->json('PUT', '/api/module/1', ['name' => 'new name']);

        static::assertSame('new name', Model::find(1)->name);
    }
}
