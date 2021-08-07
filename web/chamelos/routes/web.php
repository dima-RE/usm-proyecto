<?php

use Illuminate\Support\Facades\Route;

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

// Boleta
Route::view("/","home")->name("home");

// Producto
Route::view("/ver_productos","ver_productos")->name("ver_productos");
Route::view("/agregar_producto","agregar_producto")->name("agregar_producto");

// Proveedor
Route::view("/ver_proveedores","ver_proveedores")->name("ver_proveedores");
Route::view("/agregar_proveedor","agregar_proveedor")->name("agregar_proveedor");

// Empresa
Route::view("/ver_empresas","ver_empresas")->name("ver_empresas");
Route::view("/agregar_empresa","agregar_empresa")->name("agregar_empresa");