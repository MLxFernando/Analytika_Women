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
use App\Http\Livewire\ReporteController;

Route::get('/redirects', [HomeController::class, 'redirects'])->name('redirects');
Route::get('/Rolpdf', [ RolesController::class, 'pdf'])->name('rolpdf');
Route::get('/Clientepdf', [ClientesController::class, 'pdf'])->name('clientepdf');
Route::get('/Gerentepdf', [AdminGerentesController::class, 'pdf'])->name('gerentepdf');
Route::get('/AdminAliadopdf', [AdminAliadosController::class, 'pdf'])->name('adminaliadopdf');
Route::get('/Aliadopdf', [AliadosController::class, 'pdf'])->name('aliadopdf');
Route::get('/BolsaEmpleopdf', [BolsaEmpleoController::class, 'pdf'] )->name('bolsaempleopdf');

Route::get('/Reporte', [ReporteController::class, 'index'] )->name('reporte');

Route::get('/AdminGerentes', AdminGerentesController::class)->name('admingerentes');
Route::get('/AdminAliados', AdminAliadosController::class)->name('adminaliados');
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