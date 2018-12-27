<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Api;

use App\Model\Module;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ModuleController extends Controller
{
    public function list(): string
    {
        return Module::query()
            ->get()
            ->toJson();
    }

    public function get(int $id): string
    {
        return Module::findOrFail($id)
            ->toJson();
    }

    public function edit(int $id, Request $request): array
    {
        $module = Module::findOrFail($id);

        $module->update($request->all());

        $module->save();

        return [
            'message' => 'Logo was uploaded.',
        ];
    }
}
