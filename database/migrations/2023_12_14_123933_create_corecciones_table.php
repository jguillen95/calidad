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
        Schema::create('corecciones', function (Blueprint $table) {
            $table->id();
            $table->string('actividad');
            $table->string('responsable');
            $table->dateTime('fecha_corre');
            $table->string('firma_corre');
            $table->string('tipo');
            $table->bigInteger('desviacionCorrecion_id')->unsigned();
            $table->foreign('desviacionCorrecion_id')->references('id')->on('desviaciones');
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
        Schema::dropIfExists('corecciones');
    }
};
