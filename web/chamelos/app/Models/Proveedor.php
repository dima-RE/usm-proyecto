<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "Proveedores";

    public function empresa(){
        return $this->belongsTo("App\Models\Empresa","id_empresa");
    }

    public function productos(){
        return $this->hasMany("App\Models\Producto", "id_proveedor");
    }
}
