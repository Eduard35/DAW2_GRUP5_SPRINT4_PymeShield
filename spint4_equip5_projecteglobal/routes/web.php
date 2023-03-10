<?php

use App\Http\Controllers\DevicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RestoreController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ImageDeviceController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class, '__invoke');
Route::get('/index', HomeController::class);

// Restaurar
Route::get('/restaurar', [RestoreController::class, 'listar']);
Route::patch('/restaurar/{id}', [RestoreController::class, 'restaurar']) ->name('restaurar.restaurar');

//Mostrar Dispositivos
Route::get('/dispositivo', [DevicesController::class, 'mostrarDispositivos']);
Route::get('/dispositivo/{id}', [DevicesController::class, 'show'])->name('dispositiu.show');
Route::post('/dispositivo', [DevicesController::class, 'crear'])->name('dispositiu.crear');
Route::put('/dispositivo/{id}', [DevicesController::class, 'modificar'])->name('dispositiu.update');
Route::patch('/dispositivo/{id}', [DevicesController::class, 'eliminar'])->name('dispositiu.eliminar');

//Mostrar inventari
Route::get('/inventario', [InventoryController::class, 'inventario']);
Route::post('/inventario', [InventoryController::class, 'buscar'])->name('inventari.buscar');


// Imatges
Route::get('/imagenes', [ImageDeviceController::class, 'index'])->name('image.index');
Route::post('/imagenes', [ImageDeviceController::class, 'guardar'])->name('image.guardar');
Route::get('/imagenes/{id}', [ImageDeviceController::class, 'mostrar'])->name('image.mostrar');


