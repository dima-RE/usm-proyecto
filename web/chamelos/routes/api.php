<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Empresa
Route::get("empresas/get",[EmpresaController::class,"getEmpresas"]);
Route::post("empresas/post",[EmpresaController::class,"postEmpresa"]);
// Proveedor
Route::get("proveedores/get",[ProveedorController::class,"getProveedores"]);
Route::post("proveedores/post",[ProveedorController::class,"postProveedor"]);
// Producto
Route::get("productos/get",[ProductoController::class,"getProductos"]);
Route::post("productos/post",[ProductoController::class,"postProducto"]);
Route::get("categorias/get",[ProductoController::class,"getCategorias"]); // Temporal para Prueba Inicial
// Boleta

// -> Separacion en Encabezado y Detalle en el proyecto a futuro
// Categorias
// -> Parte del proyecto a futuro
// Local
// -> Datos locales de la tienda para el proyecto a futuro