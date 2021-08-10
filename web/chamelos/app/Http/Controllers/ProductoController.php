<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function getCategorias(){
        $categorias = array();
        $categorias[] = "Limpieza";
        $categorias[] = "Bebidas";
        $categorias[] = "Lacteos";
        $categorias[] = "Cecinas";
        $categorias[] = "Galletas";
        $categorias[] = "Confites";

        return $categorias;
    }

    public function getProductos(){
        $productos = Producto::all();
        return $productos;
    }

    public function postProducto(Request $request){
        $input = $request->all();
        $producto = new Producto();
        $producto->cod_producto = $input["codigo"];
        $producto->nom_producto = $input["nombre"];
        $producto->categoria = $input["categoria"];
        $producto->id_proveedor = $input["proveedor"];
        $producto->precio = $input["precio"];
        $producto->stock_critico = $input["critico"];
        $producto->stock = $input["stock"];
        $producto->save();
        return $producto;
    }
}
