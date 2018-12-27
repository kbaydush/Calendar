<?php

declare(strict_types = 1);

namespace Tests\Http\Controllers\Api;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

/**
 * @covers \App\Http\Controllers\Api\LogoController
 */
final class LogoControllerTest extends TestCase
{
    public function testUploadWithoutFile(): void
    {
        $response = $this->call('POST', '/api/logo/upload', [], [], []);

        $response->assertStatus(400);
    }

    public function testUpload(): void
    {
        $this->call('POST', '/api/logo/upload', [], [], ['file' => UploadedFile::fake()->image('client-logo.png')]);

        Storage::disk('public')->assertExists('client-logo.png');
    }
}
