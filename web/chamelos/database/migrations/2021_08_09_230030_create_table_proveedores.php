<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            //$table->id(); No es neceesario
            $table->string("id_proveedor",20);
            $table->string("nom_proveedor",100);
            $table->string("id_empresa",12);
            $table->string("fono_proveedor",12);
            $table->tinyInteger("estado")->default(1);

            $table->primary("id_proveedor");
            $table->foreign("id_empresa")->references("id_empresa")->on("empresas")->onDelete("cascade");
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
        Schema::dropIfExists('proveedores');
    }
}
