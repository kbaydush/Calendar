<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Api;

use App\Model\Error;
use Illuminate\Routing\Controller;

final class ErrorController extends Controller
{
    public function list(int $idModule): array
    {
        return Error::where('idModule', $idModule)
            ->get()
            ->makeHidden('idModule')
            ->toArray();
    }
}
