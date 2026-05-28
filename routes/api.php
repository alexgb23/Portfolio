<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\NodeController; // 👈 1. IMPORTA TU NUEVO CONTROLADOR

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Rutas oficiales de tu API en producción
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/nodes', [NodeController::class, 'index']); // 👈 2. REGISTRA LA RUTA DE NODOS
