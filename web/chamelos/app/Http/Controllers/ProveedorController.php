<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function getProveedores(){
        $proveedores = Proveedor::all();
        return $proveedores;
    }

    public function postProveedor(Request $request){
        $input = $request->all();
        $proveedor = new Proveedor();
        $proveedor->id_proveedor = $input["rut"];
        $proveedor->nom_proveedor = $input["nombre"];
        $proveedor->id_empresa = $input["empresa"];
        $proveedor->fono_proveedor = $input["fono"];
        $proveedor->save();
        return $proveedor;
    }
}
