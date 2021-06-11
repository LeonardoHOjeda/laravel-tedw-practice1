<?php

use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\BecaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitudBecaController;

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/solicitudes', [BecaController::class, 'index'])->name('becas.index');
Route::get('/solicitudes/{beca}', [BecaController::class, 'show'])->name('becas.show');

Route::get('/becas', [BecaController::class, 'create'])->name('becas.create');
Route::post('/becas', [BecaController::class, 'store'])->name('becas.store');


Route::get('/solicitarBeca',[SolicitudBecaController::class, 'llenar_solicitud'] );
Route::post('/solicitarBeca',[SolicitudBecaController::class, 'mandar_solicitud'] );
