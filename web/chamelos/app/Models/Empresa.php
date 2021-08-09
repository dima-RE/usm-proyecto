<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function proveedores(){
        return $this->hasMany("App\Models\Proveedor", "id_empresa");
    }
}
