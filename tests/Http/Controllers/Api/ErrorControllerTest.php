<?php

declare(strict_types = 1);

namespace Tests\Http\Controllers\Api;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

/**
 * @covers \App\Http\Controllers\Api\ErrorController
 */
final class ErrorControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate');
        Artisan::call('db:seed', ['--class' => 'DatabaseSeeder']);
    }

    /**
     * @dataProvider provideErrorsListCases
     */
    public function testErrorsList(int $idModule): void
    {
        $response = $this->get('/api/errors/' . $idModule);

        $response->assertStatus(200);

        $errors = \array_filter( // filter only errors seeded for given module
            \ErrorSeeder::data(),
            static function (array $data) use ($idModule): bool {
                return $data['idModule'] === $idModule;
            }
        );

        static::assertSame(
            \count($errors),
            \count(\json_decode($response->getContent()))
        );
    }

    public function provideErrorsListCases(): \Generator
    {
        yield [1];
        yield [2];
        yield [1000000];
    }
}
