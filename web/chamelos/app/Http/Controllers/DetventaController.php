<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Det_Venta;

class DetventaController extends Controller
{
    
    public function getVentas(){
        $ventas = Det_Venta::all();
        return $ventas;
    }

    public function postVenta(Request $request){
        $input = $request->all();
        $venta = new Det_Venta();
        $venta->cod_producto = $input["codigo"];
        $venta->cantidad = $input["cantidad"];
        $venta->precio_venta = $input["total"];
        $venta->save();
        return $venta;
    }

    // falta eliminar

    //falta modificar
}
