<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Ruta para la vista Blade
Route::get('/users', [UserController::class, 'index']);

// Carga las rutas de la API desde api.php
Route::prefix('api')->group(function () {
require base_path('routes/api.php');
});


use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;

Route::resource('usuarios', UsuarioController::class);
Route::resource('productos', ProductoController::class);

use App\Http\Controllers\MarcaController;

Route::resource('marcas', MarcaController::class);

