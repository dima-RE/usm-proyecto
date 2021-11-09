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

// Login

// Boleta
Route::view("/","home")->name("home"); //nombre de Boleta
// Boton Nueva Venta --> Desbloquea ingreso de productos
// Boton Agregar producto --> agrega producto al Detalle.
// Boton Anular/Modificar --> Si se escanea el producto y existe en el detalle, da la opcion de anular/quitar de la lista, o aumentar la cantidad.
// Cuadro con detalles de productos

// Categoria
// ruta /ver_categorias
// boton Modificar y Eliminar
// ruta /agregar_categorias

// Producto
Route::view("/productos_consultar","ver_productos")->name("ver_productos");
// Botones Modificar y Eliminar
Route::view("/productos_agregar","agregar_producto")->name("agregar_producto");
// ruta /generar_informe

// Proveedor
Route::view("/proveedores_consultar","ver_proveedores")->name("ver_proveedores");
// Botones Modificar y Eliminar
Route::view("/proveedores_agregar","agregar_proveedor")->name("agregar_proveedor");

// Empresa
Route::view("/empresas_consultar","ver_empresas")->name("ver_empresas");
// Botones Modificar y Eliminar
Route::view("/empresas_agregar","agregar_empresa")->name("agregar_empresa");

// Ventas
// ruta /ver_ventas
// boton Anular
// ruta /generar_informe

// Local
// ruta /ver_locales
// boton Modificar y Eliminar
// ruta /agregar_categorias