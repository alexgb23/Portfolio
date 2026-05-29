<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// 🚀 Tus APIs estructuradas por separado
Route::get('/projects', [PortfolioController::class, 'projects']);
Route::get('/nodes', [PortfolioController::class, 'nodes']);
Route::get('/servers', [PortfolioController::class, 'servers']);
Route::get('/metrics', [PortfolioController::class, 'metrics']);
