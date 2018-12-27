<?php

declare(strict_types = 1);

namespace Tests\Http;

use Tests\TestCase;

/**
 * @coversNothing
 */
final class FunctionalTest extends TestCase
{
    public function testNotFound(): void
    {
        $response = $this->get('/api/lorem-ipsum-dolor-sit-amet');

        $response->assertStatus(404);
    }
}
