<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Model\Post;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function list(): string
    {
        return Post::query()
            ->get()
            ->toJson();
    }

    public function get(int $id): string
    {
        return Post::findOrFail($id)
            ->makeHidden('selected')
            ->toJson();
    }

    public function edit(int $id, Request $request): array
    {
        $module = Post::findOrFail($id);

        $module->update($request->all());

        $module->save();

        return [
            'message' => 'Logo was uploaded.',
        ];
    }
}

