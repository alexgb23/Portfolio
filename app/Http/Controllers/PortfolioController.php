<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Fachada obligatoria para tus consultas

class PortfolioController extends Controller
{
    /**
     * Devuelve todo el ecosistema del portfolio en un solo JSON estructurado.
     */
    public function getPortfolioData()
    {
        // Consultas reales usando Query Builder a tus tablas de Neon
        $projects = DB::table('projects')->get();
        $nodes    = DB::table('nodes')->get();
        $servers  = DB::table('servers')->get();
        $metrics  = DB::table('metrics')->get();

        // Devolvemos el objeto JSON con las llaves que React espera
        return response()->json([
            'projects' => $projects,
            'nodes'    => $nodes,
            'servers'  => $servers,
            'metrics'  => $metrics,
        ]);
    }
}
