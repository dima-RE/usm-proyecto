<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_ventas', function (Blueprint $table) {
            //$table->id(); El nombre es num_venta
            $table->bigInteger("num_venta")->autoIncrement()->unsigned();
            $table->integer("cod_producto");
            $table->tinyInteger("cantidad");
            $table->integer("precio_venta");
            $table->tinyInteger("estado")->default(1);

            //$table->primary("num_venta"); Se supone que se define solo, si?
            $table->foreign("cod_producto")->references("cod_producto")->on("productos")->onDelete("cascade");
            $table->timestamps(); //cambiar a la tabla Ventas mas adelante
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('det_ventas');
    }
}
