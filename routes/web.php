<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LoginController::class, 'loginInicio'])->name('login');
Route::get('login', [LoginController::class, 'loginInicio'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
//midelware

Route::middleware('auth')->group(function (){
    Route::get('home', [InicioController::class, 'inicio'])->name('inicio');

    Route::controller(ProductoController::class)->group(function () {
        Route::get('productos', 'index')->name('productos.index');
        Route::get('productos/creando',  'crear')->name('productos.crear');
        Route::post('productos', 'store')->name('productos.store');
        Route::get('productos/{id}', 'show')->name('productos.show');
        Route::delete('productos/{ProductoID}', 'destroy')->name('productos.delete');
        Route::put('productos/{id}', [ProductoController::class, 'update'])->name('productos.edit');
    });
    Route::controller(ClientesController::class)->group(function () {
        Route::get('cliente', 'index');
        Route::get('cliente/creando',  'crear');
     
    });
});
    
//clientes
Route::get('clientes', function () {
   return 'HOLA Clientes' ;
});
