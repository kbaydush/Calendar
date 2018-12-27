<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

final class LogoController extends Controller
{
    public function upload(Request $request): Response
    {
        if (!$request->hasFile('file') || !$request->file('file')->isValid()) {
            return \response(['message' => 'Incorrect file. Please try upload other file.'], Response::HTTP_BAD_REQUEST);
        }

        try {
            $request->file('file')->storePubliclyAs('', 'client-logo.png', 'public');
        } catch (\Exception $e) {
            return \response(['message' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }

        return \response(['message' => 'Logo was uploaded.']);
    }
}
