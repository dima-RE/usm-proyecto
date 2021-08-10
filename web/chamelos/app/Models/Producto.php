<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function proveedor(){
        return $this->belongsTo("App\Models\Proveedor","id_proveedor");
    }
}
