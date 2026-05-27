<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\SystemNode; // 1. Importación colocada correctamente arriba
use Illuminate\Http\Request;
use App\Models\TerminalCommand;

class ProjectController extends Controller
{
    // Método para obtener los proyectos de software
    public function index()
    {
        return response()->json(Project::all());
    }

    // 2. Método de los nodos colocado correctamente DENTRO de la clase
    public function getNodes()
    {
        return response()->json(SystemNode::all());
    }

    public function logCommand(Request $request)
    {
        $request->validate([
            'command' => 'required|string|max:50',
            'response_status' => 'required|string|max:20'
        ]);

        TerminalCommand::create([
            'command' => $request->command,
            'response_status' => $request->response_status,
            'ip_address' => $request->ip() // Captura la IP interna del contenedor/cliente
        ]);

        return response()->json(['status' => 'Command logged successfully'], 201);
    }
}
