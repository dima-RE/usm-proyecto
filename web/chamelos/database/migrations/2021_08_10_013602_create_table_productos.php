<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            //$table->id(); No es neceesario
            $table->integer("cod_producto");
            $table->string("nom_producto",100);
            $table->string("categoria",15); //recrear como cod_categoria FORANEA a futuro
            $table->string("id_proveedor",20);
            $table->integer("precio");
            $table->tinyInteger("stock_critico");
            $table->tinyInteger("stock");
            $table->tinyInteger("estado")->default(1);

            $table->primary("cod_producto");
            $table->foreign("id_proveedor")->references("id_proveedor")->on("proveedores")->onDelete("cascade");
            //$table->timestamps(); No es necesario
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
