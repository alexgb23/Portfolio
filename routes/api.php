<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController; // Importación arriba

// Ruta para obtener los proyectos de tu portafolio
Route::get('/projects', [ProjectController::class, 'index']);

// Ruta protegida de usuario (puedes dejar una sola)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/nodes', [ProjectController::class, 'getNodes']);
Route::post('/terminal-log', [ProjectController::class, 'logCommand']);
