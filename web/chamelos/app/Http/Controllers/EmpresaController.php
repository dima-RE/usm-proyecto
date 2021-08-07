<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function getEmpresas(){
        $empresas = Empresa::all();
        return $empresas;
    }

    public function postEmpresa(Request $request){
        $input = $request->all();
        $empresa = new Empresa();
        $empresa->id_empresa = $input["rut"];
        $empresa->nom_empresa = $input["nombre"];
        $empresa->dir_empresa = $input["direccion"];
        $empresa->fono_empresa = $input["fono"];
        $empresa->email_empresa = $input["email"];
        $empresa->estado = $input["estado"];
        $empresa->save();
        return $empresa;
    }
}
