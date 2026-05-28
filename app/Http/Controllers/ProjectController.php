<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // 👈 OBLIGATORIO: Importa la fachada de Base de Datos

class ProjectController extends Controller
{
    /**
     * Devuelve el listado de proyectos desde la base de datos de Render.
     */
    public function index()
    {
        // 🚀 CORREGIDO: Consulta real a la tabla 'projects' en la nube
        $projects = DB::table('projects')->get();

        return response()->json($projects);
    }
}
