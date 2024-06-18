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
        Schema::create('pterminados', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('id_sap');
            $table->string('codigo');
            $table->string('categoria');
            $table->string('sub_categoria');
            $table->string('marca');
            $table->string('img_envase');
            $table->string('img_display');
            $table->string('img_caja');
            $table->string('img_palet');
            $table->string('img_opc');
            $table->string('cod_granel');
            $table->string('color_granel');
            $table->string('olor_granel');
            $table->string('apariencia_granel');
            $table->string('almacenamiento');
            $table->string('transporte');
            $table->string('lote_caducidad');
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
        Schema::dropIfExists('pterminados');
    }
};
