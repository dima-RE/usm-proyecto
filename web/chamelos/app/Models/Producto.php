<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "Productos";

    public function proveedor(){
        return $this->belongsTo("App\Models\Proveedor","id_proveedor");
    }

    public function ventas(){
        return $this->hasMany("App\Models\Det_Venta", "cod_producto");
    }
}
