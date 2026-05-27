<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// 1. Añade esta línea para importar tu controlador automático:
use App\Http\Controllers\ProjectController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// 2. Añade esta línea para definir la ruta de tus proyectos:
Route::get('/projects', [ProjectController::class, 'index']);
