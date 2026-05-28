<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Importa la fachada de base de datos

class NodeController extends Controller
{
    /**
     * Devuelve el listado de nodos de infraestructura desde la base de datos de Render.
     */
    public function index()
    {
        // Consulta real a la tabla 'nodes'
        $nodes = DB::table('nodes')->get();

        return response()->json($nodes);
    }
}
