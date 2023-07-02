<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\AdminAliadosController;
use App\Http\Livewire\AdminGerentesController;
use App\Http\Livewire\AliadosController;
use App\Http\Livewire\BolsaEmpleoController;
use App\Http\Livewire\ClientesController;
use App\Http\Livewire\ConsultoresController;
use App\Http\Livewire\CuposController;
use App\Http\Livewire\CursosController;
use App\Http\Livewire\EventosController;
use App\Http\Livewire\OfertaEmpleoController;
use App\Http\Livewire\PostulantesController;
use App\Http\Livewire\RolesController;
use App\Http\Livewire\ServiciosController;
use App\Http\Controllers\HomeController;


Route::get('/redirects', [HomeController::class, 'redirects'])->name('redirects');
Route::get('/AdminAliados', AdminAliadosController::class)->name('adminaliados');
Route::get('/AdminGerentes', AdminGerentesController::class)->name('admingerentes');
Route::get('/Aliados', AliadosController::class)->name('aliados');
Route::get('/BolsaEmpleo', BolsaEmpleoController::class)->name('bolsaempleo');
Route::get('/Cliente', ClientesController::class)->name('cliente');
Route::get('/Consultor', ConsultoresController::class)->name('consultores');
Route::get('/Cupos', CuposController::class)->name('cupos');
Route::get('/Cursos', CursosController::class)->name('cursos');
Route::get('/Eventos', EventosController::class)->name('eventos');
Route::get('/OfertaEmpleo', OfertaEmpleoController::class)->name('ofertaempleo');
Route::get('/Postulantes', PostulantesController::class)->name('postulantes');
Route::get('/Roles', RolesController::class)->name('roles');
Route::get('/Servicios', ServiciosController::class)->name('servicios');