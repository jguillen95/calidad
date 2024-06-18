<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->string('producto');
            $table->string('lote');
            $table->dateTime('fecha');
            $table->string('contenido');
            $table->string('id_sap');
            $table->string('descripcion');
            $table->string('caracteristicas');
            $table->string('porcion');
            $table->string('ingredientes');
            $table->string('info_nutri');
            $table->string('presentacion_img');
            $table->string('uso');
            $table->string('almacen');
            $table->string('advertencias');
            $table->string('elaboro');
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
        Schema::dropIfExists('fichas');
    }
};
