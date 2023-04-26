<?php

use App\Http\Controllers\CursoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get("/", [CursoController::class, 'getAll']);
Route::get("/{id}", [CursoController::class, 'getById']);
Route::post("/", [CursoController::class, 'create']);
Route::put("/{id}", [CursoController::class, 'update']);
Route::delete("/{id}", [CursoController::class, 'delete']);