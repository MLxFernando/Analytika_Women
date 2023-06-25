<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/redirects', [HomeController::class, 'redirects'])->name('redirects');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
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