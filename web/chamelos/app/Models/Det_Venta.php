<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Det_Venta extends Model
{
    use HasFactory;
    protected $table = "Det_Ventas";

    public function producto(){
        return $this->belongsTo("App\Models\Producto","cod_producto");
    }
}
