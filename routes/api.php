<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\UserController;
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

});
