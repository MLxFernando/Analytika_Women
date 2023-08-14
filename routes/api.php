<?php
use App\Http\Controllers\Api\Registro1Controller;
use App\Http\Controllers\Api\ListaRolController;
use App\Http\Controllers\Api\ListaAliadoController;
use App\Http\Controllers\Api\ListaUsuarioController;
use App\Http\Controllers\Api\ListaBolsaEmController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/AdministracionGerente', [Registro1Controller::class, 'index']);
Route::get('/ListaAliado', [ListaAliadoController::class, 'index']);
Route::get('/ListaRol', [ListaRolController::class, 'index']);
Route::get('/ListaUsuario', [ListaUsuarioController::class, 'index']);
Route::get('/ListaBolsaEmpleo', [ListaBolsaEmController::class, 'index']);