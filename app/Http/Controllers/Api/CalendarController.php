<?php

namespace App\Http\Controllers\Api;

use App\Model\Calendar;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CalendarController extends Controller
{
    public function list(): string
    {
        return Calendar::query()
            ->get()
            ->toJson();
    }

    public function get(int $id): string
    {
        return Calendar::where('userId', '=', $id)->get()
            ->toJson();
    }
}
