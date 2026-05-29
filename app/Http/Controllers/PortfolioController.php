<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    public function projects()
    {
        return response()->json(DB::table('projects')->get());
    }

    public function nodes()
    {
        return response()->json(DB::table('nodes')->get());
    }

    public function servers()
    {
        return response()->json(DB::table('servers')->get());
    }

    public function metrics()
    {
        return response()->json(DB::table('metrics')->get());
    }
}
