<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEmpresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            //$table->id();
            $table->string("id_empresa",12);
            $table->string("nom_empresa",200);
            $table->string("dir_empresa",200);
            $table->string("fono_empresa");
            $table->string("email_empresa",100);
            $table->tinyInteger("estado")->default(1);

            $table->primary("id_empresa");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
