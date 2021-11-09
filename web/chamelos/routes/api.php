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

// pasar links plural a unico

// Empresa
Route::get("empresas/get",[EmpresaController::class,"getEmpresas"]);
Route::post("empresas/post",[EmpresaController::class,"postEmpresa"]);
// POST = Modificar
// POST = Eliminar

// Proveedor
Route::get("proveedores/get",[ProveedorController::class,"getProveedores"]);
Route::post("proveedores/post",[ProveedorController::class,"postProveedor"]);
// POST = Modificar
// POST = Eliminar

// Producto
Route::get("productos/get",[ProductoController::class,"getProductos"]);
Route::post("productos/post",[ProductoController::class,"postProducto"]);
// POST = Modificar
// POST = Eliminar
// GET = Informe Critico --> Productos bajo stock. Transformar informe a pdf

// Categorias
// GET = Consultar
// POST = Annadir
// POST = Modificar
// POST = Eliminar
Route::get("categorias/get",[ProductoController::class,"getCategorias"]); // Temporal para Prueba Inicial

// Venta
// GET = Consultar
// POST = Annadir
// POST = Anular
// GET = Informe Ventas --> Periodo de ventas. Transformar informe a pdf

// Detalle de Venta
// GET = Consultar
// POST = Annadir
// POST = Anular
// GET = Informe Ventas --> Periodo de Ventas - detalle. Transformar informe a pdf

// Locales
// GET = Consultar
// POST = Annadir
// POST = Modificar
// POST = Eliminar