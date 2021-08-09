<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProveedorController;

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

// Boleta