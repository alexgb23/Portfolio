<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Añade esta función con tus proyectos de ejemplo
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'Mi Portfolio Desacoplado',
                'description' => 'Laravel limpio e independiente funcionando en Docker local.',
            ]
        ];

        return response()->json($projects);
    }
}
