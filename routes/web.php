<?php
use App\Http\Controllers\MaestroController;
use App\Http\Controllers\AulasControlle;
use App\Http\Controllers\ClasesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MaestroController::class, 'home']);
//-------------------------------------------------------------------
Route::get('/maestros', [MaestroController::class, 'mostrarlista']);

Route::post('/maestros', [MaestroController::class, 'guardar']);

Route::get('/maestros/nuevo/', [MaestroController::class, 'formulariomaestro']);

Route::get('/maestros/eliminar/{id}', [MaestroController::class, 'eliminar']);

Route::get('/maestros/actualizar/{id}', [MaestroController::class, 'mostrar']);

Route::post('/maestros/actualizar/{id}', [MaestroController::class, 'actualizar']);

//----------------------------------------------------------------------------------
Route::get('/aulas', [AulasControlle::class, 'mostrarlistaaulas']);

Route::post('/aulas/guardar', [AulasControlle::class, 'guardar']);

Route::get('/aulas/nueva', [AulasControlle::class, 'formularioaulas']);

Route::get('/aulas/eliminar/{id}',[ AulasControlle::class, 'eliminar']);

Route::get('/aulas/actualizar/{id}', [AulasControlle::class, 'mostrar']);

Route::post('/aulas/actualizar/{id}',[AulasControlle::class, 'actualizar']);

//----------------------------------------------------------------------------

Route::get('/clases', [ClasesController::class, 'mostrarlistaclases']);

Route::get('/clases/nueva', [ClasesController::class, 'formularioclases']);

Route::post('/clases/guardar', [ClasesController::class, 'guardar']);

Route::get('/clases/eliminar/{codclase}',[ ClasesController::class, 'eliminar']);

Route::get('/clases/actualizar/{codclase}',[ ClasesController::class, 'mostrar']);

Route::post('/clases/actualizar/{id}',[ClasesController::class, 'actualizar']);