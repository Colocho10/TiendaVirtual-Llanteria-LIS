<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PermisosController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ReembolsoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SuscripcionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//RUTAS DE CATEGORIA
Route::controller(CategoriaController::class)->group(function(){
    Route::get('/categoria','index');
});

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/{id}', [CategoriaController::class, 'show']);
Route::post('/categorias', [CategoriaController::class, 'store']);
Route::put('/categorias/{id}', [CategoriaController::class, 'update']);
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy']);


//RUTAS DE CONTACTO
Route::controller(ContactoController::class)->group(function(){
    Route::get('/contacto','index');
});

Route::get('/contactos', [ContactoController::class, 'index']);
Route::get('/contactos/{id}', [ContactoController::class, 'show']);
Route::post('/contactos', [ContactoController::class, 'store']);
Route::put('/contactos/{id}', [ContactoController::class, 'update']);
Route::delete('/contactos/{id}', [ContactoController::class, 'destroy']);

//RUTAS DE IMAGEN
Route::controller(ImagenController::class)->group(function(){
    Route::get('/imagen','index');
});

Route::get('/imagenes', [ImagenController::class, 'index']);
Route::get('/imagenes/{id}', [ImagenController::class, 'show']);
Route::post('/imagenes', [ImagenController::class, 'store']);
Route::put('/imagenes/{id}', [ImagenController::class, 'update']);
Route::delete('/imagenes/{id}', [ImagenController::class, 'destroy']);

//RUTAS DE MODULO
Route::controller(ModuloController::class)->group(function(){
    Route::get('/modulo','index');
});

Route::get('/modulos', [ModuloController::class, 'index']);
Route::get('/modulos/{id}', [ModuloController::class, 'show']);
Route::post('/modulos', [ModuloController::class, 'store']);
Route::put('/modulos/{id}', [ModuloController::class, 'update']);
Route::delete('/modulos/{id}', [ModuloController::class, 'destroy']);

//RUTAS DE PEDIDO
Route::controller(PedidoController::class)->group(function(){
    Route::get('/pedido','index');
});

Route::get('/pedidos', [PedidoController::class, 'index']);
Route::get('/pedidos/{id}', [PedidoController::class, 'show']);
Route::post('/pedidos', [PedidoController::class, 'store']);
Route::put('/pedidos/{id}', [PedidoController::class, 'update']);
Route::delete('/pedidos/{id}', [PedidoController::class, 'destroy']);

//RUTAS DE PERMISOS
Route::controller(PermisosController::class)->group(function(){
    Route::get('/permisos','index');
});

Route::get('/permisos', [PermisosController::class, 'index']);
Route::get('/permisos/{id}', [PermisosController::class, 'show']);
Route::post('/permisos', [PermisosController::class, 'store']);
Route::put('/permisos/{id}', [PermisosController::class, 'update']);
Route::delete('/permisos/{id}', [PermisosController::class, 'destroy']);

//RUTAS DE PERSONA
Route::controller(PersonaController::class)->group(function(){
    Route::get('/persona','index');
});

Route::get('/personas', [PersonaController::class, 'index']);
Route::get('/personas/{id}', [PersonaController::class, 'show']);
Route::post('/personas', [PersonaController::class, 'store']);
Route::put('/personas/{id}', [PersonaController::class, 'update']);
Route::delete('/personas/{id}', [PersonaController::class, 'destroy']);

//RUTAS DE PRODUCTO
Route::controller(ProductoController::class)->group(function(){
    Route::get('/producto','index');
});

Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/{id}', [ProductoController::class, 'show']);
Route::post('/productos', [ProductoController::class, 'store']);
Route::put('/productos/{id}', [ProductoController::class, 'update']);
Route::delete('/productos/{id}', [ProductoController::class, 'destroy']);

//RUTAS DE REEMBOLSO
Route::controller(ReembolsoController::class)->group(function(){
    Route::get('/reembolso','index');
});

Route::get('/reembolsos', [ReembolsoController::class, 'index']);
Route::get('/reembolsos/{id}', [ReembolsoController::class, 'show']);
Route::post('/reembolsos', [ReembolsoController::class, 'store']);
Route::put('/reembolsos/{id}', [ReembolsoController::class, 'update']);
Route::delete('/reembolsos/{id}', [ReembolsoController::class, 'destroy']);

//RUTAS DE ROL
Route::controller(RolController::class)->group(function(){
    Route::get('/rol','index');
});

Route::get('/roles', [RolController::class, 'index']);
Route::get('/roles/{id}', [RolController::class, 'show']);
Route::post('/roles', [RolController::class, 'store']);
Route::put('/roles/{id}', [RolController::class, 'update']);
Route::delete('/roles/{id}', [RolController::class, 'destroy']);

//RUTAS DE SUSCRIPCIOM
Route::controller(SuscripcionController::class)->group(function(){
    Route::get('/suscripcion','index');
});

Route::get('/suscripciones', [SuscripcionController::class, 'index']);
Route::get('/suscripciones/{id}', [SuscripcionController::class, 'show']);
Route::post('/suscripciones', [SuscripcionController::class, 'store']);
Route::put('/suscripciones/{id}', [SuscripcionController::class, 'update']);
Route::delete('/suscripciones/{id}', [SuscripcionController::class, 'destroy']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
