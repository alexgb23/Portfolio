<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController; // 👈 Agrupado limpiamente arriba

/*

|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Ruta por defecto de Laravel Sanctum (puedes dejarla aquí)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/**
 * 📊 ENDPOINT CENTRALIZADO DEL PORTFOLIO
 * Devuelve proyectos, nodos, servidores y métricas IoT en una sola petición.
 */
Route::get('/portfolio', [PortfolioController::class, 'getPortfolioData']);

