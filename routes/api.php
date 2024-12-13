<?php

use App\Http\Controllers\AdicionalesPersonalizacionController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\CotizacionesController;
use App\Http\Controllers\DetalleAdicionalesController;
use App\Http\Controllers\DetalleVentaController;
use App\Http\Controllers\EstadoVentaController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\GrupoProductosController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoPagoController;
use App\Http\Controllers\TipoPersonalizacionController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VentaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//TODO revisar esto
/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

Route::prefix('arq')->group(function () {
   Route::resource('tipo-usuario', TipoUsuarioController::class);
   Route::resource('user', UserController::class);
   Route::resource('categoria', CategoriaController::class);
   Route::resource('producto', ProductoController::class);
   Route::resource('grupo', GrupoController::class);
   Route::resource('grupo-producto', GrupoProductosController::class);
   Route::resource('tipo-personalizacion', TipoPersonalizacionController::class);
   Route::resource('adicionales-personalizacion', AdicionalesPersonalizacionController::class);
   Route::resource('tipo-pago', TipoPagoController::class);
   Route::resource('estado-venta', EstadoVentaController::class);
   Route::resource('venta', VentaController::class);
   Route::resource('detalle-venta', DetalleVentaController::class);
   Route::resource('detalle-adicionales', DetalleAdicionalesController::class);
   Route::resource('cotizaciones', CotizacionesController::class);
   Route::resource('config', ConfigController::class);

   Route::post('login', [UserController::class ,'login']);


});
