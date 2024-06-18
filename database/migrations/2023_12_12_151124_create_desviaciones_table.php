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
        Schema::create('desviaciones', function (Blueprint $table) {
            $table->id();
            $table->string('area_des');
            $table->string('prodcuto_des');
            $table->string('presentacion_des');
            $table->string('lote_des');
            $table->string('cantidad_des');
            $table->string('descripcion_des');
            $table->string('desviacion_des');
            $table->string('investigacion_des');
            $table->string('anexos_des');
            $table->string('vobo_des');
            $table->string('dptoCierre_des');
            $table->string('firma');
            $table->dateTime('fechaCierre_des');
            $table->string('Estatus');
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
        Schema::dropIfExists('desviaciones');
    }
};
