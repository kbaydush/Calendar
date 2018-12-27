<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Api;

use App\Model\Setting;
use App\Setting\SettingFactory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

final class SettingController extends Controller
{
    public function get(string $name): array
    {
        return (new SettingFactory())
            ->create(Setting::where('name', $name)->firstOrFail())
            ->jsonSerialize();
    }

    public function edit(string $name, Request $request): void
    {
        Setting::firstOrCreate(
            ['name' => $name],
            $request->all()
        );
    }
}
